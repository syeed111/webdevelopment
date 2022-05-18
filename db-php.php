<!DOCTYPE html>
<html>
<head>
<style>
    table{
    font:arial;
    width:100%;
    }
    td,th{
    padding: 8px;
    }
tr:nth-child(even){
background-color: gray;
}

</style>
</head>
<body>

    <form method="post" action="db-php.php">
    <p style="text-align:center;background-color:lightBlue;size=300px;color:green;padding:10px;" >
    Student Information</p>
    <table>

<tr>
    <th>Student ID:</th>
    <td><input type="Number" name="st_id" id="st_id"> </td>

</tr>
<tr>
    <th>Student Name:</th>
    <td><input type="text" name="st_name" id="st_name"> </td>
</tr>
<tr>
    <th>Age:</th>
    <td><input type="NUMBER" name="Age" id="Age"> </td>
</tr>
    <tr>
    <th>Email:</th>
    <td><input type="text" name="Email" id="Email"> </td>
</tr>

    <tr>
    <th>Dept:</th>
    <td> <select name="dept">
                            <option value="CSE">CSE</option>
                            <option value="EEE">EEE</option>
                            <option value="BBA">BBA</option>
                            <option value="ETE">ETE</option>
                        </select>
    </td>
</tr>
<tr>
<th>Gender</th>

   <td> <label><input type="radio" name="gender"  value="female">Female</label>
   <label> <input type="radio" name="gender" value="male">Male</label>
</td>
</tr>


    </table>
       <p style="text-align:center;font-size=20px" >
        <input type="submit" name="submit" id="submit">
        </p>
    </form>



<?php
    $student_id=$_POST['st_id'];
    $student_name=$_POST['st_name'];
                $age=$_POST['Age'];
               $email =$_POST['Email'];
                $dept=$_POST['dept'];
                $gender=$_POST['gender'];
                $connection=mysqli_connect("localhost","root","","st_db");
mysqli_query($connection,"INSERT INTO student(id,name,age,gender,email,dept) values('$student_id','$student_name','$age','$gender','$email','$dept')");
mysqli_close($connection);
?>

</body>

</html>
