<?php

class Test{


//$homepage = file_get_contents('http://www.maneza.orgfree.com/');
//echo $homepage;

// Create a stream
/*$opts = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n"
  )
);

$context = stream_context_create($opts);

// Open the file using the HTTP headers set above
$file = file_get_contents('http://www.maneza.orgfree.com/', false, $context);
*/

/*
$url = "http://maneza.orgfree.com/media/CRUNK1.mp3" ; // URL of the file you want to download

$filename = basename($url); // Getting the base name of the file.

file_put_contents($filename,file_get_contents($url));
*/


//The name of the person.
  private $name;

  //The person's date of birth.
  private $dateOfBirth;

  private $results;

public function __construct (
  $name,
  $dateOfBirth,
  $results
  )
  {
    $this->name = $name;
    $this->dateOfBirth = $dateOfBirth;
    $this->results = $results;
  }

  public function setResult($results){
    $this->results = $results;
  }

  public function getResult(){
    return $this->results;
  }

  //Set the person's name.
  public function setName($name){
    if(!is_string($name)){
      throw new Exception('$name must be a string!');
  }
  $this->name = $name;
  }

  //Set the person's date of birth.
  public function setDateOfBirth($dateOfBirth){
      $this->dateOfBirth = $dateOfBirth;
  }

  //Get the person's name.
  public function getName(){
      return $this->name;
  }

  //Get the person's date of birth.
  public function getDateOfBirth(){
      return $this->dateOfBirth;
  }



function checkTheFile($filename)
{
  $filename = 'test.txt';
  $results = false;
  if(is_readable($filename) && is_file($filename))
  {
    echo "The file you looking for is readable \n";
  }else{
    echo "Not readable \n";
  }
  $results = true;
}

}





?>
