<?php

namespace App\Service;

use App\Entity\Student;
use App\Repository\StudentRepository;

class StudentService
{
    private StudentRepository $studentRepository;

    public function __construct(StudentRepository $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }

    public function getAllStudents(): array
    {
        return $this->studentRepository->findAll();
    }

    public function getStudentById(int $studentId): ?Student
    {
        return $this->studentRepository->find($studentId);
    }

    public function getStudentsWithoutCourses(): array
    {
        return $this->studentRepository->getStudentsWithoutCourses();
    }
}