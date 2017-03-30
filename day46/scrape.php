<?php

//disable error messages from website
ini_set('display_errors', 0);
error_reporting(0);

//$page = file_get_contents('http://www.imdb.com/movies-in-theaters/');
//echo $page; 


/* -----------------example 1
$url = 'http://www.imdb.com/movies-in-theaters/';
$opts = ['http' => ['user_agent' => 'User-Agent:Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36']];
$context = stream_context_create($opts);
$page = file_get_contents($url, false, $context);
*/


/* -----------------example 2
$url = 'https://httpbin.org/headers';
$opts = ['http' => ['user_agent' => 'User-Agent:Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36']];
$context = stream_context_create($opts);


// file_get_contents($url) sends request to the $url and returns the contents   
// true - will allow automatic searching of local directories 
//false - will disable automatic searching so it will direct the request outside the machine
// ,$context allows us to add headers
$page = file_get_contents($url, false, $context);
echo $page;
 */




// -----------------example 3

$url = 'http://www.imdb.com/movies-in-theaters/';
//can add a header array
 $opts = ['http' => [
'user_agent' =>     'User-Agent:Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87', 
'header'=> [
    "Accept :text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8", 
  //  "Accept-Encoding : gzip, deflate, sdch, br",    // means it can read compressed pages sent by the server
    "Accept-Language : en-US,en;q=0.8"
 ]
 ]];
$context = stream_context_create($opts);
$page = file_get_contents($url, false, $context);
//echo $page;

// web scraping and parsing can be used for many different purposes, examples geting sports scores, exchange rates, statistics... 
// can't actually stop web scraping, so it's better to offer the data since they will get it anyway, this way you can put the data on another server so it will not effect your main servers 


// ____  can also scrape using    cURL  instead  _________________  



//-----------------  PARSING the page -----------------

libxml_use_internal_errors(true);
$doc = new DOMDocument();
$doc->loadHTML($page);
// using javascript getElementById 
$xml = simplexml_import_dom($doc->getElementById('main'));

foreach($xml->div->div[1]-> div as $div){
        var_dump($div->table->tbody->tr->td[1]->h4-a);

}

 //choosing the second div that is on the same level 


