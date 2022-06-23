<?php

namespace App\Classis;

use App\Models\Order;
use App\Models\Picture;

class PictureIndexUp
{
    private $orderNumber;
    public function __construct(int $orderNumber){
        $this->orderNumber=$orderNumber;
    }

    public function indexUp(int $id){
        $pictures=Order::findOrFail($this->orderNumber)->pictures()->orderBy('index')->get();
        //dd($id);
        for ($i=1; $i<=count($pictures)-1; $i++){


                if ($pictures[$i]->id==$id){
                    $indexCurrent=$pictures[$i]->index;
                    $indexUp=$pictures[$i-1]->index;
                    $idCurrent=$pictures[$i]->id;
                    $idUp=$pictures[$i-1]->id;
                    $picture=Picture::find($idCurrent);
                    $picture->index=$indexUp;
                    $picture->save();
                    $picture=Picture::find($idUp);
                    $picture->index=$indexCurrent;
                    $picture->save();
                    //dd($indexCurrent,$indexUp,$idCurrent,$idUp);
                }

        }
        return 1;


        //return count($pictures)+1;
        //count($this->items);
    }
}
