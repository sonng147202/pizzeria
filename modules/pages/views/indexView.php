<?php

get_header();

get_sidebar();

?>
         <div id="content" class="fl-right">
            <div class="section" id="detail-news-wp">
              <?php foreach ($list_page as $item) { ?>
                <div class="section-head">
                    <h3 class="section-title"><?php echo $item['title']; ?></h3>
                </div>
                <div class="section-detail">
                    <p class="create-date"><?php echo $item['date']?></p>
                    <div class="content-news">
                        <p><?php echo $item['conten']; ?></p>
                        
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>