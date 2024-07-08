<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use App\Entity\FenPosition;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;
use Doctrine\ORM\EntityManagerInterface;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240705210719 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('INSERT INTO fen_position (piece_placement, active_color, castling_rights, ep_target, halfmove_clock, full_moves) VALUES (:piece_placement, :active_color, :castling_rights, :ep_target, :halfmove_clock, :full_moves)', [
            'piece_placement' => 'rnbqkbnr/pppppppp/8/8/8/8/PPPPPPPP/RNBQKBNR',
            'active_color' => 'w',
            'castling_rights' => 'KQkq',
            'ep_target' => '-',
            'halfmove_clock' => 0,
            'full_moves' => 0,
        ]);


    }

    public function down(Schema $schema): void
    {
        $this->addSql('DELETE FROM fen_position');
    }
}
