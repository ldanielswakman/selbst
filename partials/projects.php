<div class="projects row">
	<?
	$pages = get_posts([
		'post_type' => 'project',
		'post_status' => 'publish',
	]);
	foreach($pages as $key => $p) :
	$cover_img_id = get_post_meta($p->ID)['cover_image'][0];
	?>
		<div class="col-xs-12 col-sm-6">
			<a href="<?= get_permalink($p->ID) ?>" class="project-tile">
				<? if (strlen($cover_img_id > 0)) : ?>
					<figure>
						<img src="<?= wp_get_attachment_image_src($cover_img_id, 'large')[0] ?>" alt="<?= $p->post_title ?>" />
					</figure>
				<? else : ?>
					<figure class="figure--empty">
						<div class="placeholder"><?= substr($p->post_content, 0, 40) ?></div>
					</figure>
				<? endif ?>
				<h4><?= $p->post_title ?></h4>
			</a>
		</div>
	<? endforeach ?>
</div>
