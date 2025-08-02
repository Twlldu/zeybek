<?php

use app\core\Core_controller;

class Products_controller extends Core_controller
{
    public $data;
    public Products_model $productsModel;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Products_model', 'productsModel');
    }

    public function index()
    {
        
    }

    public function lotus_yemek()
    {
        $this->data = [
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
            'navbar' => 'widgets/home/navbar/navbar',
            'page_footer' => ['view' => 'widgets/home/page_footer/page_footer', 'data' => $this->data],
            'cookies' => 'widgets/home/cookies/cookies'
        ])->render('pages/yemek-odasi/lotus',  $this->data);
    }

    public function asya_yasam()
    {
        $this->data = [
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
            'navbar' => 'widgets/home/navbar/navbar',
            'page_footer' => ['view' => 'widgets/home/page_footer/page_footer', 'data' => $this->data],
            'cookies' => 'widgets/home/cookies/cookies'
        ])->render('pages/yemek-odasi/asya',  $this->data);
    }

    public function petra_yasam()
    {
        $this->data = [
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
            'navbar' => 'widgets/home/navbar/navbar',
            'page_footer' => ['view' => 'widgets/home/page_footer/page_footer', 'data' => $this->data],
            'cookies' => 'widgets/home/cookies/cookies'
        ])->render('pages/yemek-odasi/petra',  $this->data);
    }


    public function search($product_link = '')
    {
        $this->load->model('Products_model', 'productsModel');

        // 1) Tam slug/ID eşleşmesi var mı?
        $product = $this->productsModel->getByLink($product_link);
        if ($product) {
            return $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($product->toArray(), JSON_UNESCAPED_UNICODE));
        }

        // 2) Yoksa isimde ara, sadece name+slug dön
        $matches = $this->productsModel->searchByName($product_link);
        return $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($matches, JSON_UNESCAPED_UNICODE));
    }

    public function enna_yemek()
    {
        $this->data = [
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
            'navbar' => 'widgets/home/navbar/navbar',
            'page_footer' => ['view' => 'widgets/home/page_footer/page_footer', 'data' => $this->data],
            'cookies' => 'widgets/home/cookies/cookies'
        ])->render('pages/yemek-odasi/enna',  $this->data);
    }

      public function enna_plus_yemek()
    {
        $this->data = [
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
            'navbar' => 'widgets/home/navbar/navbar',
            'page_footer' => ['view' => 'widgets/home/page_footer/page_footer', 'data' => $this->data],
            'cookies' => 'widgets/home/cookies/cookies'
        ])->render('pages/yemek-odasi/enna_plus',  $this->data);
    }
}