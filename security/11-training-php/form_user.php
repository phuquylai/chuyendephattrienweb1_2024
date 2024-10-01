<?php
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; // Người dùng mặc định
$_id = NULL;  // ID người dùng mặc định

if (!empty($_GET['id'])) {
    $_id = $userModel->decryptId($_GET['id']);
    $user = $userModel->findUserById($_id);
}

if (!empty($_POST['submit'])) {
    $errors = [];

    // Kiểm tra name
    if (empty($_POST['name'])) {
        $errors[] = " Bắt buộc nhập";
    } elseif (!preg_match('/^[A-Za-z0-9]{5,15}$/', $_POST['name'])) {
        $errors[] = "Chiều dài từ 5 đến 15 ký tự";
    }

    // Kiểm tra password
    if (empty($_POST['password'])) {
        $errors[] = "Bắt buộc nhập";
    } elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[~!@#$%^&*()])[A-Za-z\d~!@#$%^&*()]{5,10}$/', $_POST['password'])) {
        $errors[] = "Phải bao gồm: chữ thường (a->z), chữ HOA (A->Z), số (0-9) và ký tự đặc biệt: ~!@#$%^&*()";
        $errors[] = "Chiều dài từ 5 đến 10 ký tự";

    }

    // Nếu không có lỗi, thực hiện cập nhật hoặc thêm mới người dùng
    if (empty($errors)) {
        if (!empty($_id)) {
            $userModel->updateUser($_POST);
        } else {
            $userModel->insertUser($_POST);
        }
        header('location: list_users.php');
    } else {
        foreach ($errors as $error) {
            echo "<div class='alert alert-danger'>$error</div>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
    <script>
    function validateForm() {
        const name = document.forms["userForm"]["name"].value;
        const password = document.forms["userForm"]["password"].value;

        const nameRegex = /^[A-Za-z0-9]{5,15}$/;
        const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[~!@#$%^&*()])[A-Za-z\d~!@#$%^&*()]{5,10}$/;

        if (name === "") {
            alert("Bắt buộc nhập");
            return false;
        }
        if (!nameRegex.test(name)) {
            alert("Chiều dài từ 5 đến 15 ký tự");
            return false;
        }

        if (password === "") {
            alert("Bắt buộc nhập");
            return false;
        }
        if (!passwordRegex.test(password)) {
            alert(" Phải bao gồm: chữ thường (a->z), chữ HOA (A->Z), số (0-9) và ký tự đặc biệt: ~!@#$%^&*()");
            return false;
        }

        return true;
    }
    </script>
</head>
<body>
    <?php include 'views/header.php'?>
    <div class="container">
        <?php if ($user || !isset($_id)) { ?>
            <div class="alert alert-warning" role="alert">
                User form
            </div>
            <form name="userForm" method="POST" onsubmit="return validateForm()">
                <input type="hidden" name="id" value="<?php echo $_id ?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" name="name" placeholder="Name" value='<?php if (!empty($user[0]['name'])) echo $user[0]['name'] ?>'>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php } else { ?>
            <div class="alert alert-success" role="alert">
                User not found!
            </div>
        <?php } ?>
    </div>
</body>
</html>
