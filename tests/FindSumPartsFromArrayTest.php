<?php

use PHPUnit\Framework\TestCase;

class FindSumPartsFromArrayTest extends TestCase
{
    private $findSumOfAdjNumInstance = null;

    public function __construct(string $name = null, array $data = [], string $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->findSumOfAdjNumInstance = new FindSumPartsFromArray();
    }

    public function testSortAscendingNumber(){
        $expected = [1,2,3,4,5,6];
        $input = [1,3,2,5,6,4];
        $this->findSumOfAdjNumInstance->setNumberArray($input);
        $actual = $this->findSumOfAdjNumInstance->sortAscendingNumber($input);
        $this->assertSame($expected,$actual);
    }

    public function testFindAdjacentNumberOneElement(){
        $input = [1];
        $expected = false;
        $sum = 1;
        $actual = $this->findSumOfAdjNumInstance->sumPartsFromArray($sum, $input);
        $this->assertSame($expected,$actual);
    }

    public function testFindAdjacentNumberTwoElement(){
        $input = [1,5];
        $expected = true;
        $sum = 6;
        $actual = $this->findSumOfAdjNumInstance->sumPartsFromArray($sum, $input);
        $this->assertSame($expected,$actual);
    }

    public function testFindAdjacentNumberMoreElement(){
        $input = [1, 3, 5, 8, 12, 13, 22];
        $expected = true;
        $sum = 16;
        $actual = $this->findSumOfAdjNumInstance->sumPartsFromArray($sum, $input);
        $this->assertSame($expected,$actual);
    }
}
