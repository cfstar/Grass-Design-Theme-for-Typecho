<h3>评论(<?php $this->commentsNum(_t('0'), _t('1'), _t('%d')); ?>条评论)</h3>
<div class="gd_block">
        <?php if($this->allow('comment')) { ?>
        <h4 id="response">回复</h4>
        <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
    		<p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
    		<p>
                <label for="author" class="required"><?php _e('称呼'); ?></label>
    			<input type="text" name="author" id="author" class="gd_text" value="<?php $this->remember('author'); ?>" required />
    		</p>
    		<p>
                <label for="mail"<?php if ($this->options->commentsRequireMail): ?> class="required"<?php endif; ?>><?php _e('Email'); ?></label>
    			<input type="email" name="mail" id="mail" class="gd_text" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
    		</p>
    		<p>
                <label for="url"<?php if ($this->options->commentsRequireURL): ?> class="required"<?php endif; ?>><?php _e('网站'); ?></label>
    			<input type="url" name="url" id="url" class="gd_text" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
    		</p>
            <?php endif; ?>
    		<p>
                <label for="textarea" class="required"><?php _e('内容'); ?></label>
                <textarea rows="8" cols="50" name="text" id="textarea" class="gd_textarea" required ><?php $this->remember('text'); ?></textarea>
            </p>
    		<p>
                <button type="submit" class="gd_button"><span><?php _e('提交评论'); ?></span></button>
            </p>
            <?php $security = $this->widget('Widget_Security'); ?>
            <input type="hidden" name="_" value="<?php echo $security->getToken($this->request->getReferer())?>">
    	</form>
    <?php } else { ?>
        <h4>当前页面未开启评论功能。</h4>
    <?php } ?>
</div>
<ol id="comment_list">
    <?php $this->comments()->to($comments); ?>
    <?php while($comments->next()): ?>
	<div class="gd_list_item" id="<?php $comments->theId(); ?>">
	    <div class="gd_list_item_info">
    	    <b><?php $comments->author(); ?></b>
            <p><?php $comments->date('Y F jS'); ?> <?php $comments->date('h:i a'); ?> <?php $comments->sequence(); ?>楼</p>
	    </div>
	    <div class="gd_p">
	        <?php $comments->content(); ?>
	    </div>
	</div>
	<?php endwhile; ?>
	<?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</ol>
