<?php

    function writeToQueue($input) {
        $output = "";
        $output .= "<?php ";
        $output .= "return [";
        foreach($input as $value) {
            $output .= '"' . $value .'",';
        }
        $output .= "] ";
        $output .= "?>";
        $myfile = fopen("queue-1.php", "w+") or die("Unable to open file!");
        fwrite($myfile, $output);
        fclose($myfile);
    }

    function getQueue() {
        $baseQueue = include "queue-1.php";
        if(count($baseQueue) <= 0) {
            $baseQueue = [];
        }
        return $baseQueue;
    }

    function addToQueue($value) {
        $queue = getQueue();
        array_push($queue, $value); // push the value into array 
        var_dump($queue);
        writeToQueue($queue); //return the current results
        return getQueue();
    }

    //Last In First Out
    function getLastItem() {
        $queue = getQueue();
        $value = array_pop($queue);
        writeToQueue($queue);
        return $value;
    }
    
    //First In First Out
    function getFistItem() {
        $queue = getQueue();
        $value = array_shift($queue);
        writeToQueue($queue);
        return $value;
    }

    function emptyQueue() {
        writeToQueue([]);
    }

    function isQueueEmpty() {
        $queue = getQueue();
        if(count($queue) <= 0) {
            return true;
        }
        return false;
    }
?>