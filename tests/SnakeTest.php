<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 1/21/17
 * Time: 10:46 PM
 */


require_once __DIR__ . '/../classes/Snake.php';
use PHPSnake\Snake;



class SnakeTest extends \PHPUnit_Framework_TestCase {

  /**
   * @test
   */
  public function GeneratedNameShouldBeAtLeast3CharactersLong() {
    $snake = new Snake();
    $output = strlen($snake->getName());
    $this->assertGreaterThan(2, $output);

  }

  /**
   * @test
   */
  public function itShouldThrowAnExceptionIfInvalidDirectionIsGiven() {
    $snake = new Snake();
    $input = 'wrongdirection';

    $this->setExpectedException(InvalidArgumentException::class);

    $snake->setDirection($input);

  }

}
