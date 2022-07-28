<?php

namespace App\Classis;

use App\Models\Order;
use App\Models\Picture;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

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


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $order_id
     * @return RedirectResponse|BinaryFileResponse
     */
    public static function orderPicturesDownload(int $order_id): RedirectResponse|BinaryFileResponse
    {
        $order=Order::findOrFail($order_id);
        $pictures=$order->pictures()->get();
        //dd($order_id);
          foreach ($pictures as $picture){
              if(Storage::exists($picture->image_path))
              {
                  return Storage::download('kj01.gif');
                  //self::filesend('storage\kj01.gif');
                  //dd(Storage::download(storage_path($picture->image_path)));
                  //dd($picture->image_path);
                  //Storage::download($picture->image_path);
                  //return Storage::download(storage_path($picture->image_path));
                  //return response()->download(storage_path($picture->image_path));
              }else
              {
                  //dd('File does not exist.');
                  dd($picture->image_path);
              }
          }
        /*if(Storage::exists('kj01.gif')){

            self::filesend('storage\kj01.gif');
            //Storage::download('kj01.gif','MojaNazwa.gif');

        }else{
            dd('File does not exist.');

        }*/

        //return true;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string $path
     * @return RedirectResponse|BinaryFileResponse
     */
    public static function filesend(string $path): RedirectResponse|BinaryFileResponse
    {
        return response()->download($path);
    }

}
