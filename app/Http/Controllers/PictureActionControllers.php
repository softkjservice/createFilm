<?php

namespace App\Http\Controllers;

use App\Classis\PictureIndexDown;
use App\Classis\PictureIndexUp;
use App\Models\Picture;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PictureActionControllers extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @return RedirectResponse
     */
    public function up($id): RedirectResponse
    {
        $orderId=Auth::user()->latestOrder->id;
        $pictureIndexUp = new PictureIndexUp($orderId);
        $pictureIndexUp->indexUp($id);
        return redirect(route('pictures.index'))->with('status', 'Udało się');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return RedirectResponse
     */
    public function down($id): RedirectResponse
    {
        $orderId=Auth::user()->latestOrder->id;
        $pictureIndexDown = new PictureIndexDown($orderId);
        $pictureIndexDown->indexDown($id);
        return redirect(route('pictures.index'))->with('status', 'Udało się');
    }
}
