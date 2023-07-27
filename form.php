<?php
$errors=[];
$data=[];
if(isset($_POST['register'])){
    if(empty($_POST['name'])){
        $errors['nameErr']="Your name is Required";
    }
    else{
        $data['name']=$_POST['name'];
    }
    if(empty($_POST['email'])){
        $errors['emailErr']="Your Email is Required";
    }
    else{
        $data['email']=$_POST['email'];
    }
    if(empty($_POST['password'])){
        $errors['passwordErr']="Your Password is Required";
    }
    else{
        $data['password']=$_POST['password'];
    }
    if(empty($_POST['gender'])){
        $errors['genderErr']="Your Gender is Required";
    }
    else{
        $data['gender']=$_POST['gender'];
    }
    if(empty($_POST['items'])){
        $errors['itemsErr']="Your Items is Required";
    }
    else{
        $data['items']=$_POST['items'];
    }
    if(empty($_POST['address'])){
        $errors['addressErr']="Your Address is Required";
    }
    else{
        $data['address']=$_POST['address'];
    }
}
print_r ($errors);
echo "<br>";
print_r ($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background:linear-gradient(rgba(0, 0, 0, 0.1),rgb(0,0,0,0.5)),url("https://cdn.pixabay.com/photo/2023/06/09/18/18/deer-8052359_1280.jpg");
            color:white;
            background-repeat:no-repeat;
            background-size:cover;
        }
        .all{
            max-width: 500px;
            margin: auto;
            border: 1px solid black;
            text-align: center;
            border-radius: 20px;
            padding: 30px;
            background-color:rgb(0,0,0,0.8);
        }
        input{
            margin: 20px;
            padding: 5px 20px;
            font-size: 25px;
            border-top:none;
            border-left:none;
            border-right:none;
            background-color:rgb(0,0,0,0.7);
            color:white;
        }
        textarea{
            font-size: 15px;
            border-top:none;
            border-left:none;
            border-right:none;
            color:white;

            background-color:rgb(0,0,0,0.7)
        }
        button{
            width: 70%;
            padding: 10px 0px;
            margin: 30px;
        }
        .dash{
            text-align: center;
        }
        .dash1{
            border-bottom: 2px solid white;
            margin-bottom: 20px;
            width: fit-content;
            margin: auto;
        }
        table{
            margin: 50px 0px;
            width: 100%;
            text-align: center;
            border: 1px solid white;
            border-collapse: collapse;
        }
        th{
            border: 1px solid white;
        }
        td{
            border: 1px solid white;
        }
    </style>
</head>
<body>
    
<section class="all">
<form action="form.php" method="post">
        <div>
            <h1>Register</h1>
        </div>
        <div>
            <input type="text" class="" id="name" name="name" value="<?php echo array_key_exists('name',$data)? $data['name']: ' '?>">
        <p style="color:red">
        <?php
        echo array_key_exists('nameErr',$errors)? $errors['nameErr']: " "
        ?>
        </p>
        </div>
        <div>
            <input type="email" class="" id="email" name="email" value="<?php echo array_key_exists('email',$data)? $data['email']: '' ?>">
            <p style="color:red">
        <?php
               echo array_key_exists('emailErr',$errors)? $errors['emailErr']: " "
        ?>
        </p>
        </div>
        <div>
            <input type="password" class="" id="password" name="password" value="<?php echo array_key_exists('password',$data)? $data['password']: '' ?>">
            <p style="color:red">
        <?php
            echo array_key_exists('passwordErr',$errors)? $errors['passwordErr']: " "
        ?>
        </p>
        </div>
        <div>
            <h5>Pick Your Gender:</h5>
            <input type="radio" name="gender" value="Male" id="gender_male"><label for="gender_male">Male</label>
            <input type="radio" name="gender" value="Female" id="gender_female"><label for="gender_female">Female</label>
            <input type="radio" name="gender" value="Other" id="gender_other"><label for="gender_other">Other</label>
            <p style="color:red">
        <?php
       echo array_key_exists('genderErr',$errors)? $errors['genderErr']: " "
        ?>
        </p>
        </div>
        <div>
            <h5>Pick The Items In Your House:</h5>
            <input type="checkbox" name="items[]" value="Chair" id="item_chair"><label for="item_chair">Chair</label>
            <input type="checkbox" name="items[]" value="Table" id="item_table"><label for="item_table">Table</label>
            <input type="checkbox" name="items[]" value="Tv" id="item_tv"><label for="item_tv">Tv</label>
            <p style="color:red">
        <?php
         echo array_key_exists('itemsErr',$errors)? $errors['itemsErr']: " "
        ?>
        </p>
        </div>
        <div>
            <h5>Address:</h5>
            <div>
                <textarea name="address" id="address" cols="50" rows="10" value="<?php echo array_key_exists('address',$data)? $data['address']: '' ?>" ></textarea>
                <p style="color:red">
        <?php
       echo array_key_exists('addressErr',$errors)? $errors['addressErr']: " "
        ?>
        </p>
            </div>
        </div>
        <button name="register">Register</button>
    </form>
</section>
</body>
</html>

