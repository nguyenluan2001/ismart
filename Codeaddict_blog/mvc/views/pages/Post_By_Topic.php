<div id="trending_post">
    <div class="container">
        <!-- Set up your HTML -->
        <h1 class="font-black">TRENDING POST</h1>
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img src="slider/image/product1.jpg" alt="">
            </div>
            <div class="item">
                <img src="slider/image/product5.jpg" alt="">
            </div>
            <div class="item">
                <img src="slider/image/product9.jpg" alt="">
            </div>
            <div class="item">
                <img src="slider/image/product11.jpg" alt="">
            </div>
            <div class="item">
                <img src="slider/image/product5.jpg" alt="">
            </div>
            <div class="item">
                <img src="slider/image/product9.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<div id="content">
    <div class="container">
        <div id="recent_post">
            <h2>RECENT POSTS</h2>
            <?php foreach ($data['list_posts'] as $item) { ?>
                <div class="item">
                    <div class="wp_img">
                        <img src="<?php echo $item['img'] ?>" alt="">

                    </div>
                    <div class="item_content">
                        <h2><a href="<?php echo $item['slug'] . "-" ?><?php echo $item['id'] . ".html" ?>" class="title"><?php echo $item['title'] ?></a></h2>
                        <span class="author"><i class="fas fa-user"></i>LUAN</span>
                        <span class="date"><i class="fas fa-calendar-alt"></i><?php echo $item['created_at'] ?></span>
                        <span class="view"><i class="fas fa-eye"></i><?php echo $item['view'] ?></span>
                        <p class="item_desc"><?php echo $item['desc'] ?></p>
                        <a href="<?php echo $item['slug'] . "-" ?><?php echo $item['id'] . ".html" ?>" class="read_more font-black">Read more</a>
                    </div>
                </div>
            <?php } ?>


        </div>
        <div id="sidebar">
            <div id="search">
                <form action="">
                    <input type="text" placeholder="Search...">
                </form>
            </div>
            <div id="topic">
                <h1 class="font-black">TOPICS</h1>
                <div id="list_topic">
                    <?php foreach ($_SESSION['list_topics'] as $item) { ?>
                        <a class="item" href="<?php echo $item['title'] . "-" ?><?php echo $item['id'] ?>">
                            <p><?php echo $item['icon'] ?> <?php echo $item['title'] ?></p>
                        </a>
                    <?php } ?>


                </div>
            </div>
        </div>

    </div>

</div>
<i id="back_to_top" class="fas fa-arrow-circle-up font-black"></i>