<?php

namespace app\core;

use app\entities\core\core_entity;

defined('BASEPATH') or exit('No direct script access allowed');




/**
 * @property CI_Loader $load
 * @property CI_Session $session
 * @property CI_Input $input
 * @property CI_URI $uri
 */

class Core_controller extends \CI_Controller
{
    private $entity;
    public $session;
    public $output;
    public $prop = [];
    public $sections = [];
    public $middlewares = [];
    private $middlewareHandler;

    public $lang_code;
    public $lang;
    public function __construct()
    {
        parent::__construct();

        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate");
        $this->output->set_header("Cache-Control: post-check=0, pre-check=0", false);
        $this->output->set_header("Pragma: no-cache");

        $this->entity = new core_entity();
        $this->load->library('session');

        $this->load->helper(['url','language','lang']);

        $this->lang_code = init_language();
        $this->middlewareHandler = new Core_middleware(); // Middleware handler
    }


    // Properties (Başlık, Alt Başlık, Tür, Ekstra Veri)
    public function properties($title = '', $subtitle = '', $type = '', $data = null): self
    {
        // Mevcut entity üzerinde işlemleri yap
        $this->entity->setTitle($title)
            ->setSubTitle($subtitle)
            ->setType($type)
            ->setData($data);

        // prop dizisini güncelle
        $this->prop = [
            'title'    => $this->entity->getTitle(),
            'subtitle' => $this->entity->getSubTitle(),
            'type'     => $this->entity->getType(),
            'data'     => $this->entity->getData(),
        ];

        return $this; // Method chaining
    }




    // Sections: Hem view hem de data göndermeye izin verir
    public function sections(array $sections): self
    {
        foreach ($sections as $key => $config) {
            if (is_string($config)) {
                // Sadece view dosyası gönderilmişse, prop'u otomatik olarak ekle
                $this->sections[$key] = $this->load->view($config, $this->prop, true);
            } elseif (is_array($config) && isset($config['view'])) {
                // Hem view hem özel data varsa, prop ile özel data birleştiriliyor
                $data = array_merge($this->prop, $config['data'] ?? []);
                $this->sections[$key] = $this->load->view($config['view'], $data, true);
            }
        }


        return $this; // Method chaining
    }

    public function middleware(array $middlewares): self
    {
        $this->middlewares = $middlewares; // Middleware listesini kaydet
        return $this; // Method chaining
    }

  




    // Render: Tüm verileri birleştirip şablonu yükler
    public function render(string $template, array $extraData = []): void
    {

        // Middleware'leri çalıştır
        if (!empty($this->middlewares)) {
            $this->middlewareHandler->handle($this->middlewares);
        }

    // Eğer ekstra veri varsa, prop ile birleştir

        // Eğer ekstra veri varsa, prop ile birleştir

        $data = array_merge($this->prop, [
            'sections' => $this->sections, // Sections verilerini ekle
        ], $extraData);

        $this->load->view($template, $data);
    }

  

}