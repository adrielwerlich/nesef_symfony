<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181113164041 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE ano (id INT AUTO_INCREMENT NOT NULL, ano VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE participacao_evento (id INT AUTO_INCREMENT NOT NULL, ano_id INT DEFAULT NULL, titulo VARCHAR(255) DEFAULT NULL, periodo VARCHAR(255) DEFAULT NULL, local VARCHAR(255) DEFAULT NULL, tipo_de_apresentacao VARCHAR(255) DEFAULT NULL, INDEX IDX_B2DCFC7DAE2D4F07 (ano_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE participacao_evento ADD CONSTRAINT FK_B2DCFC7DAE2D4F07 FOREIGN KEY (ano_id) REFERENCES ano (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE participacao_evento DROP FOREIGN KEY FK_B2DCFC7DAE2D4F07');
        $this->addSql('DROP TABLE ano');
        $this->addSql('DROP TABLE participacao_evento');
    }
}
