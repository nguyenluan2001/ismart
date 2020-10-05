<div id="content">
    <div class="container">

        <div id="detail_post">
            <h2><?php echo $data['post']['title']?></h2>
            <?php echo $data['post']['content']?>
        </div>

        <div id="sidebar">
            <div class="fb-page" data-href="https://www.facebook.com/CODEdocumentary/" data-tabs="" data-width="356" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
                <blockquote cite="https://www.facebook.com/CODEdocumentary/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/CODEdocumentary/">CODE</a></blockquote>
            </div>
            <div id="popular_post">
                <h1 class="mt-0 mb-0 font-black">POPULAR</h1>
                <?php foreach($data['popular_posts'] as $item){?>
                    <div class="item">
                    <img src="<?php echo $item['img']?>" alt="">
                    <a href=""><?php echo $item['title']?></a>
                </div>
                <?php }?>
               
               
            </div>
            <div id="topic">
                <h1 class="font-black">TOPICS</h1>
                <div id="list_topic">
                <?php foreach ($_SESSION['list_topics'] as $item) { ?>
                        <a class="item" href="<?php echo $item['title']."-"?><?php echo $item['id']?>">
                            <p><?php echo $item['icon']?> <?php echo $item['title']?></p>
                        </a>
                    <?php } ?>

                </div>
            </div>
        </div>

    </div>

</div>