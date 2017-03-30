<?php

//$time_of_birth= strtotime();
//var_dump(date('Y-m-d' 'H:i:s', strto0));
//var_dump(time()); die();



// get contents of the file and returns as a string



function downloadNYTimesRSS()
{
    // downloads xml code from nytimes and puts it into a variable
$contents = file_get_contents('http://rss.nytimes.com/services/xml/rss/nyt/World.xml');

    // creates a file and writes the variable into it
file_put_contents('nytimes-rss.xml', $contents);

    //so now we have the file 'nytimes-rss.xml' containing the source code of 'http://rss.nytimes.com/services/xml/rss/nyt/World.xml'
}




// if the "cache" file does not exist
if(!file_exists('nytimes-rss.xml'))
{
        // download it from the downloadNYTimes
        downloadNYTimesRSS();

}






 // reads the contents of the local file and puts it into a variable    
$contents = file_get_contents('nytimes-rss.xml');


//check if everything is ok - we have just a string so far
var_dump($contents);


// to read it we need to use an extension_loaded
// read the string and form a simplexmlelement object out of it

$simplexml_object = simplexml_load_string($contents);


//to test and view object, var_dump the name of the root element (<rss> element, so 'rss')
var_dump($simplexml_object->getName());

//var_dump <channel>
//var_dump($simpleexml_object->channel);



//var_dump first <item> witin <channel>
var_dump($simpleexml_object->channel->item);




// object used as an array to display code
foreach($simplexml_object->channel->item as $one_item)
{
    //var_dump($one_item->title);


    $contents=(string)$one_item->title;
    echo $contents . '</br>'; 

}



// see code from day 43 - Instructor was Yan 