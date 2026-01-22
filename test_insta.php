<?php

require __DIR__ . '/vendor/autoload.php';

$app = require_once __DIR__ . '/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$service = new \App\Services\InstagramService();
$posts = $service->getLatestPosts();

echo "Result Count: " . count($posts) . "\n";
print_r($posts);
