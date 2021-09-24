<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class CategoriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'nombre' => 'Restaurante',
            'slug' => Str::slug('restaurante'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Cafe',
            'slug' => Str::slug('Cafe'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Sangucheria',
            'slug' => Str::slug('Sangucheria'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Heladeria',
            'slug' => Str::slug('Heladeria'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Hotel',
            'slug' => Str::slug('Hotel'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Informatica',
            'slug' => Str::slug('Informatica'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Gimnasio',
            'slug' => Str::slug('Gimnasio'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Carniceria',
            'slug' => Str::slug('Carniceria'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Hospital',
            'slug' => Str::slug('Hospital'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
