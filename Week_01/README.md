#学习笔记
###平均时间复杂度分析
|         | 查询 | 插入 | 删除 |
| :-----: | :----: | :----: | :----: |
| 数组 | 普通查找：O(logn)<br>根据下标ßß随机访问：O(1) | O(n) | O(n) | 
| 普通链表 | O(n) | O(1) | O(1) |
| 跳表 | O(logn) | O(logn) | O(logn) |
| 栈 | \ | O(1) | O(1) |
| 队列 | \ | O(1) | O(1) |ß

<hr>

###代码技巧
####双指针法
LeetCode例题：[盛最多水的容器](https://leetcode-cn.com/problems/container-with-most-water/)
```
class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        $loop = true;
        $area = [];
        $left = 0;
        $right = count($height) - 1;
        while($loop) {
            $area[] = min($height[$left], $height[$right]) * ($right - $left);
            if($height[$left] <= $height[$right]) {
                $left++;
            } else {
                $right--;
            }

            if($left >=$right) {
                $loop = false;
            }
        }

        return max($area);
    }
}
```

