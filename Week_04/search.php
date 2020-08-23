//<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {

        $lo = 0;
        $hi = count($nums) - 1;

        while($lo < $hi) {
            $mid = (int)(($lo + $hi) / 2);
            if(($nums[0] > $target) ^ ($nums[0] > $nums[$mid]) ^ ($target > $nums[$mid])) {
                $lo = $mid + 1;
            } else {
                $hi = $mid;
            }
        }

        return $lo == $hi && $nums[$lo] == $target ? $lo : -1;
    }
}
