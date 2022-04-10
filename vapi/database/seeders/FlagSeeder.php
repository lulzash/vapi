<?php

namespace Database\Seeders;

use App\Models\Flags;
use Illuminate\Database\Seeder;

class FlagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // to add more challenges
        // add flag with challenge id here
        $flags = [
            "1" => "flag{api1_d0cd9be2324cc237235b}",
            "2" => "flag{api2_6bf2beda61e2a1ab2d0a}",
            "3" => "flag{api3_0bad677bfc504c75ff72}",
            "4" => "flag{api4_ce696239323ea5b2d015}",
            "5" => "flag{api5_76dd990a97ff1563ae76}",
            "6" => "flag{api6_afb969db8b6e272694b4}",
            "7" => "flag{api7_e71b65071645e24ed50a}",
            "8" => "flag{api8_509f8e201807860d5c91}",
            "9" => "flag{api9_81e306bdd20a7734e244}",
            "10" => "flag{api10_5db611f7c1ffd747971f}",
        ];

        foreach ($flags as $challangeId => $flag) {
            Flags::firstOrCreate([
                'challengeid' => $challangeId,
            ], [
                'flag' => $flag,
            ]);
        }
    }
}
