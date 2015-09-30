
<?php
/*
Name: Naveen kumar sheela
assignment: 4
Course: Advance DataBase System
*/

    $m = new MongoClient();												// connect
    $db = $m->nsheela;													// select a database
    $db = $m->nsheela;
	$collection = $db->random_people;									// select a collection (analogous to a relational database's table)
	$json = file_get_contents("http://api.randomuser.me/?results=1000");// fetching the data and loading into the array
    $json_array = json_decode($json);									// looping to insert the document into the database.    
	for($i=0;$i<sizeof($json_array->results);$i++)
    {
        $collection->insert($json_array->results[$i]);
    }   
?>