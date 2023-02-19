<?php
    $data=array("musicals" => array("Oklahoma","The Music Man", "South Pacific" ),
     "drama" => array("Lawrence of Arabia ", "To Kill a Mockingbird", "Casablanca"), 
     "mysteries" => array("The Maltese Falcon", "Rear Window", " North by Northwest")
    );
    foreach($data as $cat => $val){
        echo "$cat\n";
        for($i=0; $i<count($val); $i++){
            echo "----> $i = $val[$i]\n";
        }
    }
?>