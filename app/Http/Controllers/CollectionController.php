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
        $collections = new Collection($this->numbers);

        dump($collections->sum());
        dump($collections->avg());
        dump($collections->max());
        dump($collections->min());
        dump($collections->median());
        dump($collections->random());
        echo $collections->concat([1,8,9]).'<br>';
        dump($collections->contains(3));
        dump($collections->contains(8));
        echo $collections->unique().'<br>';
        dump($collections->first());
        dump($collections->last());
        dump($collections->count());
        echo $collections->sort();
    }

    public function fourthCollection(){
        $collections = collect([
            "nama" => "Laura",
            "sekolah" => "SMA 5 Lampung",
            "kota" => "Lampung",
            "jurusan" => "IPA",
        ]);
        dump($collections->get('sekolah'));
        dump($collections->get('umur', 17));
        dump($collections->has('jurusan'));
        dump($collections->has('umur'));
        $results = $collections->replace([
            "sekolah" => "SMA 5 Palembang",
            "kota" => "Palembang",
        ]);
        dump($results);
        dump($collections->forget('sekolah'));
        dump($collections->flip());
        dump($collections->keys());
        dump($collections->values());
        dump($collections->search('IPA'));
        $collections->each(function ($val, $key){
            echo "$key: $val <br>";
        });
        foreach($collections as $key => $val){
            echo "$key: $val <br>";
        }
    }

    public function fifthCollection(){

    }

    public function sixthCollection(){

    }

}
