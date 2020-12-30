<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tickets extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
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
    }
}
