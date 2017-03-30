<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>

    #wrapper{
        height: 80%;
        width: 80%;
        background-color:brown; 
        
        border: 2px solid red;
    }


    #box{
        border: 1px solid green;
        padding: 1em;
        width: 200px;
        background-color: yellow;
        transform: perspective(500px) translateZ(100px);
        
        }


    #box
    {
        transform: translate(200px, 200px);
    }


    #box2
    {
        transform: translate(100px, 100px);
    }

     #box2
     {
        border: 1px solid blue;
        padding: 1em;
        width: 200px;
        background-color: grey;
        opacity: .5;
       
    }



    </style>


</head>
<body>
    

    <div id="wraper">
        <div id="box">

            Fuck you and your damn box. (this is shit content)

        </div>

        <div id="box2">
            Who doesn't like to be deep inside a box?
        </div>
    </div>

</body>
</html>
