<?php


include 'config.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_GET['page'])) {
    if ($_GET['page'] === 'list') {
        $page = "list";
    }

    if ($_GET['page'] === 'handle-job') {
        $page = "handle-job";
    }

    if ($_GET['page'] === "profile") {
        $page = "profile";
    }

    if ($_GET['page'] === "change-password") {
        $page = "change-password";
    }
} else {
    $page = "list";
}

if (isset($_GET['user_id'])) {
    $page = "myjob";
}

if (isset($_POST["password"])) {
    $password = $_POST["password"];
    $user_id = $_SESSION['userId'];
    $sql = "Update users set password = '$password' where id = $user_id";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Wow! Update password successfully.')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}



if (isset($_GET["deleteId"])) {
    $deleteId = $_GET["deleteId"];
    $sql = "Delete from jobs where id = $deleteId";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Wow! Delete job successfully.')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

if (isset($_GET["assign_id"])) {
    $assign_id = $_GET["assign_id"];
    $userId = $_SESSION['userId'];
    $sql = "Select * from job_assign where user_id = $userId and job_id = $assign_id";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        echo "<script>alert('Ops! You already get this job.')</script>";
    } else {
        $sql = "Insert into job_assign(user_id, job_id) values($userId, $assign_id)";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Wow! Get job successfully.')</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/main.css" type="text/css">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="job-content">
                    <h1>Hello</h1>
                    <a href="logout.php">
                        <div class="Item-menu">Đăng xuất</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>