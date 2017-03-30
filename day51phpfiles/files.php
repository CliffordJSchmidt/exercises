<?php 



$product_1_folder= __DIR__ . '/media/product/1';
var_dump($product_1_folder);


$contents = scandir($product_1_folder);

var_dump($contents);
// make sure to skip the first two returns as the . and the .. make up the first two returned in the array, use only for smaller files. 

//----------------------------------------------------


// for larger folder this is a better approach 

//open a folder for reading 
$dir_handle = opendir($product_1_folder);
var_dump($dir_handle);

// go through files - stores files names for use in ram during loop only 
while($file = readdir($dir_handle)){

var_dump($file);

};  


//close the reading of the folder 
closedir($dir_handle); 


//------------------------------------------------
//--- used to create a new directory (folder)
$folder_to_create = $product_1_folder . '/subfolder';
var_dump($foler_to_create);

mkdir($folder_to_create);

// is good to make sure the rights are set also 
mkdir($folder_to_create, 0777); // everone has all writes r,w,delete
mkdir($folder_to_create, 0755); //  user and ftp user has rights 

mkdir($folder_to_create, 0755, true); // can be used to specify a longer path of subfolders and all the folders will be created 

//example 
$folder_to_create = $product_1_folder . '/subfolder/a/long/path/of/folder/to/my/folder'; 


//rmdir($folder_to_create); //deletes the last folder 
//is_dir($product_1_folder);  //check if the dir exists 



var_dump($file_exists(__DIR__ . 'media/product/1-1.jpg'));
// will return true if it exists, false if it does not 


//read contents of file at once... puts the entire contents of a file into a variable.. if larger do it piece by piece 
$contents_of_this_file = file_get_contents(__FILE__);
var_dump($contents_of_this_file);


// for larger files 
$file_handle = fopen(__FILE__);
// open larger file for reading 
while($line = fgets(__FILE__, 'r')){ // r is for reading, a mode of fopen... can see a list on php.net documentation, tells how to open 
 var_dump($line);

}
// close after 
fclose($file_handle);


//----------------------------------------------
// fwrite 
$new_file = 'my_new_file.txt';
$fh = fopen($new_file, 'w');

// write a line to file folwed by newline 
fwrite($fh, 'Hello, world!' . "\r\n");  // \r\n ... caractreturn? ,new line 
fclose($fh); 

//-------------------------
// displays all lines in a file in an array
$lines_in_file = file(__FILE__);
var_dump($lines_in_file);

// create file and put txt in it 
// used for cache function, store data in it then use file get contents to use the data again 
file_put_contents('my_new_file.txt', "Hello world, again!\n" );

//unlink()    --- unlines the file.. meaning it will delete it 



//------------

