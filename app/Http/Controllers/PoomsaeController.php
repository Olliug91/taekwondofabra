<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoomsaeController extends Controller
{
    public function show($id)
    {
        $poomsaes = config('poomsae');

        if (!isset($poomsaes[$id]) || !$poomsaes[$id]['has_detail_page']) {
            abort(404);
        }

        $poomsae = $poomsaes[$id];

        return view('poomsae.show', compact('poomsae'));
    }
}
