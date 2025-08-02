<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use app\core\Core_controller;

class Contact_controller extends Core_controller
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
        $this->properties('Zeybek Home - iletişime geçin', 'Zeybek Home', 'users')
        ->sections([
            'header' => 'widgets/home/header/header',
            'footer' => 'widgets/home/footer/footer',
            'navbar' => 'widgets/home/navbar/navbar',
            'page_footer' => ['view' => 'widgets/home/page_footer/page_footer', 'data' => $data],
            'cookies' => 'widgets/home/cookies/cookies'
        ])->render('pages/contact/contact', $data);
    }
}