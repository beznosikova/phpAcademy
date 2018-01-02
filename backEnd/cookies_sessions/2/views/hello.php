<?php require __DIR__ . '/header.php'; ?>
    <div class="row">
        <?php if (!empty($name)):?>
            <h5>Здравствуйе, <?php echo $name?>)</h5>
        <?php else:?>
            <h5>Давайте познакомимся, введие имя на главной странице!</h5>
        <?php endif;?>
    </div>
<?php require __DIR__ . '/footer.php'; ?>