<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PoomsaeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/conocenos', [PageController::class, 'conocenos'])->name('conocenos');
Route::get('/preguntas-frecuentes', [PageController::class, 'faq'])->name('faq');
Route::get('/{id}poomsae', [PoomsaeController::class, 'show'])->where('id', '[0-9]+')->name('poomsae.show');

Route::get('/examenes/descargar-pdf/{ageGroup}/{belt}', function ($ageGroup, $belt) {
    $jsonPath = resource_path('data/exam_syllabus.json');
    if (! file_exists($jsonPath)) {
        abort(404);
    }

    $syllabusData = json_decode(file_get_contents($jsonPath), true);
    if (! isset($syllabusData[$ageGroup])) {
        abort(404);
    }

    $currentExam = null;
    foreach ($syllabusData[$ageGroup] as $exam) {
        if ($exam['belt'] === $belt) {
            $currentExam = $exam;
            break;
        }
    }

    if (! $currentExam) {
        abort(404);
    }

    $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('pdf.exam', [
        'currentExam' => $currentExam,
        'ageGroup' => $ageGroup,
    ])->setOptions(['isRemoteEnabled' => true]);

    // Download or stream? For download use ->download(...), for view use ->stream(...)
    // The user said: "al darle a imprimir, cojas el json donde esta la info y que generes un pdf"
    // I will stream it so they can view and print it, or download it.
    return $pdf->stream('Temario_Taekwondo_'.$belt.'.pdf');
})->name('examenes.pdf');

// Static legal pages can also be handled by PageController or closures for simplicity
Route::view('/aviso-legal', 'pages.legal.aviso')->name('legal.aviso');
Route::view('/politica-privacidad', 'pages.legal.privacidad')->name('legal.privacidad');
Route::view('/politica-cookies', 'pages.legal.cookies')->name('legal.cookies');

Route::get('/liga-hockey-manopla', function () {
    return view('pages.hockey-manopla');
})->name('hockey');
