<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    $item_1 = new stdClass();
    $item_1->position = "D0-POS";
    $item_1->symbol_shares = "AAPL 100";

    $data = array($item_1);

    // Render index view
    return $this->renderer->render($response, 'index.phtml', ['data' => $data]);
});
