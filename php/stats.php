<?php
/
  stats.php
  Returns live server stats as JSON.
  Called by the frontend every 3 seconds via fetch().
 /
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: ');

$stats = [
    'users'   => rand(10, 50),           // Replace with real DB query
    'status'  => 'Online',
    'time'    => date('Y-m-d H:i:s'),
    'memory'  => round(memory_get_usage() / 1024 / 1024, 2) . ' MB',
];

echo json_encode($stats);
