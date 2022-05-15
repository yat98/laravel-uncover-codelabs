<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class CollectionController extends Controller
{
    protected $numbers = [1, 9, 3, 4, 5, 3, 5, 7];

    public function firstCollection(){
        $collections = new Collection($this->numbers);
        dump($collections);
    }

    public function secondCollection(){
        $collections = new Collection(['study', 'laravel', 'uncover'] + $this->numbers);
        echo $collections[0].'<br>';
        echo $collections[1].'<br>';
        foreach($collections as $collection){
            echo "$collection ";
        }
        echo '<br>';
        $collections = collect([
            "nama" => "Laura",
            "sekolah" => "SMA 5 Lampung",
            "kota" => "Lampung",
            "jurusan" => "IPA",
        ]);
        echo $collections.'<br>';
        $varA = collect([1,2,3]);
        $varB = collect([1 => 1, 2 => 2, 3 => 3]);
        echo $varA.'<br>';
        echo $varB.'<br>';
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
