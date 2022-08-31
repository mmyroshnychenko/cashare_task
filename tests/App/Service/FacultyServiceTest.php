<?php

namespace App\Service;

use App\Entity\Faculty;
use App\Repository\FacultyRepository;
use PHPUnit\Framework\TestCase;

class FacultyServiceTest extends TestCase
{
    private FacultyRepository $mockFacultyRepository;
    private FacultyService $facultyService;

    public function setUp(): void
    {
        $this->mockFacultyRepository = $this->createMock(FacultyRepository::class);
        $this->facultyService = new FacultyService($this->mockFacultyRepository);
    }

    private function getFaculty(): Faculty
    {
        $faculty = new Faculty();
        $faculty->setName("Test1");

        return $faculty;
    }

    private function getArrayFaculties(): array
    {
        return [$this->getFaculty()];
    }

    public function testGetAllFaculties(): void
    {
        $this->mockFacultyRepository->method('findAll')->willReturn($this->getArrayFaculties());
        $faculties = $this->facultyService->getAllFaculties();
        $this->assertEquals(1, count($faculties));
        $this->assertEquals($faculties, $this->getArrayFaculties());
    }

    public function testGetFacultyById(): void
    {
        $this->mockFacultyRepository->method('find')->willReturn($this->getFaculty());
        $this->assertEquals($this->getFaculty(), $this->facultyService->getFacultyById(1));
    }
}

