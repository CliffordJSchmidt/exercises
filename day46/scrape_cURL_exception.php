<?php
//------------ web scraping cURL  -- does the same thing as above
$url = 'http://www.imdb.com/movies-in-theaters/';
$ch = curl_init();
curl_setopt_array($ch,[
    CURLOPT_URL => $url,
    CURLOPT_HEADER=>false,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERAGENT =>'User-Agent:Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87', // see https://user-agents.me/
    CURLOPT_HTTPHEADER => [
        "Accept :text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8",
        //"Accept-Encoding : gzip, deflate, sdch, br", // means it can read compressed pages sent by the server
        "Accept-Language : en-US,en;q=0.8"
        ]
        ]);
$page=curl_exec($ch);

//echo $page;  displays page that was scraped

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


try{
        libxml_use_internal_errors(true);
        $doc = new DOMDocument();  // xml parser 
        $doc->loadHTML($page);
        $xml = simplexml_import_dom($doc->getElementById('main'));

        echo '<ol>';
        echo '<lh>'. 'Movies' .'</lh>';
    
            foreach($xml->div->div[1]-> div as $div){
                    //var_dump($div->table->tbody->tr->td[1]->h4->a);
                    if(strpos($div['class'], 'list_item')=== false){ // always use === when checking output of strpos
                        throw new Exception('DIV does not have the list_item class');
                    } 
                    if((string)$div->table->tbody->tr->td[1]->h4['itemprop'] !== 'name'){   //checking for errors with transactions Exceptions  (see day 45 slides)
                        throw new Exception('H4 has unkown intemprop'); 
                    }
                    $image = $div->table->tbody->tr->td[0]->div->a->div->img; 
                    $movie = $div->table->tbody->tr->td[1]->h4->a;    
                    if((string)$movie['itemprop'] !== 'url'){  
                        throw new Exception('A has unkown intemprop');

            }
            //preg_match is a function that can be used to match regular expressions
                        //value from preg_match is an array assigned to $matches.. use var_dump to see values 
                if(!preg_match('#(.+) \(([0-9]{4})\)$#', trim($movie), $matches)){   //trim function removes any extra white space before and after the string
                    throw new Exception('Movie name does not match');
                } 
                    echo '<li><a href="http://www.imdb.com/' . $movie['href']. '">' . $matches[1] . '</a></br>year: ' . $matches[2] . '</br><img src="' . $image['src']. '"></br></li>'; 
            }

        echo '</ol>';
          
            }catch (Exception $e){
                echo $e->getMessage();
            }

//regex101.com  for testing and seeing REGULAR EXPRESSIONS  
// regexpal.com
//phpliveregex.com
