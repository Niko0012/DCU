<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220330174510 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commentaire (id INT AUTO_INCREMENT NOT NULL, prochaines_sorties_id INT DEFAULT NULL, news_id INT DEFAULT NULL, info_inutile_id INT DEFAULT NULL, podcast_id INT DEFAULT NULL, making_of_id INT DEFAULT NULL, contenu LONGTEXT NOT NULL, INDEX IDX_67F068BC6556B3F6 (prochaines_sorties_id), INDEX IDX_67F068BCB5A459A0 (news_id), INDEX IDX_67F068BC184A9557 (info_inutile_id), INDEX IDX_67F068BC786136AB (podcast_id), INDEX IDX_67F068BC6F3204A8 (making_of_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC6556B3F6 FOREIGN KEY (prochaines_sorties_id) REFERENCES prochaines_sorties (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCB5A459A0 FOREIGN KEY (news_id) REFERENCES news (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC184A9557 FOREIGN KEY (info_inutile_id) REFERENCES info_inutile (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC786136AB FOREIGN KEY (podcast_id) REFERENCES podcast (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC6F3204A8 FOREIGN KEY (making_of_id) REFERENCES making_of (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE commentaire');
    }
}
