<?php

namespace App\Controllers;

class SwitchLang extends BaseController
{
    public function index($langData = null)
    {
        $this->session = session();
        $this->session->set('site_lang', $langData);
        // $locale = isset($_SESSION['site_lang']) ? $this->session->get('site_lang') : $langData;
        // $this->language = \Config\Services::language();
        // $this->language->setLocale($locale);

        return redirect()->to($_SERVER['HTTP_REFERER']);
    }
}
