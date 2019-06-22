    <?php
    session_start();
    header('location:login.php');
    $con=mysqli_connect("localhost","root","","projo");

    mysqli_select_db($con,'projo');

    $name=$_POST['user'];
    $password=$_POST['password'];

    $s= "SELECT `name`, `password` FROM `usajili` WHERE name='$name'";
    $result=mysqli_query($con,$s);

    $num = mysqli_num_rows($result);

    if ($num==1){
        echo "Username Already Taken";
    }else{
        $reg=" insert into projo(name ,password) values ('$name','$password')";
        mysqli_query($con,$reg);
        echo "Registration Succesful";


    }

    ?>


















































