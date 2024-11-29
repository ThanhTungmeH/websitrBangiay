<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/dacs2/public/css/login.css">
    <title>Đăng nhập</title>
</head>

<body>

    <div class="container1 ">

        <img class="img1" src="/dacs2/public/img/Shoesshop.png ">
        <?php if (isset($data['error'])): ?>
            <div class="alert alert-danger">
                <?php echo $data['error']; ?>
            </div>
        <?php endif; ?>
        <div class="p1 fw-bolder mb-5"> Đăng nhập</div>

        <form action="/dacs2/Login/Dangnhap" method="post">
            <div class="form-group">
                <label class="text-white text-start ms-1">Tên đăng nhập</label>
                <input type="text" name="tdn" require>
            </div>
            <div class="form-group">
                <label class="text-white text-start ms-1">Mật khẩu</label>
                <input type="text" name="pw" require>
            </div>
            <div class="round">
                <button class=" btn-DN" name="Dangnhap">Đăng nhập</button>
            </div>
        </form>

    </div>

</body>

</html>