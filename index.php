<?php
require __DIR__ . '/vendor/autoload.php';

// Get the first argument
$argument = $argv[1] ?? null;

if (empty($argument)) {
    echo json_encode([
        'error' => true,
        'message' => 'Argument expected',
    ]);

    return;
}

echo json_encode([
    'error' => false,
    'message' => "PHP says hi and thanks for the message [$argument]",
]);

return;
