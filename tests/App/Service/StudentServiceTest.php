<?php

namespace App\Service;

use App\Entity\Student;
use App\Repository\StudentRepository;
use PHPUnit\Framework\TestCase;

class StudentServiceTest extends TestCase
{
    private StudentRepository $mockStudentRepository;
    private StudentService $studentService;

    private function getStudent(): Student
    {
        $student = new Student();
        $student->setFirstName("First Test");
        $student->setLastName("Last Test");

        return $student;
    }

    private function getStudentsArray(): array
    {
        return [$this->getStudent()];
    }

    public function setUp(): void
    {
        $this->mockStudentRepository = $this->createMock(StudentRepository::class);
        $this->studentService = new StudentService($this->mockStudentRepository);
    }

    public function testGetAllStudents(): void
    {
        $this->mockStudentRepository->method('findAll')->willReturn($this->getStudentsArray());
        $students = $this->studentService->getAllStudents();

        $this->assertEquals(1, count($students));
        $this->assertEquals($students, $this->getStudentsArray());
    }

    public function testGetStudentById(): void
    {
        $this->mockStudentRepository->method('find')->willReturn($this->getStudent());

        $this->assertEquals($this->getStudent(), $this->studentService->getStudentById(1));
    }

    public function testGetStudentsWithoutCourses(): void
    {
        $this->mockStudentRepository->method('getStudentsWithoutCourses')->willReturn($this->getStudentsArray());

        $students = $this->studentService->getStudentsWithoutCourses();

        $this->assertEquals(1, count($students));
        $this->assertEquals($students, $this->getStudentsArray());
    }
}
