<?php

namespace App\Service;

class TacticsPuzzles
{
    public function getRandom(): array
    {
        $puzzles = [
            'rnbqkbnr/1pp2ppp/p2p4/4p3/2B1P3/5Q2/PPPP1PPP/RNB1K1NR w KQkq - 0 4',
            'r6r/1pp3k1/1b6/p2P1p2/P1N1pn2/2P2PP1/BP5P/4RR1K b - - 0 1',
            'rnb3kr/ppp4p/3b3B/3Pp2n/2BP4/3K1Rp1/PPP3q1/RN1Q4 w - - 0 1'
        ];

        return [
            'fen' => $puzzles[array_rand($puzzles, 1)],
        ];
    }
}