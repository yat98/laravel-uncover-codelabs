<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class CollectionController extends Controller
{
    public function firstCollection(){
        $numbers = [1, 9, 3, 4, 5, 3, 5, 7];
        $collection = new Collection($numbers);
        dump($collection);
    }

    public function secondCollection(){

    }

    public function thirdCollection(){

    }

    public function fourthCollection(){

    }

    public function fifthCollection(){

    }

    public function sixthCollection(){

    }

}
