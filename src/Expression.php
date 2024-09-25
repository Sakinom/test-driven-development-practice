<?php

interface Expression
{
  public function plus(Expression $addend): Expression;
  public function reduce(Bank $bank, string $to): Money;
}