<?php
// Routes

$app->get('/', function ($request, $response, $args)  use($app){

    $db = $app->getContainer()->get('db');
    $posts = $db->table('posts')->get();
    // $tables = $db->select("shot tables");
    return var_dump($db);
    return $this->renderer->render($response, 'index.phtml', $args);
});