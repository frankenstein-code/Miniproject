<?php
//action.php

$connect = mysqli_connect('localhost', 'root', '', 'sp');

$input = filter_input_array(INPUT_POST);

$firstname = mysqli_real_escape_string($connect, $input["firstname"]);
$middlename = mysqli_real_escape_string($connect, $input["middlename"]);
$lastname = mysqli_real_escape_string($connect, $input["lastname"]);
$email = mysqli_real_escape_string($connect, $input["email"]);
$age = mysqli_real_escape_string($connect, $input["age"]);
$address = mysqli_real_escape_string($connect, $input["address"]);
$exp = mysqli_real_escape_string($connect, $input["exp"]);
$phone = mysqli_real_escape_string($connect, $input["phone"]);
$summary = mysqli_real_escape_string($connect, $input["summary"]);

if($input["action"] == 'edit')
{
    $query = "
            UPDATE professionalred 
            SET firstname= '".$firstname."',
            middlename= '".$middlename."',
            lastname = '".$lastname."',
            email= '".$email."',
            age= '".$age."',
            address= '".$address."',
            exp= '".$exp."',
            phone= '".$phone."',
            summary= '".$summary."',
            WHERE id = '".$input["id"]."' 
            ";
    mysqli_query($connect, $query);
}
if($input["action"] === 'delete')
{
    $query = "
            DELETE FROM professionalred
            WHERE id = '".$input["id"]."'
            ";
    mysqli_query($connect, $query);
    
}

echo json_encode($input);



?>

