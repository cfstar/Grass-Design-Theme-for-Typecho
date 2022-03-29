<?php if(!empty($this->options->notice)){ ?>
            <div class="gd_block">
                <div class="gd_box gd_pd">
                    <marquee scrolldelay="120" class="gd_notice">
                        <b><?php $this->options->notice(); ?></b>
                    </marquee>
                </div>
            </div>
            <?php } ?>