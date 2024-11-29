<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" charset="UTF-8" />
    <title>Trang chủ</title>
    <meta
        content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
        name="viewport" />
    <link
        rel="icon"
        href="/dacs2/public/assets/img/kaiadmin/favicon.ico"
        type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="/dacs2/public/css/tailwind.css">
    <!-- Fonts and icons -->
    <script src="/dacs2/public/assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["/dacs2/public/assets/css/fonts.min.css"],
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="/dacs2/public/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/dacs2/public/assets/css/plugins.min.css" />
    <link rel="stylesheet" href="/dacs2/public/assets/css/kaiadmin.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="/dacs2/public/assets/css/demo.css" />
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <?php require_once "./mvc/views/blockadmin/sidebar.php"; ?>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="main-header">

                <!-- Navbar Header -->
                <?php require_once "./mvc/views/blockadmin/navbar.php"; ?>
                <!-- End Navbar -->
            </div>
            <?php require_once "./mvc/views/Pageadmin/" . $data["page"] . ".php" ?>
        </div>
    </div>
    <script src="/dacs2/public/assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="/dacs2/public/assets/js/core/popper.min.js"></script>
    <script src="/dacs2/public/assets/js/plugin/datatables/datatables.min.js"></script>
    <script src="/dacs2/public/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
    <script src="/dacs2/public/assets/js/plugin/sweetalert/sweetalert.min.js"></script>
    <script src="/dacs2/public/assets/js/kaiadmin.min.js"></script>
</body>

</html>