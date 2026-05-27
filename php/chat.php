<?php
/
  chat.php
  Handles sending and retrieving chat messages.
  Uses a simple JSON file as storage (replace with MySQL for production).
 /
header('Content-Type: application/json');
$file = __DIR__ . '/messages.json';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data    = json_decode(file_get_contents('php://input'), true);
    $name    = htmlspecialchars(trim($data['name'] ?? 'Anonymous'));
    $message = htmlspecialchars(trim($data['message'] ?? ''));

    if (!$message) {
        echo json_encode(['error' => 'Empty message']);
        exit;
    }

    $messages   = file_exists($file) ? json_decode(file_get_contents($file), true) : [];
    $messages[] = ['name' => $name, 'message' => $message, 'time' => date('H:i')];

    // Keep only last 50 messages
    if (count($messages) > 50) $messages = array_slice($messages, -50);

    file_put_contents($file, json_encode($messages));
    echo json_encode(['success' => true]);

} else {
    $messages = file_exists($file) ? json_decode(file_get_contents($file), true) : [];
    echo json_encode($messages);
}
