
<?php
/*
Name: Naveen kumar sheela
assignment4
Course: 5303 Advance DataBase System
*/

    $m = new MongoClient();						// connection string for mongoDB
    $db = $m->nsheela;							// connection to local datbase database name="nsheela"
    $collection = $db->random_people;					// select a collection from mongoDB that to be inserted 
    $json = file_get_contents("http://api.randomuser.me/?results=1000");// fetching the data and loading into the array
    $json_array = json_decode($json);					// Jason array to collect random_people information    
	for($i=0;$i<sizeof($json_array->results);$i++)			//loop repeating for 1000+ users	
    {
        $collection->insert($json_array->results[$i]);			//inserting into mongoDb
    }   
?>
