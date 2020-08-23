//<?php
class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {

        $totalProfit  = 0;
        for($i = 1; $i < count($prices); $i++) {
            if($prices[$i] > $prices[$i - 1]) {
                $totalProfit += $prices[$i] - $prices[$i - 1];
            }
        }

        return $totalProfit;
    }
}
