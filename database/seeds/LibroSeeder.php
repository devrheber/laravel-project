<?php

use Illuminate\Database\Seeder;
use App\Libro;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Libro::create([
        	'titulo'		=>	'Harry Potter',
        	'resumen'		=>	'Harry Potter resucita'
        ]);

        Libro::create([
        	'titulo'		=>	'Harry Potter2',
        	'resumen'		=>	'Harry Potter resucita'
        ]);

        Libro::create([
        	'titulo'		=>	'Harry Potter3',
        	'resumen'		=>	'Harry Potter resucita'
        ]);

        Libro::create([
        	'titulo'		=>	'Harry Potter4',
        	'resumen'		=>	'Harry Potter resucita'
        ]);
    }
}
