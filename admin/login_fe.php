<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin login</title>
    <link rel="stylesheet" href="../shared/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="gradient3">
    <h1 class="text-light text-center p-2 bg-warning gradient2">G-TREE</h1>
    <div class='d-flex justify-content-center vh-100 align-items-center'>
    <div class="p-1 rounded gradient2 rounded">
        <form action="login.php" method="POST" class="w-40 p-5 gradient rounded ">
            <h3 class='text-center'>LOGIN HERE</h3>
            <input type="text" placeholder="User-Name" name="user-name" required class='form-control mb-3'>
            <input type="password" placeholder="Password" name="password" required class='form-control mb-3'>
            <input type="submit" value="Login" class='form-control btn btn-primary'>
        </form>
    </div>
    </div>
</body>
</html>