//<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function permute($nums) {
        $r = [];
        $len = count($nums);

        if ($len == 1) {
            $r[] = $nums;
            return $r;
        }

        foreach ($nums as $k => $v) {
            $arr = $nums;
            array_splice($arr, $k, 1);
            $rr = $this->permute($arr);

            foreach ($rr as $item) {
                array_unshift($item, $v);
                $r[] = $item;
            }
        }
        return $r;
    }
}
