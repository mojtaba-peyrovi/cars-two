<?php

use Illuminate\Database\Seeder;

use App\Car;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $json = File::get("database/data/cars.json");
        $data = json_decode($json);
        foreach($data as $obj) {
          Car::create(array(
              'id' =>$obj->id,
            'trim' => $obj->trim,
            'make' => $obj->make,
            'model' => $obj->model,
            'price' => $obj->price,
            'year' => $obj->year,
            'mileage' => $obj->mileage,
            'condition' => $obj->condition,
            'engine' => $obj->engine,
            'transmission' => $obj->transmission,
            'consumptionCity' => $obj->consumptionCity,
            'consumptionHwy' => $obj->consumptionHwy,
            'fuel' => $obj->fuel,
            'highlight1' => $obj->highlight1,
            'highlight2' => $obj->highlight2,
            'highlight3' => $obj->highlight3,
            'highlight4' => $obj->highlight4,
            'highlight5' => $obj->highlight5,
            'location' => $obj->location,
            'desc' => $obj->desc

        ));
        }
    }
}
