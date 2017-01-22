<?php

namespace PHPSnake;

class SnakeGame {

  private $snakes = [];

  private $mappings = [
    [
      65 => 'up',
      66 => 'down',
      68 => 'left',
      67 => 'right',
      56 => 'up',
      50 => 'down',
      52 => 'left',
      54 => 'right',
    ],
    [
      119 => 'up',
      115 => 'down',
      97 => 'left',
      100 => 'right',
    ],
  ];

  public function __construct() {
  }

  /**
   * Adds a snake to the game
   *
   * @param \PHPSnake\Snake $s
   * @return $this
   */
  public function addSnake(Snake $s) {
    $this->snakes[] = $s;
    echo 'Added player ' . $s->getName();
    return $this;
  }


  public function run() {
    if (count($this->snakes) < 1) {
      throw new \Exception('Too few players');
    }

    $mappings = [];
    foreach ($this->snakes as $i => $snake) {
      foreach ($this->mappings[$i] as $key => $dir) {
        $mappings[$key] = [$dir, $i];
      }
    }

    system('stty cbreak -echo');
    $stdin = STDIN;

    while (1) {
      $c = ord(fgetc($stdin));
      echo "Char read: " . $c . PHP_EOL;

      if (isset($mappings[$c])) {
        $mapping = $mappings[$c];
        $this->snakes[$mapping[1]]->setDirection($mapping[0]);
      }
    }
    
  }

}