<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('postagens')->insert([
            'title' => "Guerra da Ucrania",
            'content' => "Guerra terrível",
        ]);

        DB::table('postagens')->insert([
            'title' => "Guerra de Gaza",
            'content' => "Guerra muito terrível",
        ]);
    }
}
