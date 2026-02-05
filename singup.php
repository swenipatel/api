?php
 
 include('usersconnect.php');

 $i1 = $_POST['id'];
 $n1 = $_POST['name'];
 $e1 = $_POST['email'];
 $p1 = $_POST['pass'];

 if($i1=="" && $n1=="" && $e1=="" && $p1=="")
 {
    echo "Please Fill All The Fields";
 }
 else
 {
    $query = "insert into student(name,surname,email,password) values('$i1','$n1','$e1','$p1')";
    mysqli_query($con,$query);
   
 }


?>