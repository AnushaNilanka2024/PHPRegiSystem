<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Registration Logging System</title>
</head>
<body>
<h2> Register </h2>
<form action="Action/RegAction.php" method="POST">
    <label> User Name : </label>
    <input type="text" name="UserName"/>
    <br /> <br />

    <label> User Email : </label>
    <input type="email" name="UserEmail"/>
    <br /> <br />

    <label> User Password : </label>
    <input type="password" name="Userpw"/>
    <br /> <br />
    <button type="submit"> Register </button>

</form>
</body>
</html>