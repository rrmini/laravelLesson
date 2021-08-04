<h1>News <?= $category['title'] ?></h1>

<div class="" style="padding: 15px; display: inline-block">
    <a href="<?= route('root') ?>">Home</a>
</div>

<div class="" style="padding: 15px; display: inline-block">
    <a href="<?= route('category') ?>">Back to the list of categories </a>
</div>
<br>

<?php foreach($news as $n): ?>
    <div class="">
        <strong>
            <a href="<?= route('news.show', [ 'id' => $n['id']]) ?>"> <?= $n['title'] ?> </a>
        </strong>
        <p> <?= $n['content'] ?> </p>
    </div>
<?php endforeach; ?>
