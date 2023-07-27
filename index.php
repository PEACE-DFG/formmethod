
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{
            background:linear-gradient(rgba(0, 0, 0, 0.1),rgb(0,0,0,0.5)),url("https://cdn.pixabay.com/photo/2023/06/10/13/11/water-8053999_1280.png");
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
<?php
    $nameErr="";
    $emailErr="";
    $passwordErr="";
    $genderErr="";
    $addressErr="";
    $itemsErr="";
    if(empty($_POST['name'])){
        $nameErr="Your Name Is Required";
    }else{
        $name = $_POST['name'];
    }
    if(empty($_POST['email'])){
        $emailErr="Your Email Is Required";
    }else{
        $email = $_POST['email'];
    
    }
    if(empty($_POST['password'])){
        $passwordErr="Your Password Is Required";
    }else{
        $password = $_POST['password'];
    }
    if(empty($_POST['gender'])){
        $genderErr="Your Gender Is Required";
    }else{
        $genderType = $_POST['gender'];
    }
    if(empty($_POST['address'])){
        $addressErr="Your Address Is Required";
    }else{
        $address = $_POST['address'];
    }
    if(!array_key_exists('items',$_POST)){
    $itemsErr= "you must select an item";
    }else{

    }

?>
<section class="all">
    <form action="index.php" method="post">
        <div>
            <h1>Register</h1>
        </div>
        <div>
            <input type="text" class="" id="name" name="name" placeholder="Name">
        <p style="color:red">
        <?php
        echo $nameErr;
        ?>
        </p>
        </div>
        <div>
            <input type="email" class="" id="email" name="email" placeholder="Email">
            <p style="color:red">
        <?php
        echo $emailErr;
        ?>
        </p>
        </div>
        <div>
            <input type="password" class="" id="password" name="password" placeholder="Password">
            <p style="color:red">
        <?php
        echo $passwordErr;
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
        echo $genderErr;
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
        echo $itemsErr;
        ?>
        </p>
        </div>
        <div>
            <h5>Address:</h5>
            <div>
                <textarea name="address" id="address" cols="50" rows="10" placeholder="Address"></textarea>
                <p style="color:red">
        <?php
        echo $addressErr;
        ?>
        </p>
            </div>
        </div>
        <button name="register">Register</button>
    </form>
</section>

<section class="dash">
    <div class='dash1'>
        <h1>Dashboard</h1>
    </div>
    <!-- Table Section -->
    <section>
    <?php
$genderType = ""; 

if(isset($_POST['register'])){
   $name=$_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];

  

    if(isset($_POST['gender'])){
        $genderType = $_POST['gender'];
    }

    if(isset($_POST['items'])){
        $itemsType = $_POST['items'];
    } else {
        $itemsType = array(); 
    }

    echo "
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Items</th>
            <th>Gender</th>
            <th>Address</th>
        </tr>
        <tr>
            <td>$name</td>
            <td>$email</td>
            <td>$password</td>
            <td>";
    
    foreach($itemsType as $key => $value){
        echo "$value".",";
    }
    
    echo "</td>
            <td>$genderType</td>
            <td>$address</td>
        </tr>
    </table>";
}
?>

    </section>
</section>
</body>
</html>
