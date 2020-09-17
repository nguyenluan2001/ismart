<div id="footer" class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-white text-center">
               
                <?php if (!empty($_SESSION["user"])) { ?>
                    <p> © <?php echo $_SESSION["user"]['fullname']; ?> 2020</p>
                <?php } ?>


            </div>
        </div>
    </div>

</div>
</div>

</body>

</html>