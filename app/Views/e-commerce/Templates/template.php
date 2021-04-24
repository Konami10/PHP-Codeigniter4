<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EStore</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="eCommerce HTML Template Free Download" name="keywords">
    <meta content="eCommerce HTML Template Free Download" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="/lib/slick/slick.css" rel="stylesheet">
    <link href="/lib/slick/slick-theme.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>

    <?= $this->renderSection('Content'); ?>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/slick/slick.min.js"></script>

    <!-- Template Javascript -->
    <script src="/js/main.js"></script>

    <script>
        function previewImg() {
            const Gambar = document.querySelector('#Gambar');
            const Label = document.querySelector('.custom-file-label');
            const img_preview = document.querySelector('.img-preview');

            Label.textContent = Gambar.files[0].name;

            const FileGambar = new FileReader();
            FileGambar.readAsDataURL(Gambar.files[0]);

            FileGambar.onload = function(e) {
                img_preview.src = e.target.result;
            }
        }
    </script>
</body>

</html>