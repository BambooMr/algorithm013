学习笔记

###1.Trie数实现
```
class TrieNode {

    public $value = null;

    public $isEnd = false;

    public $childNode = array();

    /**
     * 添加孩子节点
    */
    public function addChildNode($value, $isEnd = false)
    {
        $node = $this->searchChildNode($value);
        if(empty($node)) {
            $node = new TrieNode();
            $node->value = $value;
            $this->childNode[] = $node;
        }

        $node->isEnd = $isEnd;
        return $node;
    }

    /**
     * 查询子节点
     */
    public function searchChildNode($value)
    {
        foreach($this->childNode as $key => $val) {
            if($val->value == $value) {
                return $this->childNode[$key];
            }
        }

        return false;
    }
}

/**
 * 添加字符串
 */
function addString(&$head, $str)
{
    $node = null;
    for($i = 0; $i < strlen($str); $i++) {
        if($str[$i] != ' ') {
            $isEnd = $i != (strlen($str) - 1) ? false : true;
            if($i == 0) {
                $node = $head->addChildNode($str[$i], $isEnd);
            } else {
                $node = $node->addChildNode($str[$i], $isEnd);
            }
        }
    }
}

/**
 * 获取所有字符串
 */
function getChildString($node, $str_array = [], $str = '')
{
    if($node->isEnd == true) {
        $str_array[] = $str;
    }

    if(empty($node->childNode)) {
        return $str_array;
    } else {
        foreach ($node->childNode as $key => $val) {
            $str_array = getChildString($val, $str_array, $str . $val->value);
        }

        return $str_array;
    }
}

/**
 * 搜索字符串
 */
function searchString($node, $str)
{
    for($i = 0; $i < strlen($str); $i++) {
        if($str[$i] != ' '){
            $node = $node->searchChildNode($str[$i]);
            if(empty($node)) {
                return false;
            }
        }
    }

    return true;
}


$head = new TrieNode();
addString($head, 'hello');
addString($head, 'world');
addString($head, 'hahahah');
addString($head, 'biubiubiubiu');

echo searchString($head, 'hahahah');

```
