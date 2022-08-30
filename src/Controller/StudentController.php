<?php

namespace App\Controller;

use App\Service\StudentService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{
    #[Route('/student', name: 'app_student')]
    public function index(StudentService $studentService): Response
    {
        $students = $studentService->getAllStudents();

        return $this->render('student/index.html.twig', [
            'students' => $students,
        ]);
    }

    #[Route('/student/{studentId}', name: 'app_student_by_id')]
    public function getStudentById(Request $request, StudentService $studentService): Response
    {
        $studentId = (int) $request->get('studentId');
        $student = $studentService->getStudentById($studentId);

        return $this->render('student/studentInfo.html.twig', [
            'student' => $student,
            'courses' => $student->getCourses()
        ]);
    }

    #[Route('/student/without/courses', name: 'app_student_without_courses')]
    public function getStudentWithoutCourses(StudentService $studentService): Response
    {
        $students = $studentService->getStudentsWithoutCourses();

        return $this->render('student/studentsWithoutCourses.html.twig', [
            'students' => $students,
        ]);
    }
}
