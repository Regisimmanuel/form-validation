
    
<?php

$name=$email=$website=$comment=$gender="";
$nameErr=$emailErr=$genderErr="";

if($_SERVER["REQUEST_METHOD"]==="POST"){

// $name=$_POST["username"];
// $email=$_POST["email"];

// $gender=$_POST["gender"];



//name
if(empty($_POST["username"])){

    $nameErr="name is required";
}else{
    $name=$_POST["username"];


    if(!preg_match("/^[a-zA-Z]/",$name)){
        $nameErr="username contain only letters";
    }
        
}
    


//email
if(empty($_POST["email"])){

    $emailErr="email is required";
}else{
    $email=$_POST["email"];
}
//gender

if(empty($_POST["gender"])){

    $genderErr="gender is required";
}else{
    $gender=$_POST["gender"];
}

$website=$_POST["website"];
$comment=$_POST["comment"];


}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
<style>

span{

    color:red;
}
</style>

</head>
<body>
    


<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">

<fieldset>
    <legend>register here</legend>
    <br>

<label for="username">name</label>
<input type="text" name="username" id="username">
<span>* <?php echo $nameErr ;?></span>
<br>
<br>
<label for="email">email</label>
<input type="text" name="email" id="email">
<span>* <?php echo $emailErr ;?></span>
<br>
<br>
<label for="website">website</label>
<input type="text" name="website" id="website">
<br>
<br>
comment
<br>
<textarea name="comment" id="comment" cols="30" rows="10"></textarea>
<br>
<br>
gender :
<input type="radio" name="gender" value="male">male
<input type="radio" name="gender" value="female">female
<input type="radio" name="gender" value="others">others
<span>* <?php echo $genderErr ;?></span>

<br>
<br>




<button>submit</button>
</fieldset>
</form>

<div>

<?php

echo $name;
echo "<br>";

echo $email;
echo "<br>";

echo $website;
echo "<br>";

echo $comment;
echo "<br>";

echo $gender;
echo "<br>";




?>
</div>

</body>
</html>


