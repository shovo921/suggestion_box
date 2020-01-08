<?php

class SuggestionRepo{
    
    private $con = null;
    function __construct(){
        $this->con = mysqli_connect("localhost","root","","suggestion_box") or die(mysql_error());
    }
    function insertAll($details,$Date,$Sugesstion){
         
            $sql= "INSERT INTO `suggestion` ( `details`, `created_date`, `sugesstion_type_id`) VALUES ( '$details', '$Date',' $Sugesstion')";
            return mysqli_query($this->con,$sql);	
   }
   function getAll(){
         
          $sql = "select * from sugesstion_type";
            return mysqli_query($this->con,$sql);	
   }
   function getAllsuggestion(){
         
          $sql = "SELECT `id`, `details`, `created_date`, `sugesstion_type_id` FROM `suggestion`";
            return mysqli_query($this->con,$sql);	
   }
   
  
    
}


