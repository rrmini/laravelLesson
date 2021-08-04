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
        <h1 class="text-center">News <?= $category['title'] ?></h1>
    </div>

    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="<?= route('root') ?>">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= route('category') ?>">Back to the list of categories </a>
        </li>
    </ul>

    <div class="container">
        <?php foreach($news as $n): ?>
            <div class="">
                <strong>
                    <a href="<?= route('news.show', [ 'id' => $n['id']]) ?>"> <?= $n['title'] ?> </a>
                </strong>
                <p> <?= $n['content'] ?> </p>
            </div>
        <?php endforeach; ?>
    </div>

</body>
