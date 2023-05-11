<?php

class Player {
    public $name;
    public $score = 0;
    public $games = 0;

    public function __construct($name) {
        $this->name = $name;
    }

    public function recordResult($score) {
        $this->score += $score;
        $this->games++;
    }
}

class RankingTable {

    public $playersTable = [];

    public function __construct($playerNames) {
        foreach ($playerNames as $name) {
            $this->playersTable[] = new Player($name);
        }
    }


    public function recordResult($playerName, $score) {
        foreach ($this->playersTable as $onePlayer) {
            if ($onePlayer->name == $playerName) {
                $onePlayer->recordResult($score);
                break;
            }
        }
    }

    public function playerRank($rank) {
        $scores = array();
        $games = array();
        $names = array();
        
        foreach ($this->playersTable as $player) {
            $scores[] = $player->score;
            $games[] = $player->games;
            $names[] = $player->name;
        }

        array_multisort($scores, SORT_DESC, $games, SORT_ASC, $names, SORT_ASC, $this->playersTable);
           
        return $this->playersTable[$rank-1]->name;
    }
}

$table = new RankingTable(array('Jan', 'Maks','Monika'));
$table->recordResult('Jan', 2);
$table->recordResult('Maks', 3);
$table->recordResult('Monika', 5);
echo $table->playerRank(1);

?>
