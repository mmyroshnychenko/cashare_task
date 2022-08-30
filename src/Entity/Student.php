<?php

namespace App\Entity;

use App\Repository\StudentRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StudentRepository::class)]
class Student
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $firstName = null;

    #[ORM\Column(length: 100)]
    private ?string $lastName = null;

    #[ORM\ManyToOne(targetEntity: Faculty::class, inversedBy: 'students')]
    private ?Faculty $faculty = null;

    #[ORM\ManyToMany(targetEntity: Course::class, fetch: 'LAZY')]
    #[ORM\JoinTable(name: 'student_course', joinColumns: ['studentId'], inverseJoinColumns: ['classId'])]
    private ?Collection $courses;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getFaculty(): ?Faculty
    {
        return $this->faculty;
    }

    public function setFaculty(?Faculty $faculty): void
    {
        $this->faculty = $faculty;
    }

    public function getCourses(): ?Collection
    {
        return $this->courses;
    }

    public function setCourses(?Collection $courses): void
    {
        $this->courses = $courses;
    }
}
