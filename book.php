
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $username= $_POST["name"];
    $doctorname= $_POST["doctorname"];
    $department= $_POST["departmentname"];
    $phonenumber= $_POST["phonenumber"];
    $symptom= $_POST["symptoms"];
    $date= $_POST["date"];
    $user= $_POST["user"];
}
if ($username!=$user)
{
    echo 'Patient Name ' .$username .'  Doctors Name ' .$doctorname;
}
?>
