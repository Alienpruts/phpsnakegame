<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 1/21/17
 * Time: 11:40 PM
 */

require_once __DIR__ . '/../classes/SnakeGame.php';
use PHPSnake\SnakeGame;


class SnakeGameTest extends PHPUnit_Framework_TestCase {

  /** @test */
  public function itShouldThrowAnExceptionWheneverThereAreNoSnakesAtRuntime() {
    $snakeGame = new SnakeGame();
    $this->setExpectedException(Exception::class);

    $snakeGame->run();
  }

}
