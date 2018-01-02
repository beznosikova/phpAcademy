<?php require __DIR__ . '/header.php'; ?>
    <div class="row">
            <h5>Список посещенных Вами страниц</h5>
    </div>
    <?php foreach ($pages as $page):?>
        <div class="row">
            <p><?php echo $page;?></p>
        </div>
    <?php endforeach;?>
<?php require __DIR__ . '/footer.php'; ?>