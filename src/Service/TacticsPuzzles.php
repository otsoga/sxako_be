<?php

namespace App\Service;

class TacticsPuzzles
{
    public function create(string $fen, array|string $solution): void
    {

    }
    public function getRandom(): array
    {
        $puzzles = [
//            'r6r/1pp3k1/1b6/p2P1p2/P1N1pn2/2P2PP1/BP5P/4RR1K b - - 0 1',
//            'rnb3kr/ppp4p/3b3B/3Pp2n/2BP4/3K1Rp1/PPP3q1/RN1Q4 w - - 0 1',
            [
                'fen' => 'r2q1rk1/pppb1ppp/3b4/4p1P1/4Pn2/2N1B2P/PPPQBP2/2KR3R w - - 0 1',
                'solution' => ['Bxf4', 'exf4', 'e5', '']
            ]

//            '2kr4/1pp4p/1p1r4/5Pp1/1P2q3/2P1R2P/P3KP2/1Q1R4 b - - 0 1',
//            'rn1qk2r/ppp2ppp/5n2/2b1p3/2B1P1b1/3P1N2/PPP3PP/RNBQK2R w KQkq - 0 1'
        ];

        return $puzzles[array_rand($puzzles, 1)];
    }
}