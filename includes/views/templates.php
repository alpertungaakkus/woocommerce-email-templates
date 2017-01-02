
<div id="monsart-emails" >
    <section class="templates-thumbnails fl-center">
        <div class="inline-block">
            <ul class="clearfix">
                <?php for($i = 1; $i <= $this->_config->templateCount; $i++){ ?>
                <li class="single-thumbnail fl-left">
                    <div class='order-thumb-cont'>
                        Order #1
                        <div class="thumbnail">
                            <img src="<?php echo MA_IMAGES ?>templates/order<?= $i ?>.jpg" alt="Order-1 thumbnail">
                        </div>
                        <a href='?page=<?= $this->_config->slug ?>&action=customize&order=<?= $i ?>'><?php _e('CUSTOMIZE') ?></a> <a href='?action=activate&order=<?= $i ?>'><?php _e('ACTIVATE'); ?></a>

                    </div>
                </li>
                <?php } ?>



            </ul>
        </div>
    </section>
</div>