<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210705235718 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE author (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE book (id INT AUTO_INCREMENT NOT NULL, author_id_id INT NOT NULL, title VARCHAR(120) NOT NULL, description LONGTEXT DEFAULT NULL, pages INT DEFAULT NULL, date_add DATETIME NOT NULL, date_mod DATETIME DEFAULT NULL, INDEX IDX_CBE5A33169CCBE9A (author_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(120) NOT NULL, password VARCHAR(120) NOT NULL, date_add DATETIME NOT NULL, date_mod DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE book ADD CONSTRAINT FK_CBE5A33169CCBE9A FOREIGN KEY (author_id_id) REFERENCES author (id)');
        $this->addSql('insert into user(username, password, date_add, roles) values(\'admin\', \'$2y$13$5Vfhg1J.0PI.kOzu/xL0c.Ah9/Qir40QhtZ7QYtqqwDZAb2yNAmNW\', \'2021-07-06 22:00:00\', \'["ROLE_ADMIN"]\')');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE book DROP FOREIGN KEY FK_CBE5A33169CCBE9A');
        $this->addSql('DROP TABLE author');
        $this->addSql('DROP TABLE book');
        $this->addSql('DROP TABLE user');
    }
}
