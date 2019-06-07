<?php  //setup alert from parent page and pulls the field into subpages.
$page_alert = get_field('page_alert');
global $post;
if ( get_field('page_alert', $post->post_parent ) ):
?>
<div class="row expanded">
	<div class='callout announcement small' data-closable>
		<?php the_field('page_alert', $post->post_parent );?>
		<a href='#' class='close' aria-hidden="true" role="button"><span class='icon-remove-circle'></span></a>
		<button class="close-button" aria-label="<?php esc_html_e('Dismiss alert', 'gcc-wp-2018'); ?>" type="button" data-close>
		<span aria-hidden="true">&times;</span>
		</button>
	</div>
</div>
<?php endif; ?>