<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;

class StudentControllerTest extends WebTestCase
{
    public function testIndexAction(): void
    {
        $client = static::createClient();
        $client->request(Request::METHOD_GET, '/student');

        $this->assertResponseIsSuccessful();
    }

    public function testGetStudentByIdAction(): void
    {
        $client = static::createClient();
        $client->request(Request::METHOD_GET, '/student/1');

        $this->assertResponseIsSuccessful();
    }

    public function testGetStudentWithoutCoursesAction(): void
    {
        $client = static::createClient();
        $client->request(Request::METHOD_GET, '/student/without/courses');

        $this->assertResponseIsSuccessful();
    }
}
