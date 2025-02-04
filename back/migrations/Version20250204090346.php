<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;


final class Version20250204090346 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE job_category (job_id INT NOT NULL, category_id INT NOT NULL, INDEX IDX_610BBCBABE04EA9 (job_id), INDEX IDX_610BBCBA12469DE2 (category_id), PRIMARY KEY(job_id, category_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE job_category ADD CONSTRAINT FK_610BBCBABE04EA9 FOREIGN KEY (job_id) REFERENCES job (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE job_category ADD CONSTRAINT FK_610BBCBA12469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE job_category DROP FOREIGN KEY FK_610BBCBABE04EA9');
        $this->addSql('ALTER TABLE job_category DROP FOREIGN KEY FK_610BBCBA12469DE2');
        $this->addSql('DROP TABLE job_category');
    }
}
