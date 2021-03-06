<?php

class Solution
{
    function longestValidParentheses($s) {

        $length = strlen($s);
        if ($length < 2) return 0;

        $dp = array_fill(0, $length, 0);
        for ($i = 1; $i < $length; ++$i) {
            if ($s[$i] == '(') continue;
            $index = $i - $dp[$i - 1] - 1;
            if ($index >= 0 && $s[$index] == '(') {
                $dp[$i] = $dp[$i - 1] + 2 + ($dp[$index - 1] ?? 0);
            }
        }

        return max($dp);
    }
}
