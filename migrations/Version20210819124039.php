<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210819124039 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE inscriptions_entreprise (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, name_company VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, name_responsable VARCHAR(255) NOT NULL, number VARCHAR(255) NOT NULL, availabilities_morning VARCHAR(255) NOT NULL, availabilities_afternoon VARCHAR(255) NOT NULL, availabilities_all VARCHAR(255) NOT NULL, collaborators_number VARCHAR(255) NOT NULL, situation TINYINT(1) NOT NULL, remarque VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE inscriptions_entreprise');
    }
}
