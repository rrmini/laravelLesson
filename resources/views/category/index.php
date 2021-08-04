<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Simple CMS" />
    <meta name="author" content="Sheikh Heera" />
    <title>LaravelLesson</title>

    <!-- Bootstrap core CSS -->
    <!--    <link href = {{ asset("bootstrap/css/bootstrap.css") }} rel="stylesheet" />-->

    <!-- Custom styles for this template -->
    <!--    <link href = {{ asset("bootstrap/css/sticky-footer-navbar.css") }} rel="stylesheet" />-->

    <!-- Optional theme -->
    <!--    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">-->
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1 class="text-center">List of news categories</h1>
    </div>

    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="<?= route('root') ?>">home</a>
        </li>
    </ul>

    <div class="container">
        <?php foreach ($category as $category): ?>
            <strong>
                <a href="<?= route('category.show', ['id' => $category['id']])?>"> <?= $category['title'] ?> </a>
            </strong>
            <h3>brief description of the category "<?= $category['title'] ?>"</h3>
            <p> <?= $category['desc'] ?></p>
        <?php endforeach; ?>
    </div>

</body>
</html>


