<?php

header('Content-Type: application/json');

$source_path = __DIR__ . '/../../../database/tasks.json';

$json_data = file_get_contents($source_path);
$tasks = $json_data;

$task_id = $_POST['id'] ?? null;
if($task_id) {
    $tasks = json_decode($tasks, true);

    // $updated_tasks = [];
    // foreach ($tasks as $task) {
    //     if($task['id'] == $task_id) $task['done'] = !$task['done'];
    //     $updated_tasks[] = $task;
    // }
    
    // $tasks = $updated_tasks;
    
    $tasks = array_map(function($task)
    {
        if($task['id'] == $_POST['id']) $task['done'] = !$task['done'];
        return $task;
    }, $tasks);

    $tasks = json_encode($tasks);

    file_put_contents($source_path, $tasks);
} 

echo $tasks;