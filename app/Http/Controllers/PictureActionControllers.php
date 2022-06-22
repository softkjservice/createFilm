<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PictureActionControllers extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @return RedirectResponse
     */
    public function up(): RedirectResponse
    {

        return redirect(route('pictures.index'))->with('status', 'Udało się');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return RedirectResponse
     */
    public function down(): RedirectResponse
    {

        return redirect(route('pictures.index'))->with('status', 'Udało się');
    }
}
