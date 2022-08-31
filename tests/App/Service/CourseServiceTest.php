<?php

namespace App\Service;

use App\Entity\Course;
use App\Repository\CourseRepository;
use PHPUnit\Framework\TestCase;

class CourseServiceTest extends TestCase
{
    private CourseRepository $mockCourseRepository;
    private CourseService $courseService;

    private function getCourse(): Course
    {
        $course = new Course();
        $course->setName('Test');
        return $course;
    }

    private function getCoursesArray(): array
    {
        return [$this->getCourse()];
    }

    public function setUp(): void
    {
        $this->mockCourseRepository = $this->createMock(CourseRepository::class);
        $this->courseService = new CourseService($this->mockCourseRepository);
    }

    public function testGetAllCourses(): void
    {
        $this->mockCourseRepository->method('findAll')->willReturn($this->getCoursesArray());
        $courses = $this->courseService->getAllCourses();

        $this->assertEquals(1, count($courses));
        $this->assertEquals($courses, $this->getCoursesArray());
    }

    public function testGetCourseById(): void
    {
        $this->mockCourseRepository->method('find')->willReturn($this->getCourse());

        $this->assertEquals($this->getCourse(), $this->courseService->getCourseById(1));
    }

    public function testGetMostPopularCourse(): void
    {
        $this->mockCourseRepository->method('getMostPopularCourse')->willReturn($this->getCourse());

        $this->assertEquals($this->getCourse(), $this->courseService->getMostPopularCourse());
    }
}
