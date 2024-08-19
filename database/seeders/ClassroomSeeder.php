<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Classroom;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //membuat data untuk table class
        //insert into class value ....
        //1. eloquent ORM (rekomendasi)
        //disable foreignkey
        Schema::disableForegnKeyConstraints();
        //mengosongkan isi table
        Classroom::truncate();
        //enableforeignkey
        Schema::enableForeignKeyConstraints();

        $data = [
            [
                'name' => '12 RPL A',
            ],
            [
                'name' => '12 RPL B',
            ],
            [
                'name' => '12 RPL C',
            ],
        ];

        //multiple insert
        foreach ($data as $value) {
        Classroom::insert([
            'name' => $value['name'], 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now(),
        ]);
    }

        //2. query builder (masih bisa digunakan)
      // DB::table('class')->insert([
           //'name'=> '12 TKJ D',
           // 'created_at' => Carbon::now(),
           // 'updated_at' => Carbon::now(),
        //]);
        //3. raw query (tidak direkomendasikan)
        //membuat data untuk table class
    }
}
