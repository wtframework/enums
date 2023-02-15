<?php

declare(strict_types=1);

namespace Tests;

use WTFramework\Enums\ToArray;

enum Suit: string
{

  use ToArray;

  case Hearts = 'H';
  case Diamonds = 'D';
  case Clubs = 'C';
  case Spades = 'S';

}