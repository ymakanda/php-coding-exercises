<?php

declare(strict_types=1);

namespace Exercises;

use function Neos\Flow\var_dump;

/**
* Create a Queue.
*
* When queue is empty remove and peek methods should return null.
*
* @property mixed[] $queue
* @method void add(mixed $value)
* @method mixed|null remove() - returns the last element of the queue and removes it from the queue.
* @method mixed|null peek() - returns the last element of the queue and does not remove it from the queue.
* @method static self zip(self $queue1, self $queue2) interweaves two provided queues
* @example $queue1 = new Queue();
* $queue1->add(1);
* $queue1->add(2);
* $queue1->add(3);
* $queue1->peek() === 3;
* $queue1->remove() === 3;
*
* $queue2 = new Queue();
*
* $queue2->add('a');
* $queue2->add('b');
* $queue2->add('c');
*
* Queue::zip(queue1, queue2) -> [1, 'a', 2, 'b', 'c']

*/
final class Queue
{
    private $queue;

    public function __construct() {
        $this->queue = [];
    }

    public function add(mixed $value): void { 
        array_push($this->queue, $value); // adds an item to the back of the queue
    }

    public function remove() { 
        if (!$this->isEmpty()) {
            return array_pop($this->queue); //returns the last element of the queue and removes it from the queue.
        }
        return null;
    }

    public function peek() {
        if (!$this->isEmpty()) {
            return end($this->queue); //returns the last element of the queue and does not remove it from the queue.
        }
        return null;
    }

    public function isEmpty() {
        return empty($this->queue);
    }

    public  function zip(Queue $queue1, Queue $queue2) {
        $interweaved = [];

        $size = max(count($queue1->queue), count($queue2->queue));

        for ($i = 0; $i < $size; $i++) {
            if (isset($queue1->queue[$i])) {
                array_push($interweaved, $queue1->queue[$i]); // push queue1 value into interweaved array
            }
            if (isset($queue2->queue[$i])) {
                array_push($interweaved, $queue2->queue[$i]); // push queue2 value into interweaved array
            }
        }
        
        return $interweaved;
    }

}
$queue1 = new Queue();
    $queue1->add(1);
    $queue1->add(2);
    $queue1->add(3);
    $queue1->peek() === 3;
    $queue1->remove() === 3;

$queue2 = new Queue();
    $queue2->add('a');
    $queue2->add('b');
    $queue2->add('c');
   
$interweaves = new Queue();
    $interweaves = $interweaves->zip($queue1, $queue2);
    print_r($interweaves);

    
