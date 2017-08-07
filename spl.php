<?php
    echo "SPL的队列\n";
    $queue = new SplQueue();

    $queue -> enqueue('data1');
    $queue -> enqueue('data2');

    echo $queue -> dequeue()."\n";
    echo $queue -> dequeue()."\n";

    echo "SPL的栈\n";
    $stack = new SplStack();

    $stack -> push('data1');
    $stack -> push('data2');

    echo $stack -> pop()."\n";
    echo $stack -> pop()."\n";

    echo "SPL的最小堆\n";
    $heap = new SplMinHeap();

    $heap -> insert('data1');
    $heap -> insert('data2');

    echo $heap -> extract()."\n";
    echo $heap -> extract()."\n";

    echo "SPL的固定长度的数组\n";
    $array = new SplFixedArray(10);

    $array[0] = 123;
    $array[9] = 1234;

    var_dump($array);