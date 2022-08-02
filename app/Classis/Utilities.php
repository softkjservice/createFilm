<?php

namespace App\Classis;

use App\Models\Order;
use App\Models\Picture;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\StreamedResponse;

class Utilities
{
    public static function orderPicturesDelete(int $order_id){
        $order=Order::findOrFail($order_id);
        //$pictures=$order->pictures()->get();
        $file="$order_id.zip";
        if (Storage::exists($file)){
            Storage::delete($file);
        }
        return Storage::deleteDirectory($order_id);
    }
}
