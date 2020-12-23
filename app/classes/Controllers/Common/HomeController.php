<?php

namespace App\Controllers\Common;

use App\App;
use App\Views\BasePage;
use Core\View;
use Core\Views\Link;

class HomeController
{
    protected $page;

    public function __construct()
    {
        $this->page = new BasePage([
            'title' => 'Klubas',
            'js' => ['/media/js/home.js']
        ]);
    }
    
    public function index(): ?string
    {
        $services = [
            [
                'image' => '/media/img/istyrimas.jpg',
                'title' => 'Unikalus sporto klubas Vilniuje',
                'description' => 'Tai vienintelis sporto klubas, taikantis mediciniškai pagrįstas ir individualiai subalansuotas sporto, sveikatingumo ir reabilitacijos paslaugas savo klientams.'
            ],
            [
                'image' => '/media/img/programos.jpg',
                'title' => 'Profesionalų dėmesys',
                'description' => 'Skirtingas žmogaus santykis su sportu reiškia skirtingas sveikatos problemas ir skirtingus sveikatingumo tikslus.'
            ],
            [
                'image' => '/media/img/reabilitacija.jpg',
                'title' => 'Teikiamos paslaugos',
                'description' => 'Teikiame platų mediciniškai pagrįstų sportavimo paslaugų komplektą – nuo išsamios individualizuotų grupinių treniruočių iki mitybos konsultavimo.'
            ],
        ];

        $content = (new View([
            'title' => '',
            'services' => $services ?? []
        ]))->render(ROOT . '/app/templates/content/index.tpl.php');

        $this->page->setContent($content);

        return $this->page->render();
    }
}

