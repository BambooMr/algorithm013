<?php
class LRUCache {
    /**
     * @param Integer $capacity
     */

    /**
     * @param Integer $maxCapacity
     */

    /**
     * @param Integer $currentCapacity
     */

    /**
     * @param  $header
     */

    function __construct($capacity) {
        $this->maxCapacity = $capacity;
        $this->currentCapacity = 0;
        $this->header = new Node(null, null);
    }

    /**
     * @param Integer $key
     * @return Integer
     */
    function get($key) {
        $current = $this->header;
        while($current && !isset($current->data[$key])){
            $current = $current->next;
        }

        if($current) {
            $node = $this->delete($key);
            $nextNode = $this->header->next;
            $this->header->next = $node;
            $node->next = $nextNode;
        }

        //$this->display();

        return $current ? $current->data[$key] : -1;
    }

    /**
     * @param Integer $key
     * @param Integer $value
     * @return NULL
     */
    function put($key, $value) {

        $current = $this->header;
        while($current && !isset($current->data[$key])){
            $current = $current->next;
        }

        if($current) {
            $current->data[$key] = $value;
            $node = $this->delete($key);
            $nextNode = $this->header->next;
            $this->header->next = $node;
            $node->next = $nextNode;

        } else {

            if($this->currentCapacity == $this->maxCapacity) {
                $current = $this->header;
                while($current->next && $current->next->next ){
                    $current = $current->next;
                }

                $current->next = null;
            } else {
                ++$this->currentCapacity;
            }

            $newNode = new Node($key, $value);
            $nextNode = $this->header->next;
            $this->header->next = $newNode;
            $newNode->next = $nextNode;
        }

//        $newNode = new Node($key, $value);
//        $current = $this->header;
//        while($current->next) {
//            $current = $current->next;
//        }
//
//        $current->next = $newNode;

        //$this->display();
    }

    //查找节点
    public function find($key)
    {
        $current = $this->header;
        while($current && !isset($current->data[$key])){
            $current = $current->next;
        }
        return $current ? $current->data[$key] : -1;
    }


    // 显示链表中的元素
    public function display()
    {
        $current = $this->header;
        if($current->next == null) {
            echo "list is none" . PHP_EOL;
            return;
        }
        while ($current->next != null) {
            echo json_encode($current->next->data) . PHP_EOL;
            $current = $current->next;
        }
    }

    //查找指定节点的前一个节点
    public function findBeforeNode($key)
    {
        $current = $this->header;
        while($current->next &&  !isset($current->next->data[$key])){
            $current = $current->next;
        }
        return $current;
    }

    //删除指定元素
    public function delete($key)
    {
        $before = $this->findBeforeNode($key);
        $deleteNode = $before->next;
        if($before) {
            $before->next = $before->next->next;
        }

        return $deleteNode;
    }
}

class Node{
    public $data;
    public $next;

    public function __construct($key, $value)
    {
        $this->data = [ $key => $value];
        $this->next = null;
    }
}

/**
 * Your LRUCache object will be instantiated and called as such:
 * $obj = LRUCache($capacity);
 * $ret_1 = $obj->get($key);
 * $obj->put($key, $value);
 */