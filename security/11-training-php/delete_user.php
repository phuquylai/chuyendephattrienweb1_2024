<?php
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$id = NULL;

if (!empty($_GET['id'])) {
    $_id = $userModel->decryptId($_GET['id']); // Giải mã ID trước khi xóa
    $userModel->deleteUserById($_id); // Xóa người dùng với ID đã giải mã
    header('location: list_users.php');
}

?>