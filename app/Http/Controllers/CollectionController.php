<?php

namespace App\Http\Controllers;

use stdClass;
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
        $collections = collect([
            ['namaProduk' => 'Laptop A', 'harga' => 59990000],
            ['namaProduk' => 'Smartphone B', 'harga' => 1599000],
            ['namaProduk' => 'Speaker C', 'harga' => 350000],
        ]);
        dump($collections);
        dump($collections->sortBy('harga'));
        dump($collections->sortByDesc('harga'));
        dump($collections->sortBy('harga')->all());
        $collections->sortBy('harga')->each(function ($val, $key){
            echo $val['namaProduk'].'<br>';
        });
        $results = $collections->filter(function ($val, $key){
            return $val['harga'] < 2000000;
        });
        dump($results);
        dump($collections->where('harga', 350000));
        dump($collections->where('harga', '>=', 350000));
        dump($collections->firstWhere('harga', 350000));
        dump($collections->whereBetween('harga', [100000, 2000000]));
        dump($collections->whereNotBetween('harga', [100000, 2000000]));
        dump($collections->whereIn('harga', [1599000, 2999000, 3999000]));
        dump($collections->whereNotIn('harga', [1599000, 2999000, 3999000]));
        dump($collections->pluck('namaProduk'));
    }

    public function sixthCollection(){
        $firstStudent = new stdClass();
        $firstStudent->name = 'Rian';
        $firstStudent->school = 'SMK Pelita Ibu';
        $firstStudent->major = 'STEM';

        $secondStudent = new stdClass();
        $secondStudent->name = 'Nova';
        $secondStudent->school = 'SMA 2 Kota Baru';
        $secondStudent->major = 'STEM';

        $thirdStudent = new stdClass();
        $thirdStudent->name = 'Rudi';
        $thirdStudent->school = 'MA Al-Hidayah';
        $thirdStudent->major = 'Economic';

        $students = collect([
            0 => $firstStudent,
            1 => $secondStudent,
            2 => $thirdStudent,
        ]);
        dump($students);
        dump($students[0]->name);
        dump($students[2]->school);
        echo '<hr>';
        foreach($students as $student){
            echo $student->name.'<br>';
        }
        $student = $students->where('name','Nova')->first();
        dump($student->name);
        $student = $students->get(2);
        dump($student);
        $results = $students->groupBy('major');
        dump($results);
        $stem = $students->groupBy('major')->get('STEM')
            ->pluck('name')->all();
        dump('STEM students : '.implode(',', $stem));
    }

    public function exercise(){
        $matkul00 = new stdClass();
        $matkul00->namaMatkul = "Sistem Operasi";
        $matkul00->jumlahSks = 3;
        $matkul00->semester = 3;

        $matkul01 = new stdClass();
        $matkul01->namaMatkul = "Algoritma dan Pemrograman";
        $matkul01->jumlahSks = 4;
        $matkul01->semester = 1;

        $matkul02 = new stdClass();
        $matkul02->namaMatkul = "Kalkulus Dasar";
        $matkul02->jumlahSks = 2;
        $matkul02->semester = 1;

        $matkul03 = new stdClass();
        $matkul03->namaMatkul = "Basis Data";
        $matkul03->jumlahSks = 2;
        $matkul03->semester = 3;

        $matkuls = collect([$matkul00, $matkul01, $matkul02, $matkul03]);
        $thirdSemester = $matkuls->where('semester', 3)->pluck('namaMatkul')->all();
        dump('Nama mata kuliah di semester 3: '.implode(',', $thirdSemester));
        $biggestSks = $matkuls->sortByDesc('jumlahSks')->pluck('jumlahSks', 'namaMatkul')
            ->map(function($val, $key){
                return $key." ($val)";
            })->all();
        dump('Nama mata kuliah: '.implode(', ', $biggestSks));
    }
}
