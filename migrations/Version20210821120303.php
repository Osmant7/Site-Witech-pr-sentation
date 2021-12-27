<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210821120303 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE inscription_jeunes (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, date_naissance VARCHAR(255) NOT NULL, numero_telephone VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, quartier VARCHAR(255) NOT NULL, scolarise VARCHAR(255) NOT NULL, niveau_scolaire VARCHAR(255) NOT NULL, nom_ecole VARCHAR(255) NOT NULL, ville_ecole VARCHAR(255) NOT NULL, pourquoi_cette_formation VARCHAR(255) NOT NULL, choix_session VARCHAR(255) NOT NULL, comment_as_tu_connu_witech VARCHAR(255) NOT NULL, remarque VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE inscriptions_entreprise (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, nom_entreprise VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, nom_responsable VARCHAR(255) NOT NULL, numero_telephone VARCHAR(255) NOT NULL, disponibilites_matin VARCHAR(255) NOT NULL, disponibilites_apres_midi VARCHAR(255) NOT NULL, disponibilites_journee VARCHAR(255) NOT NULL, nombre_collaborateurs VARCHAR(255) NOT NULL, mise_situation VARCHAR(255) NOT NULL, remarque VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE inscription_jeunes');
        $this->addSql('DROP TABLE inscriptions_entreprise');
    }
}
