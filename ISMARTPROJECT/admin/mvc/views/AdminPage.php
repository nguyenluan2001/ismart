<?php
require "blocks/header.php";
?>
<div id="main-content-wp" class="list-post-page">
    <div class="wrap clearfix">
        <?php require 'blocks/sidebar.php'; ?>
        <?php require "pages/{$data['pages']}.php"?>

    </div>
</div>
<?php
require "blocks/footer.php";
?>