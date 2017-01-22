<?php

namespace PHPSnake;

class Snake {

  const DIRECTION_UP = 'UP';
  const DIRECTION_DOWN = 'DOWN';
  const DIRECTION_LEFT = 'LEFT';
  const DIRECTION_RIGHT = 'RIGHT';

  /** @var string */
  private $name;

  /** @var string */
  private $direction;

  /** @var int  */
  private $size = 0;


  public function __construct($name = NULL) {
    if ($name === NULL) {
      $this->name = $this->generateRandomName();
    } else {
      $this->name = $name;
    }
  }

  private function generateRandomName($length = 6) {
    $length = ($length > 3) ? $length : 6;
    $name = '';

    $consonants = 'bcdfghklmnpqrstvwxyz';
    $vowels = 'aeiou';

    for ($i = 0; $i < $length; $i++) {
      if ($i % 2 == 0) {
        $name .= $consonants[rand(0, strlen($consonants) - 1)];
      } else {
        $name .= $vowels[rand(0, strlen($vowels) - 1)];
      }
    }

    return ucfirst($name);
  }

  /**
   * @return string
   */
  public function getName() {
    return $this->name;
  }

  public function setDirection($direction) {
    $direction = strtoupper($direction);
    $directions = [
      Snake::DIRECTION_DOWN, Snake::DIRECTION_LEFT, Snake::DIRECTION_RIGHT, Snake::DIRECTION_UP
    ];

    if (!in_array($direction, $directions)) {
      throw new \InvalidArgumentException(
        'Invalid direction. Up, down, Left and Right are valid directions'
      );
    }
    $this->direction = $direction;
    echo $this->name . ' is going ' . $direction . PHP_EOL;

    return $this;
  }

}