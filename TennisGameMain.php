<?php

include_once ('TennisGame.php');
$tennisGame = new TennisGame('player1','player2',6,8);
$tennisGame->calculateScore();
echo $tennisGame;