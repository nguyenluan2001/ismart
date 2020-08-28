<?php
require 'mvc/views/blocks/header.php';
?>
<?php
require "mvc/views/pages/{$data['pages']}/{$data['item']}.php";
?>
<?php
require 'mvc/views/blocks/footer.php';
?>