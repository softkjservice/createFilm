<?php

namespace App\Classis;

use App\Models\Order;
use phpDocumentor\Reflection\Types\Integer;

class PictureIndexAdd
{
    private $orderNumber;
    public function __construct(int $orderNumber){
        $this->orderNumber=$orderNumber;
    }

    public function indexAdd(){
        $pictures=Order::findOrFail($this->orderNumber)->pictures()->orderBy('index')->get();
        $indexMax=$pictures->max('index');
        //$pictures=$order->pictures()->get();
        if (count($pictures)==0){
            return 1;
        }else{
            return $indexMax+1;
        }
        //return count($pictures)+1;
        //count($this->items);
    }
}
