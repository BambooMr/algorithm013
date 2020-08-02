<?php
/**
 * Created by PhpStorm.
 * User: bamboo
 * Date: 2020-08-01
 * Time: 15:16
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        $j = 0;
        for($i = 0; $i < count($nums); $i++) {
            if($nums[$i] != 0) {
                $nums[$j] = $nums[$i];
                if($i != $j) {
                    $nums[$i] = 0;
                }
                $j++;

            }

        }

    }
}
