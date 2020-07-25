<?php
//	print_r($_POST);
$error="";
    if($_POST){	
	if(!$_POST["name"]){
		$error.="Enter your name <br>";
		}
	if(!$_POST["ID"]){
		$error.="enter ID <br>";
		}
	if(!$_POST["query"]){
		$error.="Please submit your query <br>";
		}
	if($error!=""){
		file_put_contents('.php','<div id="error">$error</div>');
		}	
	else{
			$emailto="atishayj84@gmail.com";
			$subject="New Query/Grievance";
			$body="Name: ".$_POST["name"]."\r\n";
			$body.="ID: ".$_POST["ID"]."\r\n";
			$body.="Category of query: ".$_POST["categoryquery"]."\r\n";
			$body.="Query: \r\n";
			$body.=$_POST["query"];
		//	.$_POST["ID"]."<br>".$_POST["categoryquery"]."<br>".$_POST["query"];
			$header="From: vandanaj159@gmail.com ";
			//$header .= "MIME-Version: 1.0\r\n";
            //$header .= "Content-Type: text/html; charset=UTF-8\r\n";
            //$body='<p>$_POST["name"]<br>$_POST["ID"]<br>$_POST["categoryquery"]<br>$_POST["query"]</p>';
			mail($emailto,$subject,$body,$header);	
	}
    }
	?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
    <title>Query Portal</title>
  </head>
  <body>
  
	<div class="container">
		<div id=error></div>
	
	<h1>Query/Grievance Portal</h1>
    <form method="post">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name">
    
  </div>
  <div class="form-group">
    <label for="ID">Your ID</label>
    <input type="text" class="form-control" id="ID" name="ID">
  </div>
 <div class="form-group">
    <label for="categoryquery">Category of Question</label>
    <select class="form-control" id="categoryquery" name="categoryquery">
      <option>A</option>
      <option>B</option>
      <option>C</option>
      <option>D</option>
     
    </select>
  </div>
	<div class="form-group">
    <label for="query">Query</label>
   <textarea class="form-control" aria-label="With textarea" id="query" rows="3" name="query"></textarea>
    
  </div>  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script type="text/javascript">
	 $("form").submit(function(e){
        e.preventDefault();
		var error="";
				if($("#name").val()==""){
					error+="Enter your name<br>";
					}
					
				if($("#ID").val()==""){
					error+="Enter ID<br>";
					}
					
				if($("#query").val()==""){
					error+="Please submit your query";
					}
					
				if(error!=""){
					$("#error").html('<div class="alert alert-danger" id="error" role="alert">'+ error +'</div>');
					}
					
				else{
					$("form").unbind('submit').submit();
					$("#error").html('<div class="alert alert-success" role="alert">"Query submitted successfully"</div>');
					}	
    });
				
	
	</script>
  
  </body>
  </html>