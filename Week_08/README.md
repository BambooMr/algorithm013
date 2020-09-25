学习笔记
###1.冒泡排序算法
```
/*
 * 冒泡算法
 * @param Array $data [1,5,6,4,7,8,9]
 * */
function bubbleSort($data)
{
    if(count($data) <= 1) return $data;

    $n = count($data);
    for($i = 0; $i < $n; $i++) {
        for($j = 0; $j < $n - $i - 1; $j++) {
            if($data[$j] > $data[$j+1]) {
                $temp = $data[$j];
                $data[$j] = $data[$j+1];
                $data[$j+1] = $temp;
            }
        }
    }
    return $data;
}

// test
$data  = [1,5,6,4,2,7,3,9,8,10];
var_dump(bubbleSort($data));
```

###2.选择排序算法
```
/*
 * 选择排序
 * @param Array $data [1,5,6,4,7,8,9]
 * */
function selectionSort($data)
{
    if(count($data) <= 1) return $data;

    $n = count($data);
    for($i = 0; $i < $n - 1; $i++) {
        $p = $i;
        for($j = $i + 1; $j < $n; $j++) {
            if($data[$p] > $data[$j]) {
                $p = $j;
            }
        }

        $temp = $data[$p];
        $data[$p] = $data[$i];
        $data[$i] = $temp;
    }
    return $data;
}

// test
$data  = [1,5,6,4,2,7,3,9,8,10];
var_dump(selectionSort($data));
```

###3.插入排序算法
```
/*
 * 插入排序
 * @param Array $data [1,5,6,4,7,8,9]
 * */
function insertSort($data)
{
    if(count($data) <= 1) return $data;

    $n = count($data);
    for($i = 1; $i < $n; $i++) {
        $value = $data[$i];
        $j = $i - 1;
        for(; $j >= 0 ; $j--) {
            if($data[$j] > $value) {
                $data[$j+1] = $data[$j];
            } else {
                break;
            }
        }
        $data[$j+1] = $value;
    }
    return $data;
}

// test
$data  = [1,5,6,4,2,7,3,9,8,10];
var_dump(insertSort($data));
```