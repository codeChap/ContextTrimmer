<?php 

require_once 'vendor/autoload.php';

use codechap\ContextTrimmer\ContextTrimmer;

$input = file_get_contents('context.txt');

$result = new ContextTrimmer()
    ->set('removeShortWords', true)
    ->set('minWordLength', 2)
    ->set('removeExtraneous', true)
    ->set('maxTokens', 20)
    ->trim($input);

echo json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

