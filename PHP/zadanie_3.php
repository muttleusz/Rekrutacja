<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie 1</title>
</head>
<body>
<?php
	    class RankingTable {
            private $players = array();
          
            function __construct($players) {
              $this->players = $players;
              foreach ($this->players as &$player) {
                $player = array('name' => $player, 'score' => 0, 'games' => 0);
              }
            }
          
            function recordResult($playerName, $score) {
              foreach ($this->players as &$player) {
                if ($player['name'] === $playerName) {
                  $player['score'] += $score;
                  $player['games'] += 1;
                  break;
                }
              }
              usort($this->players, function($a, $b) {
                if ($a['score'] === $b['score']) {
                  if ($a['games'] === $b['games']) {
                    return strcmp($a['name'], $b['name']);
                  } else {
                    return $a['games'] - $b['games'];
                  }
                } else {
                  return $b['score'] - $a['score'];
                }
              });
            }
          
            function playerRank($rank) {
              $index = $rank - 1;
              if (isset($this->players[$index])) {
                return $this->players[$index]['name'];
              }
              return null;
            }
          }
          
          $table = new RankingTable(array('Jan', 'Maks', 'Monika'));
          $table->recordResult('Jan', 2);
          $table->recordResult('Maks', 3);
          $table->recordResult('Monika', 5);
          echo $table->playerRank(1);
          
    ?>
</body>
</html>