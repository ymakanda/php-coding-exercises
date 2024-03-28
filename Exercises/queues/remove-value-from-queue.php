<?php

    include "queue.php";

   $lastItem = getLastItem();
   if(empty($lastItem)) {
    echo "Queue is empty";
   }else {
        echo $lastItem;
   }
?>