<?php

class SuggestionRepo{
    
    private $con = null;
    function __construct(){
        $this->con = mysqli_connect("localhost","root","","suggestion_box") or die(mysql_error());
    }
    
   function getAll(){
         
          $sql = "select * from sugesstion_type";
            return mysqli_query($this->con,$sql);	
   }
   
  
    
}


