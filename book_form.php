<?php

    $connection = mysqli_connect('localhost','root',);

    if($connection){
        echo "Connection Successful";
    }else{
        echo "Connection Unsuccessful";
    }
    mysqli_select_db($connection, 'book_database');


    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    $request = " insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) values('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')"; 

    echo "$request";

    mysqli_query($connection, $request);

    header('location:book2.html')

?>