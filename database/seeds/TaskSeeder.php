<?php

use App\Models\TaskType;
use App\Models\TaskPriority;
use App\Models\Project;
use App\Models\ProjectWorkflow;
use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{

    public function run()
    {
        \DB::table('task_types')->truncate();
        \DB::table('task_priorities')->truncate();
        \DB::table('project_workflows')->truncate();
        \DB::table('tasks')->truncate();
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

        $projects = Project::get();

        foreach($projects as $project){
            $projectWorkflow = ProjectWorkflow::create([
                'title' => "Task List",
                'project_id' => $project->id
            ]);
            
            $counter = 0;
            while($counter <= 10){
                $counter++;
                Task::create([
                    'summary' => 'Task '. $counter,
                    'description' => 'Description ' . $counter,
                    'task_type' => 1,
                    'task_priority' => 1,
                    'workflow_id' => $projectWorkflow->id,
                    'created_by' => 1
                ]);
            }
        }        
    }
}
