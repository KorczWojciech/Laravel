<?php
namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorsTabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

            [1, "Adam","Mickiewicz", "1798-12-24", "Polska"],
            [2, "Henryk","Sienkiewicz", "1846-05-05", "Polska"],
            [3, "Bolesław","Prus", "1847-08-20", "Polska"]
        ];

        foreach ($data as $key) {
            $a = new Author();
            $a->id = $key[0];
            $a->name = $key[1];
            $a->surname = $key[2];
            $a->birth = $key[3];
            $a->nationality = $key[4];
            $a->save();
        }
    }
}
