<?php
include "Repository/SuggestionRepo.php";

 $details=$_POST["details"];
 $Sugesstion=$_POST["sugesstion_type"];
 $Date= date("m-d-y");
   $submitRepo = new SuggestionRepo();
   $submitRepo->insertAll($details,$Date,$Sugesstion);
			
?>