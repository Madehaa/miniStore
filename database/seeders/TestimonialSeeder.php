<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    public function run()
    {
        DB::table('testimonials')->insert([
            [
                'author_name' => 'John Doe',
                'content' => 'This is an amazing product! I would definitely recommend it to others.',
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'author_name' => 'Jane Smith',
                'content' => 'Fantastic service and quality. Will purchase again.',
                'rating' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
