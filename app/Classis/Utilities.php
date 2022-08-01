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
        $pictures=$order->pictures()->get();
      /*  foreach ($pictures as $picture){
            if(Storage::exists($picture->image_path)){
                Storage::delete($picture->image_path);
            }else{
                //dd('File does not exist.');
                dd($picture->image_path);
            }
        }*/
        Storage::deleteDirectory($order_id);
        //dd($pictures[1]->index);

        return;
    }




}
