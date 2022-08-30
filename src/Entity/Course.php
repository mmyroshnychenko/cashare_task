<?php

namespace App\Entity;

use App\Repository\CourseRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CourseRepository::class)]
class Course
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\ManyToMany(targetEntity: Student::class, inversedBy: 'courses', fetch: 'LAZY')]
    #[ORM\JoinTable(name: 'student_course', joinColumns: ['classId'], inverseJoinColumns: ['studentId'])]
    private ?Collection $students;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getStudents(): ?Collection
    {
        return $this->students;
    }

    public function setStudents(?Collection $students): void
    {
        $this->students = $students;
    }
}
