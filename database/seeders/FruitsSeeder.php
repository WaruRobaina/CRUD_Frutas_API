<?php

namespace Database\Seeders;

use App\Models\Fruit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FruitsSeeder extends Seeder
{
    
    public function run()
    {
        $fruit = new Fruit();
        $fruit->setFruit("Pera", "Mediano", "");
        $fruit->save();

        $fruit = new Fruit();
        $fruit->setFruitC("Plátano", "Mediano", "Amarillo");
        $fruit->save();

        $fruit = new Fruit();
        $fruit->setFruit("Mora", "Pequeño", "");
        $fruit->save();

        $fruit = new Fruit();
        $fruit->setFruitC("Naranja", "Mediano", "Morado");
        $fruit->save();

        $fruit = new Fruit();
        $fruit->setFruit("Níspero", "Pequeño", "");
        $fruit->save();

        $fruit = new Fruit();
        $fruit->setFruitC("Pomelo", "Mediano", "Naranja");
        $fruit->save();

        $fruit = new Fruit();
        $fruit->setFruit("Cereza", "Pequeño", "");
        $fruit->save();

        $fruit = new Fruit();
        $fruit->setFruitC("Melón", "Grande", "Verde");
        $fruit->save();

        $fruit = new Fruit();
        $fruit->setFruit("Papaya", "Grande", "");
        $fruit->save();

        $fruit = new Fruit();
        $fruit->setFruitC("Uva", "Pequeño", "Morado");
        $fruit->save();

    }
}
