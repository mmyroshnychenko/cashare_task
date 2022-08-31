<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;

class CourseControllerTest extends WebTestCase
{
    public function testIndexAction(): void
    {
        $client = static::createClient();
        $client->request(Request::METHOD_GET, '/course');

        $this->assertResponseIsSuccessful();
    }

    public function testGetStudentsByCourseAction(): void
    {
        $client = static::createClient();
        $client->request(Request::METHOD_GET, '/course/1');

        $this->assertResponseIsSuccessful();
    }

    public function testGetMostPopularCourseAction(): void
    {
        $client = static::createClient();
        $client->request(Request::METHOD_GET, '/course/select/popular');

        $this->assertResponseIsSuccessful();
    }
}
