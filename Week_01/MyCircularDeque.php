<?php
/**
 * Created by PhpStorm.
 * User: bamboo
 * Date: 2020-08-02
 * Time: 13:58
 */

class MyCircularDeque {
    /**
     * Initialize your data structure here. Set the size of the deque to be k.
     * @param Integer $k
     */

    private $queue = [];    //队列数组
    private $maxLength; //队列固定长度
    private $currentLength = 0; //当前已用长度

    function __construct($k) {
        $this->maxLength = $k;
    }

    /**
     * Adds an item at the front of Deque. Return true if the operation is successful.
     * @param Integer $value
     * @return Boolean
     */
    function insertFront($value) {
        if($this->currentLength == $this->maxLength) {
            return false;
        }

        array_unshift($this->queue, $value);
        $this->currentLength++;
        return true;
    }

    /**
     * Adds an item at the rear of Deque. Return true if the operation is successful.
     * @param Integer $value
     * @return Boolean
     */
    function insertLast($value) {
        if($this->currentLength == $this->maxLength) {
            return false;
        }

        array_push($this->queue, $value);
        $this->currentLength++;
        return true;
    }

    /**
     * Deletes an item from the front of Deque. Return true if the operation is successful.
     * @return Boolean
     */
    function deleteFront() {
        if($this->currentLength == 0) {
            return false;
        }

        array_shift($this->queue);
        $this->currentLength--;
        return true;
    }

    /**
     * Deletes an item from the rear of Deque. Return true if the operation is successful.
     * @return Boolean
     */
    function deleteLast() {
        if($this->currentLength == 0) {
            return false;
        }
        array_pop($this->queue);
        $this->currentLength--;
        return true;
    }

    /**
     * Get the front item from the deque.
     * @return Integer
     */
    function getFront() {
        if($this->currentLength == 0) {
            return -1;
        }

        return $this->queue[0];
    }

    /**
     * Get the last item from the deque.
     * @return Integer
     */
    function getRear() {
        if($this->currentLength == 0) {
            return -1;
        }

        return $this->queue[$this->currentLength - 1];
    }

    /**
     * Checks whether the circular deque is empty or not.
     * @return Boolean
     */
    function isEmpty() {
        return $this->currentLength ? false : true;
    }

    /**
     * Checks whether the circular deque is full or not.
     * @return Boolean
     */
    function isFull() {
        return $this->currentLength == $this->maxLength ? true : false;
    }
}