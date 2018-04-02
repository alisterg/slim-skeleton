<?php

$app->get('/testname/{id}', TestingStuff\Controllers\PersonController::class . ':getName');
