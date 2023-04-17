<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class TodoStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('todo_status')
        ->insert([
            'name' => 'todo',
            'created_at' => new DateTime(),
        ]);

        DB::table('todo_status')
        ->insert([
            'name' => 'in progress',
            'created_at' => new DateTime(),
        ]);

        DB::table('todo_status')
        ->insert([
            'name' => 'completed',
            'created_at' => new DateTime(),
        ]);
    }
}
