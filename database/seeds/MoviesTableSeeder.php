<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = array(
        	['title' => 'The Shawshank Redemption', 'date_published' => '1994', 'rating' => '9.2'],
        	['title' => 'The Godfather', 'date_published' => '1972', 'rating' => '9.2'],
        	['title' => 'The Godfather: Part II', 'date_published' => '1974', 'rating' => '9.0'],
        	['title' => 'The Dark Knight', 'date_published' => '2008', 'rating' => '8.9'],
        	['title' => '12 Angry Men', 'date_published' => '1957', 'rating' => '8.9'],
        	['title' => "Schindler's List", 'date_published' => '1993', 'rating' => '8.9'],
        	['title' => 'Pulp Fiction', 'date_published' => '1994', 'rating' => '8.9'],
        	['title' => 'The Lord of the Rings: The Return of the King', 'date_published' => '2003', 'rating' => '8.9'],
        	['title' => 'The Good, the Bad and the Ugly', 'date_published' => '1966', 'rating' => '8.9'],
        	['title' => 'Fight Club', 'date_published' => '1999', 'rating' => '8.8'],
            ['title' => 'test2', 'date_published' => '2016', 'rating' => '1.5']);

        DB::table('movies')->insert( $movies );
    }
}
