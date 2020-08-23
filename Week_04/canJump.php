//<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function canJump($nums) {
        if(count($nums) == 0) return false;

        $enable_length = count($nums) - 1;
        for($i = count($nums) - 1; $i >= 0; $i--) {
            if($nums[$i] + $i >= $enable_length) $enable_length = $i;
        }

        return $enable_length == 0;

    }
}
