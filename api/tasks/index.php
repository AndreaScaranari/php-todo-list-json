<?php

header('Content-Type: application/json');

$source_path = __DIR__ . '/../../database/tasks.json';

$json_data = file_get_contents($source_path);
$tasks = $json_data;

$task_text = $_POST['task'] ?? '';
if($task_text) {
    $tasks = json_decode($tasks, true);

    $tasks = [
        'id' => uniqid();
        'text' => $task_text;
        'done' => false;
    ];

    $tasks = json_encode($tasks);

    file_put_contents($source_path, $tasks);
} 

echo $tasks;