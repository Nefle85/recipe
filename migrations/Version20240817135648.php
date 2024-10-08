<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240817135648 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE post_has_ingredient ADD ingredient_id INT NOT NULL');
        $this->addSql('ALTER TABLE post_has_ingredient ADD CONSTRAINT FK_94CB183933FE08C FOREIGN KEY (ingredient_id) REFERENCES ingredient (id)');
        $this->addSql('CREATE INDEX IDX_94CB183933FE08C ON post_has_ingredient (ingredient_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE post_has_ingredient DROP FOREIGN KEY FK_94CB183933FE08C');
        $this->addSql('DROP INDEX IDX_94CB183933FE08C ON post_has_ingredient');
        $this->addSql('ALTER TABLE post_has_ingredient DROP ingredient_id');
    }
}
