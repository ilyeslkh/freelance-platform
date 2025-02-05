<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;


final class Version20250205101418 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE job_application (id INT AUTO_INCREMENT NOT NULL, job_id INT NOT NULL, applicant_id INT NOT NULL, message LONGTEXT NOT NULL, applied_at DATETIME NOT NULL, INDEX IDX_C737C688BE04EA9 (job_id), INDEX IDX_C737C68897139001 (applicant_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE job_application ADD CONSTRAINT FK_C737C688BE04EA9 FOREIGN KEY (job_id) REFERENCES job (id)');
        $this->addSql('ALTER TABLE job_application ADD CONSTRAINT FK_C737C68897139001 FOREIGN KEY (applicant_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE job DROP FOREIGN KEY FK_FBD8E0F835274B9F');
        $this->addSql('DROP INDEX IDX_FBD8E0F835274B9F ON job');
        $this->addSql('ALTER TABLE job DROP service_job_id');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE job_application DROP FOREIGN KEY FK_C737C688BE04EA9');
        $this->addSql('ALTER TABLE job_application DROP FOREIGN KEY FK_C737C68897139001');
        $this->addSql('DROP TABLE job_application');
        $this->addSql('ALTER TABLE job ADD service_job_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE job ADD CONSTRAINT FK_FBD8E0F835274B9F FOREIGN KEY (service_job_id) REFERENCES service (id)');
        $this->addSql('CREATE INDEX IDX_FBD8E0F835274B9F ON job (service_job_id)');
    }
}
