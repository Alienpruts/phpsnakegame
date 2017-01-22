<?php

use PHPSnake\SnakeGame;
use PHPSnake\Snake;

require_once 'classes/SnakeGame.php';
require_once 'classes/Snake.php';

$param = ($argc > 1) ? $argv[1] : '';

$game = new SnakeGame();
$game->addSnake(new Snake());
$game->run();