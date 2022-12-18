<?php

$name = $_POST['name'];
$package = $_POST['package'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$description = $_POST['description'];

$link = 'https://wa.me/62895395168312?text=Website Order Form%0APackage%20%3A%20'.$package.'%0AFullname%20%3A%20'.$name.'%0APhone%20%3A%20'.$phone.'%0AEmail%20%3A%20'.$email.'%0ADescription%20%3A%20'.$description.'';

return header('Location: '.$link);

?>