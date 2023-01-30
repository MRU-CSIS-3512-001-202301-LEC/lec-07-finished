<?php

require '../db/Database.php';

// hint: try your queries out FIRST in CLI or in your GUI tool
// hint: use heredoc strings
$config = require '../db/config.php';
$db = new Database($config);

$query = <<<QUERY
    SELECT ch.name as cheese, cl.name as type
    FROM cheese ch inner join classification cl 
    ON ch.classification_id = cl.id
QUERY;

$results = $db->run($query)->fetchAll();

$db = null;

require 'index.view.php';
