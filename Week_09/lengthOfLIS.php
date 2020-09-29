<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function lengthOfLIS($nums) {

        $len = count($nums);

        if($len <= 1 ) return $len;

        $dp = array_fill(0, $len, 1);
        for($i = 1; $i < $len ; $i++) {
            for($j = 0; $j < $i; $j++) {
                if($nums[$j] < $nums[$i]) {
                    $dp[$i] = max($dp[$i], $dp[$j] + 1);
                }
            }
        }

        return max($dp);
    }
}
