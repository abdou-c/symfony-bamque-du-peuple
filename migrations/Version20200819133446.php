<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200819133446 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE client_bloque (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, telephone INT NOT NULL, addresse_mail VARCHAR(255) NOT NULL, num_cni INT NOT NULL, date_naiss DATE NOT NULL, sexe LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE client_courant (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, num_telephone INT NOT NULL, num_id INT NOT NULL, adress_mail VARCHAR(100) NOT NULL, date_naissance DATE NOT NULL, sexe LONGTEXT NOT NULL, salaire VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE client_simple (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, cni INT NOT NULL, telephone INT NOT NULL, date_naiss DATE NOT NULL, sexe LONGTEXT NOT NULL, adresse_mail VARCHAR(100) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE compte_bloque (id INT AUTO_INCREMENT NOT NULL, client_bloque_id INT DEFAULT NULL, date_ouverture DATE NOT NULL, date_fermeture DATE NOT NULL, numero_compte INT NOT NULL, solde VARCHAR(255) NOT NULL, frais_ouv VARCHAR(255) NOT NULL, remuneration VARCHAR(255) NOT NULL, INDEX IDX_2B4331DFE1B24EB3 (client_bloque_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE compte_courant (id INT AUTO_INCREMENT NOT NULL, client_courant_id INT DEFAULT NULL, numero_compte INT NOT NULL, solde VARCHAR(255) NOT NULL, frais_ouverture VARCHAR(255) NOT NULL, agios VARCHAR(255) NOT NULL, date_ouverture DATE NOT NULL, INDEX IDX_73F05D6CCD64C4FD (client_courant_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE compte_simple (id INT AUTO_INCREMENT NOT NULL, client_simple_id INT DEFAULT NULL, numero_compte INT NOT NULL, solde INT NOT NULL, frais_ouv VARCHAR(255) NOT NULL, remuneration INT NOT NULL, date_ouv DATE NOT NULL, INDEX IDX_1BE2643523DA219A (client_simple_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE compte_bloque ADD CONSTRAINT FK_2B4331DFE1B24EB3 FOREIGN KEY (client_bloque_id) REFERENCES client_bloque (id)');
        $this->addSql('ALTER TABLE compte_courant ADD CONSTRAINT FK_73F05D6CCD64C4FD FOREIGN KEY (client_courant_id) REFERENCES client_courant (id)');
        $this->addSql('ALTER TABLE compte_simple ADD CONSTRAINT FK_1BE2643523DA219A FOREIGN KEY (client_simple_id) REFERENCES client_simple (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE compte_bloque DROP FOREIGN KEY FK_2B4331DFE1B24EB3');
        $this->addSql('ALTER TABLE compte_courant DROP FOREIGN KEY FK_73F05D6CCD64C4FD');
        $this->addSql('ALTER TABLE compte_simple DROP FOREIGN KEY FK_1BE2643523DA219A');
        $this->addSql('DROP TABLE client_bloque');
        $this->addSql('DROP TABLE client_courant');
        $this->addSql('DROP TABLE client_simple');
        $this->addSql('DROP TABLE compte_bloque');
        $this->addSql('DROP TABLE compte_courant');
        $this->addSql('DROP TABLE compte_simple');
    }
}
