<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(\App\Services\InstagramService $instagram)
    {
        $posts = $instagram->getLatestPosts(4);
        $slides = [
            [
                'title' => "APRENDE TAEKWONDO <br> CON NOSOTROS",
                'text' => "Más de 10 años de experiencia en la docencia. Respeto, disciplina, trabajo en equipo, hábitos saludables y diversión.",
                'bg' => 'bg-blue-hero',
                'type' => 'image',
                'src' => '/storage/img/slide1.jpg',
                'bg_pos' => 'bg-left',
                'cta_text' => 'CONÓCENOS',
                'cta_link' => route('conocenos'),
            ],
            [
                'title' => "TAEKWONDO DE COMPETICIÓN",
                'text' => "Somos un club afiliado a la Federación de Taekwondo de la Comunidad Valenciana y a la Real Federación Española de Taekwondo. Nuestro equipo de competición participa tanto en la modalidad de COMBATE como en la de POOMSAE.",
                'bg' => 'bg-cyan-brand',
                'type' => 'image',
                'src' => '/storage/img/slide2.jpg',
                'cta_text' => 'COMPETICIONES',
                'cta_link' => 'https://federacion.tkdcv.es/federacion/app/nosession.php?permiso=campeonato',
                'cta_external' => true,
            ],
            [
                'title' => "INICIACIÓN AL TAEKWONDO",
                'text' => "Nuestro club cuenta con clases para todas las edades, a partir de los 3-4 años. Es por ello que nuestros esfuerzos no solo se concentran en la faceta deportiva, si no en la formación integral como individuo.",
                'bg' => 'bg-cyan-brand',
                'type' => 'image',
                'src' => '/storage/img/slide3.png',
                'bold' => true,
                'cta_text' => 'VER HORARIOS',
                'cta_link' => '#horarios',
            ],
            [
                'title' => "LLEGA DONDE TÚ QUIERAS",
                'text' => "La contínua evolución del Taekwondo lo convierte en un deporte de contacto espectacular pero totalmente seguro de practicar y competir.",
                'bg' => 'bg-cyan-brand',
                'type' => 'video',
                'src' => '/storage/video/Accion_Franc_editado.mp4',
                'cta_text' => 'VEN A PROBAR',
                'cta_link' => 'https://maps.app.goo.gl/zNRgjd84k4rFpZgT8',
                'cta_external' => true,
            ],
        ];


        return view('home', compact('slides', 'posts'));
    }
}
