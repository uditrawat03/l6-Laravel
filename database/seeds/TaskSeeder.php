<?php

use App\Models\TaskType;
use App\Models\TaskPriority;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{

    public function run()
    {
        \DB::table('task_types')->truncate();
        \DB::table('task_priorities')->truncate();
        TaskType::insert([
            [
                'name' => 'Task',
            ],
            [
                'name' => 'Bug'
            ],
            [
                'name' => 'Story'
            ]
        ]);

        TaskPriority::insert([
            [
                'name' => 'Higher',
            ],
            [
                'name' => 'Medium'
            ],
            [
                'name' => 'Low'
            ]
        ]);
    }
}
