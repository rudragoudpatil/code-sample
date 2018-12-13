<?php

/**
 * Class FindSumPartsFromArray
 */
class FindSumPartsFromArray
{
    private $numberArray;

    public function __construct()
    {
        $this->numberArray = [];
    }

    /**
     * @return array
     */
    public function getNumberArray(): array
    {
        return $this->numberArray;
    }

    /**
     * @param array $numberArray
     */
    public function setNumberArray(array $numberArray)
    {
        $this->numberArray = $numberArray;
    }

    /**
     * @return array
     */
    public function sortAscendingNumber() : array {
        sort($this->numberArray);
        return $this->numberArray;
    }

    /**
     * @param int $sum
     * @param array $numberArray
     * @return bool
     */
    public function sumPartsFromArray(int $sum, array $numberArray): bool {
        $this->numberArray = $numberArray;
        $numberArray = $this->sortAscendingNumber();
        $countOfElements = count($numberArray);

        if($countOfElements < 2){
            return false;
        }

        if($countOfElements == 2){
            return (($sum) == ($numberArray[0] + $numberArray[1]));
        }

        $l = 0;
        $r = $countOfElements - 1;
        while ($l < $r)
        {
            if($numberArray[$l] + $numberArray[$r] == $sum)
                return true;
            else if($numberArray[$l] + $numberArray[$r] < $sum)
                $l++;
            else
                $r--;
        }
        return false;
    }
}