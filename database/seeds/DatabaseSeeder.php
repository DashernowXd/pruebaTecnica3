<?php
use App\Student_model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Student_model::class, 50)->create(); // Crea 50 registros
    }
}
