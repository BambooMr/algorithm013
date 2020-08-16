#学习笔记
###泛型递归、树递归    
####三个条件：
* 一个问题的解可以分解为几个子问题的解
* 这个问题与分解之后的子问题，除了数据规模不同，求解思路完全一样
* 存在递归终止条件
```
def recursion(level, p1):
    # terminator
    if level > MAX_LEVEL:
        print(result)
        return
    # process current level
    ...
    # drill down
    self.recursion(level+1, p1)
    # reverse current state if needed
    ...
```


###分治、回溯
太难了，等我理解完再补上。