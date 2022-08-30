<?php

namespace App\Controller;

use App\Service\CourseService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CourseController extends AbstractController
{
    #[Route('/course', name: 'app_course')]
    public function index(CourseService $courseService): Response
    {
        $courses = $courseService->getAllCourses();

        return $this->render('course/index.html.twig', [
            'courses' => $courses,
        ]);
    }

    #[Route('/course/{courseId}', name: 'app_students_by_course')]
    public function getStudentsByCourse(Request $request, CourseService $courseService): Response
    {
        $courseId = (int) $request->get('courseId');
        $course = $courseService->getCourseById($courseId);

        return $this->render('course/studentsByCourse.html.twig', [
            'course' => $course,
            'students' => $course->getStudents()
        ]);
    }

    #[Route('/course/select/popular', name: 'app_popular_course')]
    public function getMostPopularCourse(CourseService $courseService): Response
    {
        $course = $courseService->getMostPopularCourse();

        return $this->render('course/popularCourse.html.twig', [
            'course' => $course,
            'students' => $course->getStudents()
        ]);
    }
}
