<?php
include '../../admin/connect.php';
include './code.php';
if (isset($_POST['gender'])) {
    $name = $_POST['first_name'] . " " . $_POST['last_name'];
    $pincode = $_POST['pincode'];
    $event_id = $_POST['event_id'];
    $image = null;
    if (!empty($_FILES['image']['name'])) {
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $ext = explode(".", $image)[1];
        $image = "SELF_" . $_POST['phone'] . ".$ext";
        move_uploaded_file($image_tmp, "certificates/selfies/$image");
        $cetificate_id = "MPBJYM_" . $_POST['phone'];
    }


    $data = array(
        ':name' => $name,
        ':email' => $_POST['email'],
        ':phone' => $_POST['phone'],
        ':gender' => $_POST['gender'],
        ':place' => $_POST['place'],
        ':pincode' => $_POST['pincode'],
        ':birthday' => $_POST['birthday'],
        ':event_id' => $_POST['event_id'],
        ':image' => $image,

    );
    $stmt = $pdo->prepare("INSERT INTO janta (name ,email,phone,gender,place,pincode,birthday,event_id,image) VALUES (:name ,:email,:phone,:gender,:place,:pincode,:birthday,:event_id,:image) ");
    $stmt->execute($data);
    if ($stmt) {
        if ($image == null) {
            echo "<script>alert('Registration Successfull');location.replace('../venues?p=$pincode&e=$event_id')</script>";
        } else {
            create_post($image, $name, $cetificate_id);
        }
    }
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download certificates</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>

<body style="background:#f4f4f4">
    <div class="row" style="height: 40vh;background:white">
        <div class="col-sm-6 m-auto d-flex justify-content-center">
            <a href="./certificates/<?= $cetificate_id . ".png" ?>" class="btn btn-lg rounded-pill btn-primary" download="">Download Certificate Image</a>
            <a href="./certificates/pdfs/MPBJYM_<?= $cetificate_id . ".pdf" ?>" class="btn btn-lg rounded-pill btn-warning" download="">Download Certificate Pdf</a>

        </div>
    </div>
</body>

</html>