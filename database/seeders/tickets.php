<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class tickets extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    function randomlongtext(int $world){
        $str = "";
        for ($i = 0;  $i < 25; $i++){
            $str = $str . Str::random(5) . " ";
        }
        return $str;
    }
    public function run()
    {

        DB::table('echange_tickets')->insert([
            'echange_id' => 1,
            'sender_id' => 1,
            'content' => 'ntm fdp',
        ]);
        DB::table('project_echanges')->insert([
            'project_id' => 1,
            'object' => 'coucou',
            'closed' => false,
            'description' => 'c\'est un test',
            'category_id' => 1,

        ]);
        DB::table('projects')->insert([
            'main_img' => "assets/img/portfolio/cabin.png",
            'title' => Str::random(10),
            'client_id' => 1,
            'description' => $this->randomlongtext(25),
            'type' => 1,
            'user_rate' => 5,
            'client_rate' => 5,
            'ispublic' => true,
            'link' => 'https://simon-lou.com',
            'status' => 2,
            'in_wait' => 0,
            'gitlink' => 'github.com',
            'hostedby' => "moi",
            'hosted_infos' => 'ntm',
        ]);
        DB::table('projects')->insert([
            'main_img' => "assets/img/portfolio/circus.png",
            'title' => Str::random(10),
            'client_id' => 1,
            'description' => $this->randomlongtext(25),
            'type' => 1,
            'user_rate' => 5,
            'client_rate' => 5,
            'ispublic' => true,
            'link' => 'https://youtube.com',
            'status' => 2,
            'in_wait' => 0,
            'gitlink' => 'github.com',
            'hostedby' => "moi",
            'hosted_infos' => 'ntm',
        ]);
    }
}
