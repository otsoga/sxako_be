<?php

namespace App\Service;

class EndgamePuzzles
{
    public function getRandom(): array
    {
        $puzzles = [
            '6k1/8/8/8/8/8/P7/7K w - - 0 1',
            '8/4k3/2K5/8/8/8/1P6/8 w - - 0 1',
            '5k2/8/5PK1/8/8/8/8/8 w - - 0 1',
            '5k2/8/5PK1/8/8/8/8/8 b - - 0 1'

        ];

        return [
            'fen' => $puzzles[array_rand($puzzles, 1)],
        ];
    }
}