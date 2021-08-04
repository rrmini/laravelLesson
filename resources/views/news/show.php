<div class="" style="padding: 15px; display: inline-block">
    <a href="<?= route('root') ?>">Home</a>
</div>

<div class="" style="padding: 15px; display: inline-block">
    <a href="<?= route('category.show', ['id' => $news['categoryId']]) ?>">
        Back to news list <span style="font-weight: bold"><?= $categoryTitle ?></span>
    </a>
</div>

<div class="" style="padding: 15px; display: inline-block">
    <a href="<?= route('category') ?>">Back to the list of categories </a>
</div>

<h3>News id = <?=$news['id']?></h3>
