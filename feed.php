 <!DOCTYPE html>
 <html lang="en" dir="ltr">
 	<head>
 		<meta charset="utf-8">
 		<title></title>
 	</head>
 	<body>
       <center><h1>feed</h1></center>
 	</body>
 </html>
 <?php
 	  session_start();
    include 'header.php';
     	if(isset($_POST) & !empty($_POST)){
  		  $description = mysql_real_escape_string($_POST['postdescription']);
 		   $post = mysql_real_escape_string( $_POST['post']);
       $currentcity=mysql_real_escape_string($_POST['currentcity']);
       $hometown=mysql_real_escape_string($_POST['hometown']);
 		if(isset($_FILES) & !empty($_FILES)){
 			$name = $_FILES['postimage']['name'];
 			$size = $_FILES['postimage']['size'];
 			$type = $_FILES['postimage']['type'];
 			$tmp_name = $_FILES['postimage']['tmp_name'];
 			$max_size = 10000000;//bytes
 			$extension = substr($name, strpos($name, '.') + 1);
 			if(isset($name) && !empty($name)){
 				if(($extension == "jpg" || $extension == "jpeg") &&
 				 $type == "image/jpeg" && $size<=$max_size){
 					$location = "upload";
 					if(move_uploaded_file($tmp_name, $location.$name)){

 						$res = mysql_query( "INSERT INTO feed ( description,
              post, thumb, currentcity, hometown)
 						VALUES ( '$description', '$post', '$location$name','$currentcity','$hometown')");
 						if($res){

 							echo 'post added Successfully1';
 						}else{
 							$fmsg = "Failed to Create Post1";
 						}
 					}else{
 						$fmsg = "Failed to Upload File";
 					}
 				}else{
 					$fmsg = "Only JPG files are allowed and should be less that 1MB";
 				}
 			}else{
 				$fmsg = "Please Select a File";
 			}
 		}
 	}
 ?>
 			<form method="post" enctype="multipart/form-data">
 			    <label for="postdescription">Post Description</label>
 			    <textarea  name="postdescription"
 			    rows="3"></textarea>
 			    <select  name="currentcity">
 				  <option value="SELECT current city">SELECT current city</option>
           <option value="kochi">kochi</option>
           <option value="bilaspur">bilaspur</option>
           <option value="patna">patna</option>
 				</select>
        <select  name="hometown">
        <option  name="hometown" value="SELECT hometown">SELECT hometown</option>
         <option   name="hometown" value="kochi">kochi</option>
         <option    name="hometown" value="bilaspur">bilaspur</option>
         <option  name="hometown" value="patna">patna</option>
      </select>

 			    <label for="post">post</label>
 			    <input type="text"  name="post"  placeholder="post">
 			    <label for="postimage"> Image post</label>
 			    <input type="file" name="postimage" >
 			    <p >Only jpg/png are allowed.</p>
 			  <button type="submit">Submit</button>
 			</form>
