<?php

//disable error messages from website
ini_set('display_errors', 0);
error_reporting(0);


$url = 'http://www.imdb.com/movies-in-theaters/';
//can add a header array
 $opts = ['http' => [
'user_agent' =>     'User-Agent:Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87', 

 ]];
$context = stream_context_create($opts);
$page = file_get_contents($url);




//-----------------  PARSING the page -----------------

libxml_use_internal_errors(true);
$doc = new DOMDocument();
$doc->loadHTML($page);
$xml = simplexml_import_dom($doc->getElementById('main'));

?>
<ol>
   <lh> Movies </lh>
    <?php
    foreach($xml->div->div[1]-> div as $div){
            //var_dump($div->table->tbody->tr->td[1]->h4->a);
            echo '<li>'. $div->table->tbody->tr->td[1]->h4->a .'</li>';
    }
    ?>
    
</ol>
<?php
 //choosing the second div that is on the same level 

?>
<ol>
   <lh> Movies </lh>
    <?php
    foreach($xml->div->div[1]-> div as $div){
            //var_dump($div->table->tbody->tr->td[1]->h4->a);
            $movie = $div->table->tbody->tr->td[1]->h4->a;
            echo '<li>'."<a href='http://imdb.com'> $movie $movie[$href] </a>".'</li>';
    }
    ?>
    
</ol>