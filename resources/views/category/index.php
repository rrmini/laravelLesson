<h1>List of news categories</h1>

<div class="menu" style="padding: 15px">
    <a href="<?= route('root') ?>">home</a>
</div>


<?php
foreach ($category as $category): ?>
    <strong>
        <a href="<?= route('category.show', ['id' => $category['id']])?>"> <?= $category['title'] ?> </a>
    </strong>
    <h3>brief description of the category <?= $category['title'] ?></h3>
    <p> <?= $category['desc'] ?></p>

<?php endforeach; ?>
