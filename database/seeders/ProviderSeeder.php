<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Provider;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Provider 1
        $provider1 = new Provider();
        $provider1->name = "liftor sa";
        $provider1->email = "liftor@gmail.com";
        $provider1->phone = "+52 55 8526 3968";
        $provider1->country = "mexico";
        $provider1->city = "mexico";
        $provider1->address = "naucalpan 16";
        $provider1->save();

        //Provider 2
        $provider2 = new Provider();
        $provider2->name = "cano sistemas";
        $provider2->email = "canosis@gmail.com";
        $provider2->phone = "+54 9 223 123-4567";
        $provider2->country = "argentina";
        $provider2->city = "buenos aires";
        $provider2->address = "r. mejia 1458";
        $provider2->save();

        //Provider 3
        $provider3 = new Provider();
        $provider3->name = "adacorp";
        $provider3->email = "adacorp@gmail.com";
        $provider3->phone = "+51 951367054";
        $provider3->country = "lima";
        $provider3->city = "callao";
        $provider3->address = "av. el olivar 741";
        $provider3->save();

        //Provider 4
        $provider4 = new Provider();
        $provider4->name = "terra group";
        $provider4->email = "terrag@gmail.com";
        $provider4->phone = "+55 8526 6426";
        $provider4->country = "mexico";
        $provider4->city = "tijuana";
        $provider4->address = "tehuacan 10130 int 101h";
        $provider4->save();
    }
}
