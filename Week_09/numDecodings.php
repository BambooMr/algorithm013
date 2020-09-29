<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function numDecodings($s) {

        $dp = [];
        $len = strlen($s);;
        $dp[$len] = 1;

        for ($i = $len - 1; $i >= 0; $i--) {
            if ( $s{$i} == 0 ) {
                $dp[$i] = 0;
            } else {
                $dp[$i] = $dp[$i + 1] + (($s{$i} * 10 + $s{$i + 1} < 27) ? $dp[$i + 2] : 0);
            }
        }

        return $dp[0];

    }
}