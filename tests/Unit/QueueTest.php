<?php

declare(strict_types=1);

use Exercises\Queue;
use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    public function test_if_is_valid_queue(): void
    {
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

        $expectedResult = [1,"a",2,"b","c"];
        
        $this->assertEquals($expectedResult, $interweaves);
    }
}