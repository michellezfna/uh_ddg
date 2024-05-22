<?php
    session_start();
    if (!$_SESSION['data']) {
        header('Location: login.php');
        exit();
    }
    $data = $_SESSION['data'];
    $username = $data['username'];
    $email = $data['email'];
    $password = $data['password'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <p class="text-center text-lg mt-14 mb-8">Anda sedang berada di Halaman Dashboard</p>

    <p class="text-2xl text-center">Nama Pengguna: <?php echo $username ?></p>

    <p class="text-2xl text-center">Email: <?php echo $email ?></p>
    
    <p class="text-2xl text-center">Password: <?php echo $password ?></p>

    <form action="handler.php" method="post">
    <button name="aksi" value="logout" class="btn btn-info flex justify-center flex-col max-w-lg mx-auto mt-4">Logout</button></a>

    </form>
</body>
</html>