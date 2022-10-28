<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
</head>
<body>
    <?php require "components/header.php" ?>
    <div class="container mt-5 ">
        <h3>Contact form</h3>
        <form action="check.php" method="post">
            <input type="email" name="email" placeholder="Enter Email" class="form-control"> <br>
            <textarea name="message" class="form-control" placeholder="Enter your message"></textarea> <br>
            <button type="submit " name="send" class="btn btn-success">Send</button>
        </form>
    </div>
    <?php require "components/footer.php" ?>
</body>
</html>
