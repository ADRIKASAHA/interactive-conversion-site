<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<style>error{color: red;}</style>
</head>
<body>
	<?php
	$result=$operator=$num=$error="";
	$operatorerr=$valueerr="";
	if (isset($_POST['submit'])) {
		$num=$_POST['number'];
		$operator=$_POST['operator'];
		if($operator == "Select one"){
			$result = '0' ;}
		 if($operator == "feet to inch"){
			$result = $num*12 ;
			//echo "the convention value is inch".$result;
		}
		if($operator == "inch to feet"){
			$result=$num/12;
			//echo "the convention value is feet".$result;
		}
		if($operator == "feet to Millimeter"){
			$result=$num*305;
			//echo "the convention value is feet".$result;
		}
		if($operator == "Millimeter to feet"){
			$result=$num/305;
			//echo "the convention value is feet".$result;
		}
		if($operator == "Meter to feet"){
			$result=$num/3.281;
			//echo "the convention value is feet".$result;
		}
		if($operator == " feet to Meter"){
			$result=$num*3.281;
			//echo "the convention value is feet".$result;
		}
		  if ($_SERVER["REQUEST_METHOD"] == "POST") {
		  	 if (($_POST['operator'])==""){
          $operatorerr=" requied";
         } else {
         $operatorerr="";
        $operator=$_POST['operator'];
  }
		  }


		
                 if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'operator'               =>     $operator,  
                     'number'          =>     $num,  
                     'result'     =>     $result  
                     
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Success fully</p>";  
                }  
           }  
            else  
           {  
            $error = 'JSON File not exits';  
       } 
       
       
	}
    session_start();
   // Set session variables
   $_SESSION["result"] =$result;
$_SESSION["operator"] = $operator;
$_SESSION["number"] =$num;
  echo "Session variables are set.";

       
      ?>
      <h3 style="color: red;">Page 1 [Home]</h3>
	<h3 style="color: red;">Conversion Site</h3>
	
	<a href="home.php">1.Home</a>
	<a href="conversion_Rate.php">2.Coversion Rate</a>
	<a href="History.php">3.History</a>
	<h3 style="color: red;">Convert:</h3>
	<br>
	
	<form action="" method="post">
		<label for="operator" requred >    </label>
		<select id="operator" name="operator" required>
			<option name='operator'>Select one</option>
			<option name='operator'>feet to inch</option>
			<option name='operator'>inch to feet</option>
			<option name='operator'>feet to Millimeter</option>
			<option name='operator'>Millimeter to feet</option>
			<option name='operator'>feet to Meter</option>
			<option name='operator'>Meter to feet</option>
			
		</select><span class="error">*<?php echo $operatorerr ?></span>
		<br><br>
		<label for="value" >Value :</label>
		<input type="number" name="number" id="number"placeholder="value"
		required><span class="error">*</span>
		<br><br>
		<button type="submit"name="submit" value="Convert">SUBMIT</button>
		<br><br><br>
		    <label for="result" >Result :</label>
			<input type="text" id="result" name="result"value ="<?php echo $result ?>" >
	</form>
	
	
<?php echo $error ?>


</body>
</html>