<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/dacs2/public/css/tailwind.css">
    <link rel="stylesheet" type="text/css" href="/dacs2/public/css/style2.css">
    <!-- <link rel="stylesheet" type="text/css" href="/dacs2/public/css/lib.css"> -->
    <link rel="stylesheet" type="text/css" href="/dacs2/public/css/style.css">
    <title>Document</title>
    <style>
    </style>
</head>

<body>
    <?php
    require_once "./mvc/views/Blocks/header.php";
    ?>

    <?php
    if (isset($data["page"])) {

        require_once "./mvc/views/Pages/" . $data["page"] . ".php";
    } else {
        echo "Không tìm thấy trang.";
    }

    ?>
    <?php
    require_once "./mvc/views/Blocks/footer.php";
    ?>
</body>

</html>