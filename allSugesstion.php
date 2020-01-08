    <!DOCTYPE html>
    <html>
    <head>
    <title>Table with database</title>
     <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   
    <style>
    table {
    border-collapse: collapse;
    width: 64%;
    color:#191a1a;
    margin: auto;
    font-family: monospace;
    font-size: 21px;
    text-align: center;
}

    th {
    background-color: #588c7e;
    color: white;
    }
    tr:nth-child(even) {background-color: #f2f2f2}
    </style>
    </head>
    
    <a href="createSugession.php"><button type="button" class="btn btn-success">createSugession</button></a>
    <br>
    <br>
    <br>
    <body>
    <table>
    <tr>
    <th>id</th>
    <th>Detail</th>
    <th>Date</th>
    <th>sugesstion_type_id</th>

    </tr>

    <?php
         include ('Repository/SuggestionRepo.php');
        $repo=new SuggestionRepo();
    
    
    $result = $repo->getAllsuggestion();
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["details"] . "</td><td>"
    . $row["created_date"]. "</td><td>" . $row["sugesstion_type_id"]. "</td></tr>";
    }
    echo "</table>";
    } 
    ?>
    </table>
    </body>
    </html>