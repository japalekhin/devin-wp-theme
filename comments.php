<?php if (post_password_required()): ?>
    <?php return; ?>
<?php endif; ?>

<div id="comments" class="comments-area">
    <?php if (have_comments()) : ?>
        <h3 class="comments-title">
            <?php printf(esc_html(_nx('One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'devin')), number_format_i18n(get_comments_number()), '<span>' . get_the_title() . '</span>'); ?>
        </h3>

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')): ?>
            <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
                <h4 class="screen-reader-text"><?php esc_html_e('Comment navigation', 'devin'); ?></h4>
                <div class="nav-links">
                    <div class="nav-previous"><?php previous_comments_link(esc_html__('Older Comments', 'devin')); ?></div>
                    <div class="nav-next"><?php next_comments_link(esc_html__('Newer Comments', 'devin')); ?></div>
                </div>
            </nav>
        <?php endif; ?>

        <ol class="comment-list">
            <?php wp_list_comments(['style' => 'ol', 'short_ping' => TRUE, 'avatar_size' => 60,]); ?>
        </ol>

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')): ?>
            <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
                <h4 class="screen-reader-text"><?php esc_html_e('Comment navigation', 'devin'); ?></h4>
                <div class="nav-links">
                    <div class="nav-previous"><?php previous_comments_link(esc_html__('Older Comments', 'devin')); ?></div>
                    <div class="nav-next"><?php next_comments_link(esc_html__('Newer Comments', 'devin')); ?></div>
                </div>
            </nav>
        <?php endif; ?>
    <?php endif; ?>

    <?php if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')): ?>
        <p class="no-comments"><?php esc_html_e('Comments are closed.', 'devin'); ?></p>
    <?php endif; ?>
    <?php comment_form(); ?>
</div>
