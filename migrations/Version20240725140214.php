<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240725140214 extends AbstractMigration
{
    private array $data = [
        ['r6r/1pp3k1/1b6/p2P1p2/P1N1pn2/2P2PP1/BP5P/4RR1K b - - 0 1', 'Rxh2+ Kxh2 Rh8#'],
        ['r2q1rk1/pppb1ppp/3b4/4p1P1/4Pn2/2N1B2P/PPPQBP2/2KR3R w - - 0 1', 'Bxf4 exf4 e5'],
        ['rnb3kr/ppp4p/3b3B/3Pp2n/2BP4/3K1Rp1/PPP3q1/RN1Q4 w - - 0 1', 'Rf8+ Bxf8 d6+ Be6 Bxe6#'],
        ['2kr4/1pp4p/1p1r4/5Pp1/1P2q3/2P1R2P/P3KP2/1Q1R4 b - - 0 1', 'Rd2+']
    ];
    public function getDescription(): string
    {
        return 'Adding Woodpecker Method puzzles to tactics_puzzle table.';
    }

    public function up(Schema $schema): void
    {
        $data = [
            ['r6r/1pp3k1/1b6/p2P1p2/P1N1pn2/2P2PP1/BP5P/4RR1K b - - 0 1', 'Rxh2+ Kxh2 Rh8#'],
            ['r2q1rk1/pppb1ppp/3b4/4p1P1/4Pn2/2N1B2P/PPPQBP2/2KR3R w - - 0 1', 'Bxf4 exf4 e5'],
            ['rnb3kr/ppp4p/3b3B/3Pp2n/2BP4/3K1Rp1/PPP3q1/RN1Q4 w - - 0 1', 'Rf8+ Bxf8 d6+ Be6 Bxe6#'],
            ['2kr4/1pp4p/1p1r4/5Pp1/1P2q3/2P1R2P/P3KP2/1Q1R4 b - - 0 1', 'Rd2+']
        ];

        foreach ($this->data as $item) {
            $this->addSql('INSERT INTO tactics_puzzle (fen, solution) VALUES (:fen, :solution)', [
                'fen' => $item[0],
                'solution' => $item[1]
            ]);
        }
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        foreach ($this->data as $item) {
            $this->addSql('DELETE FROM tactics_puzzle WHERE fen = :fen', [
                'fen' => $item[0]
            ]);
        }
    }
}
