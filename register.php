<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <p class="text-center text-lg mt-12">Anda sedang berada di Halaman Register</p>
    <form action="handler.php" method="post" class='flex justify-center align-center'>
        
        <div class="flex justify-center flex-col  w-64 mt-10">
            <div class =""><input type="text" class="input input-bordered w-full  mb-5" name="username" placeholder="Masukkan username" required><br></div>
            <div class =""><input type="email" class="input input-bordered w-full  mb-5" name="email" placeholder="Masukkan Email" required><br></div>
            <div class =""><input type="password" class="input input-bordered w-full  " name="password" placeholder="Masukkan Password" required><br></div>
            <button type="submit" name="aksi" class="btn btn-success w-full  mt-5" value="register">Register!</button>
            </div>
        </form><br>
    
        <div class="justify-center align-center flex">
        <a href="index.php"><button class="btn btn-primary flex justify-center align-center mt-8">Back Home</button></a>
        <a href="login.php"><button class="btn btn-info ml-3 flex justify-center align-center mt-8">Login</button></a>
        </div>
    
</body>
</html>