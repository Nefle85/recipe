<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240817140924 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE post_has_ingredient ADD post_id INT NOT NULL');
        $this->addSql('ALTER TABLE post_has_ingredient ADD CONSTRAINT FK_94CB1834B89032C FOREIGN KEY (post_id) REFERENCES post (id)');
        $this->addSql('CREATE INDEX IDX_94CB1834B89032C ON post_has_ingredient (post_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE post_has_ingredient DROP FOREIGN KEY FK_94CB1834B89032C');
        $this->addSql('DROP INDEX IDX_94CB1834B89032C ON post_has_ingredient');
        $this->addSql('ALTER TABLE post_has_ingredient DROP post_id');
    }
}
