<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220830183350 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("INSERT INTO `faculty`(`id`, `name`) VALUES('1', 'Technical')");
        $this->addSql("INSERT INTO `faculty`(`id`, `name`) VALUES('2', 'Economic')");
        $this->addSql("INSERT INTO `faculty`(`id`, `name`) VALUES('3', 'Legal')");

        $this->addSql("INSERT INTO `student`(`id`, `first_name`, `last_name`, `faculty_id`) 
                            VALUES('1', 'Ruta', 'Safto', '1')");
        $this->addSql("INSERT INTO `student`(`id`, `first_name`, `last_name`, `faculty_id`) 
                            VALUES('2', 'Terra', 'Notro', '1')");
        $this->addSql("INSERT INTO `student`(`id`, `first_name`, `last_name`, `faculty_id`) 
                            VALUES('3', 'Grety', 'Botyr', '1')");
        $this->addSql("INSERT INTO `student`(`id`, `first_name`, `last_name`, `faculty_id`) 
                            VALUES('4', 'Jotur', 'Nohoty', '1')");
        $this->addSql("INSERT INTO `student`(`id`, `first_name`, `last_name`, `faculty_id`) 
                            VALUES('5', 'Gotyro', 'Jorou', '1')");
        $this->addSql("INSERT INTO `student`(`id`, `first_name`, `last_name`, `faculty_id`) 
                            VALUES('6', 'Brotud', 'Monyr', '1')");
        $this->addSql("INSERT INTO `student`(`id`, `first_name`, `last_name`, `faculty_id`) 
                            VALUES('7', 'Klonut', 'Boldoty', '1')");

        $this->addSql("INSERT INTO `student`(`id`, `first_name`, `last_name`, `faculty_id`) 
                            VALUES('8', 'Gytou', 'Verotu', '2')");
        $this->addSql("INSERT INTO `student`(`id`, `first_name`, `last_name`, `faculty_id`) 
                            VALUES('9', 'Ftou', 'Nonuru', '2')");
        $this->addSql("INSERT INTO `student`(`id`, `first_name`, `last_name`, `faculty_id`) 
                            VALUES('10', 'Geroty', 'Cotyrot', '2')");
        $this->addSql("INSERT INTO `student`(`id`, `first_name`, `last_name`, `faculty_id`) 
                            VALUES('11', 'Voluty', 'Xirote', '2')");
        $this->addSql("INSERT INTO `student`(`id`, `first_name`, `last_name`, `faculty_id`) 
                            VALUES('12', 'Frotuw', 'Boluter', '2')");
        $this->addSql("INSERT INTO `student`(`id`, `first_name`, `last_name`, `faculty_id`) 
                            VALUES('13', 'Holitu', 'Nolubol', '2')");
        $this->addSql("INSERT INTO `student`(`id`, `first_name`, `last_name`, `faculty_id`) 
                            VALUES('14', 'Golohok', 'Bolkolen', '2')");
        $this->addSql("INSERT INTO `student`(`id`, `first_name`, `last_name`, `faculty_id`) 
                            VALUES('15', 'Hitury', 'Nolityer', '2')");

        $this->addSql("INSERT INTO `student`(`id`, `first_name`, `last_name`, `faculty_id`) 
                            VALUES('16', 'Gilar', 'Rewolut', '3')");
        $this->addSql("INSERT INTO `student`(`id`, `first_name`, `last_name`, `faculty_id`) 
                            VALUES('17', 'Tyrol', 'Rolut', '3')");
        $this->addSql("INSERT INTO `student`(`id`, `first_name`, `last_name`, `faculty_id`) 
                            VALUES('18', 'Goluer', 'Bojityw', '3')");
        $this->addSql("INSERT INTO `student`(`id`, `first_name`, `last_name`, `faculty_id`) 
                            VALUES('19', 'Voluner', 'Soloket', '3')");
        $this->addSql("INSERT INTO `student`(`id`, `first_name`, `last_name`, `faculty_id`) 
                            VALUES('20', 'Golorot', 'Derolap', '3')");
        $this->addSql("INSERT INTO `student`(`id`, `first_name`, `last_name`, `faculty_id`) 
                            VALUES('21', 'Sotoreg', 'Volkerat', '3')");

        $this->addSql("INSERT INTO `course`(`id`, `name`) VALUES('1', 'art')");
        $this->addSql("INSERT INTO `course`(`id`, `name`) VALUES('2', 'driving')");
        $this->addSql("INSERT INTO `course`(`id`, `name`) VALUES('3', 'swimming')");

        $this->addSql("INSERT INTO `student_course`(`student_id`, `course_id`) VALUES('1', '1')");
        $this->addSql("INSERT INTO `student_course`(`student_id`, `course_id`) VALUES('1', '2')");
        $this->addSql("INSERT INTO `student_course`(`student_id`, `course_id`) VALUES('1', '3')");
        $this->addSql("INSERT INTO `student_course`(`student_id`, `course_id`) VALUES('2', '2')");
        $this->addSql("INSERT INTO `student_course`(`student_id`, `course_id`) VALUES('2', '3')");
        $this->addSql("INSERT INTO `student_course`(`student_id`, `course_id`) VALUES('3', '1')");
        $this->addSql("INSERT INTO `student_course`(`student_id`, `course_id`) VALUES('3', '2')");
        $this->addSql("INSERT INTO `student_course`(`student_id`, `course_id`) VALUES('4', '1')");
        $this->addSql("INSERT INTO `student_course`(`student_id`, `course_id`) VALUES('4', '2')");
        $this->addSql("INSERT INTO `student_course`(`student_id`, `course_id`) VALUES('4', '3')");
        $this->addSql("INSERT INTO `student_course`(`student_id`, `course_id`) VALUES('5', '1')");
        $this->addSql("INSERT INTO `student_course`(`student_id`, `course_id`) VALUES('6', '2')");
        $this->addSql("INSERT INTO `student_course`(`student_id`, `course_id`) VALUES('6', '3')");
        $this->addSql("INSERT INTO `student_course`(`student_id`, `course_id`) VALUES('8', '2')");
        $this->addSql("INSERT INTO `student_course`(`student_id`, `course_id`) VALUES('9', '1')");
        $this->addSql("INSERT INTO `student_course`(`student_id`, `course_id`) VALUES('11', '1')");
        $this->addSql("INSERT INTO `student_course`(`student_id`, `course_id`) VALUES('11', '2')");
        $this->addSql("INSERT INTO `student_course`(`student_id`, `course_id`) VALUES('13', '2')");
        $this->addSql("INSERT INTO `student_course`(`student_id`, `course_id`) VALUES('15', '3')");
        $this->addSql("INSERT INTO `student_course`(`student_id`, `course_id`) VALUES('16', '1')");
        $this->addSql("INSERT INTO `student_course`(`student_id`, `course_id`) VALUES('16', '2')");
        $this->addSql("INSERT INTO `student_course`(`student_id`, `course_id`) VALUES('17', '1')");
        $this->addSql("INSERT INTO `student_course`(`student_id`, `course_id`) VALUES('18', '2')");
        $this->addSql("INSERT INTO `student_course`(`student_id`, `course_id`) VALUES('18', '3')");
        $this->addSql("INSERT INTO `student_course`(`student_id`, `course_id`) VALUES('20', '3')");
        $this->addSql("INSERT INTO `student_course`(`student_id`, `course_id`) VALUES('21', '2')");
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
