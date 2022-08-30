<?php
namespace App\Service;

use App\Entity\Course;
use App\Repository\CourseRepository;

class CourseService
{
    private CourseRepository $courseRepository;

    public function __construct(CourseRepository $courseRepository)
    {
        $this->courseRepository = $courseRepository;
    }

    public function getAllCourses(): array
    {
        return $this->courseRepository->findAll();
    }

    public function getCourseById(int $courseId): ?Course
    {
        return $this->courseRepository->find($courseId);
    }

    public function getMostPopularCourse()
    {
        return $this->courseRepository->getMostPopularCourse();
    }
}