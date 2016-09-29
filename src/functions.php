
<?php
  function createName($parameters){
    //perform task
    echo "String Value\n";
  }

  //Call A function
  createName();

  //Default parameters
  function booksByYear($authorName, $tempYear = 1910){
    echo $authorName;
    echo $tempYear;
  }

  function getAuthor(){
    return "Charles Dickens";
  }

  $authorName = getAuthor();

  booksByYear($authorName);
  //sinice it's set above as default it will still run normaly with perhaps a warning
  //default params need to go at the end and the required need to go first

  //Variable fann_get_cascade_activation_functions
  function getTitle(){
    echo "Thug Life";
  }

  $functionName = "getTitle";

  functionName();

  //Variable scope is the same as JS


  //Global Variables inside a function
  global $authorName; //makes it accesible outside the function
  

 ?>
