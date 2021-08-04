<!DOCTYPE html>
<html>
<head>
	<title>History</title>

</head>
<body>

  <h3 style="color: red;">Page 3 [History]</h3>
	          <h3 style="color: red;">History</h3>
	
	<a href="home.php">1.Home</a>
	<a href="conversion_Rate.php">2.Coversion Rate</a>
	<a href="History.php">3.History</a>
  <br><br>
  <fieldset>
	<h3 style="color: red;">Convert:</h3>
	
	<?php   
                          $data = file_get_contents("data.json");  

                          $data = json_decode($data, true);  
                
                          foreach($data as $row)  
                          {  
                               echo '<tr>
                               <td>'.$row["operator"].'</td>
                               <td>'.$row["number"].'</td>
                               <td>'.$row["result"].'</td>
                               </tr>';
                               echo "<br>";  
                          }

                          ?>  

</fieldset>
</body>
</html>