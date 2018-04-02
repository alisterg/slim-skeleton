<?php

namespace TestingStuff\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;
use TestingStuff\Models\Person;

class PersonController extends BaseController
{
    public function getName(Request $request, Response $response, array $args)
    {
        $person = new Person($args['id']);

        $body = $response->getBody();
        $body->write("hiiiiiii! "); // not sure if this would ever be useful

        return $this->view->render($response, 'person_template.php', [
            'name' => $person->name
        ]);
    }
}
