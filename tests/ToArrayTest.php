<?php

declare(strict_types=1);

use Tests\Suit;

it('can get names', function ()
{

  expect(Suit::names())
  ->toEqual([
    'Hearts',
    'Diamonds',
    'Clubs',
    'Spades',
  ]);

});

it('can get values', function ()
{

  expect(Suit::values())
  ->toEqual([
    'H',
    'D',
    'C',
    'S',
  ]);

});

it('can get array', function ()
{

  expect(Suit::array())
  ->toEqual([
    'H' => 'Hearts',
    'D' => 'Diamonds',
    'C' => 'Clubs',
    'S' => 'Spades',
  ]);

});