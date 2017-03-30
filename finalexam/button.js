  var button = $('#like-this');
  // the full version

  button.on("click", function(event){
      $.ajax({
          "url" : "/api/like.php",
          "method" : "post",
          "data" :{"id" : 1,}
        })
  });


//Events#1 

$("#clickable").click(function(){
    console.log('clicked')
});


//Events#2
$("#clickable").mouseenter(function(){
    console.log("over");
}).mouseleave(function(){
    console.log("out");
});