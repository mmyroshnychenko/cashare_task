<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;

class FacultyControllerTest extends WebTestCase
{
    public function testIndexAction(): void
    {
        $client = static::createClient();
        $client->request(Request::METHOD_GET, '/faculty');

        $this->assertResponseIsSuccessful();
    }

    public function testGetStudentsByFaculty(): void
    {
        $client = static::createClient();
        $client->request(Request::METHOD_GET, '/faculty/1');

        $this->assertResponseIsSuccessful();
    }
}

