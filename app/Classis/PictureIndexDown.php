<?php

namespace App\Classis;

use App\Models\Order;
use App\Models\Picture;

class PictureIndexDown
{
    private $orderNumber;
    public function __construct(int $orderNumber){
        $this->orderNumber=$orderNumber;
    }

    public function indexDown(int $id){
        $pictures=Order::findOrFail($this->orderNumber)->pictures()->orderBy('index')->get();
        for ($i=0; $i<=count($pictures)-2; $i++){
                if ($pictures[$i]->id==$id){
                    $indexCurrent=$pictures[$i]->index;
                    $indexDown=$pictures[$i+1]->index;
                    $idCurrent=$pictures[$i]->id;
                    $idDown=$pictures[$i+1]->id;
                    $picture=Picture::find($idCurrent);
                    $picture->index=$indexDown;
                    $picture->save();
                    $picture=Picture::find($idDown);
                    $picture->index=$indexCurrent;
                    $picture->save();
                }

        }
        return ;
    }
}
