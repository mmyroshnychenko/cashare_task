<?php

namespace App\Controller;

use App\Service\FacultyService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FacultyController extends AbstractController
{
    #[Route('/faculty', name: 'app_faculty')]
    public function index(FacultyService $facultyService): Response
    {
        $faculties = $facultyService->getAllFaculties();
        return $this->render('faculty/index.html.twig', [
            'faculties' => $faculties,
        ]);
    }

    #[Route('/faculty/{facultyId}', name: 'app_students_by_faculty')]
    public function getStudentsByCourse(Request $request, FacultyService $facultyService): Response
    {
        $facultyId = (int) $request->get('facultyId');
        $faculty = $facultyService->getFacultyById($facultyId);

        return $this->render('faculty/studentsByFaculty.html.twig', [
            'faculty' => $faculty,
            'students' => $faculty->getStudents()
        ]);
    }
}
