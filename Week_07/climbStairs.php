<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {

//        if($n == 1) return 1;
//        if($n == 2) return 2;
//        return $this->climbStairs($n - 1) + $this->climbStairs($n - 2);

        $p = 0; $q = 0; $r = 1;
        for($i = 1; $i <= $n; $i++) {
            $p = $q;
            $q = $r;
            $r = $p + $q;
        }

        return $r;
    }
}
