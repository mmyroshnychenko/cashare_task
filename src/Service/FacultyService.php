<?php

namespace App\Service;

use App\Entity\Faculty;
use App\Repository\FacultyRepository;

class FacultyService
{
    private FacultyRepository $facultyRepository;

    public function __construct(FacultyRepository $facultyRepository)
    {
        $this->facultyRepository = $facultyRepository;
    }

    public function getAllFaculties(): array
    {
        return $this->facultyRepository->findAll();
    }

    public function getFacultyById(int $facultyId): Faculty
    {
        return $this->facultyRepository->find($facultyId);
    }
}