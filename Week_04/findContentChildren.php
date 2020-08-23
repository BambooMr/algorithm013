//<?php
class Solution {

    /**
     * @param Integer[] $g
     * @param Integer[] $s
     * @return Integer
     */
    function findContentChildren($g, $s) {
        sort($g);
        sort($s);
        $g_length = count($g);
        $s_length = count($s);
        $i = $j = $result = 0;

        while($i < $g_length && $j < $s_length) {

            if($g[$i] <= $s[$j]) {
                $result++;
                $i++;
                $j++;
            } else {
                $j++;
            }
        }
        return $result;
    }
}
