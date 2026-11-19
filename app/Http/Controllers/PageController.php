<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function conocenos()
    {
        return view('pages.conocenos');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function welcomeGuide()
    {
        $pdfPath = resource_path('docs/Guia_Bienvenida_Taekwondo_Fabra.pdf');

        abort_unless(file_exists($pdfPath), 404);

        return response()->file($pdfPath, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="Guia_Bienvenida_Taekwondo_Fabra.pdf"',
        ]);
    }
}
