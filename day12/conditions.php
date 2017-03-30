


<?php



/* format example

if(true)
{   
    //this Will run
}

if(false)
{
    //this Will run
}



if(1>0)
{
    //this will run
}

if(1===true)
{
    //this will not run
}

if(true===true)
{
    //this will run
}

*/

function height()

{

$height = 155;
if($height>180)
{   
    return'tall';
}
elseif($height>160)
{
    return 'average';
}
else
{
    return'small';
}
}


$age = 37
$gender = 'male'
$employed = 'false'

if($age>35) {}

if($employed==true){}

if($age<=18) {}

if($age<12) && $gender== 'female') {}

if($age >=18 && !$employed == false) {}

if(($age >= 60 && $employed && $gender == 'female')) {}

if(($gender=='male' && $age>20 || $gender== 'female' && $age>25)) {}










?>

