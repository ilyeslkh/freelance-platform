<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;


final class Version20250129110029 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE service DROP owner_id');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE service ADD owner_id INT NOT NULL');
    }
}
