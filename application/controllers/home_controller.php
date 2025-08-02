<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use app\core\Core_controller;

class home_controller extends Core_controller
{
 
    public function __construct()
    {
        parent::__construct();
       
    }

    public function index()
    {

        
        
        $data = [
            'current_lang'          => $this->lang_code,
            'home_about_content'    => lang('home_about_content'),
            'footer_about'          => lang('footer_about'),
            'footer_contact_info'   => lang('footer_contact_information'),
            // İleride eklemek istediğin diğer metinler...
        ];
        $this->properties('Zeybek home - Kalite, Güven ve Modern Tasarım', 'Zeybek home','users')
        ->sections([
            'header' => 'widgets/home/header/header',
            'footer' => 'widgets/home/footer/footer',
            'slider' => 'widgets/home/slider/slider',
            'navbar' => 'widgets/home/home-navbar/home-navbar',
            'page_footer' => ['view' => 'widgets/home/page_footer/page_footer', 'data' => $data],
            'cookies' => 'widgets/home/cookies/cookies'
        ])->render('pages/home/home', $data);

    }

    public function change_lang($lang)
    {
         /** @var string[] $supported */
        $supported = $this->config->item('supported_languages');

        // Geçerliyse session’a ata
        if (in_array($lang, $supported, true)) {
            $this->session->set_userdata('site_lang', $lang);
        }

        // Önceki sayfaya dön (yoksa anasayfa)
        $ref = $this->input->server('HTTP_REFERER') 
             ?: site_url();

        redirect($ref);
    }
}