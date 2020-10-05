<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery.js"></script>
    <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

    <title>Document</title>
</head>

<body>
<script>
        $(document).ready(function() {

            $('input#qty').change(function() {
                var id = $(this).attr('data-id')
               $("[data-id="+id+"]").val('10')
            })


        })
    </script>
    <form action="">
        <?php for ($i = 0; $i < 10; $i++) { ?>
            <input type="number" id="qty" data-id="<?php echo $i ?>">
        <?php } ?>
    </form>
   
</body>

</html>