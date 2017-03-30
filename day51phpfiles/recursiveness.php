<?php 
/*
$files = scandir('system');
var_dump($files);

    foreach($files as $file){
        if($file == '.' | $file == '..') continue; 

            if(is_dir($file));
            {
                $files_in_directory = scandir('system/'.$file);
                var_dump($files_in_directory);
            }

    }



$core_files = scandir('system/core');
var_dump($core_files);
*/


//-- instead of writing the above code and continuing to write the same code within it over and over to get through entire directory,,, this can be placed in a funciton such as the following.  this is recursiveness  
function browse_directory($directory)
{
    $files = scandir($directory);
    foreach($files as $file)
    {
        if($file == '.' || $file == '..') continue;
        if(is_dir($directory. '/' . $file))
        {
            echo '<strong>' .$directory . '/' . $file . '</strong>';

            // using recursiveness to go deeper
            browse_directory($directory.'/'.$file);
        }
        else
        {
            // do something with the file
            echo $directory . '/' . $file . '</br />';
        }
    }
}

browse_directory(__DIR__);
 // this can be very intensive on the computer because of the loop if used on a large project with many directories 