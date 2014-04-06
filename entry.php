<?php
$post_class_list = array('columns','small-4');
if ($wp_query->current_post + 1 == $wp_query->post_count) :	
	array_push($post_class_list, 'end');
endif; ?>

<article id="post-<?php the_ID(); ?>" <?php post_class($post_class_list); ?>>
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a>
<footer>
	<h1 class="entry-title">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
	</h1>
</footer>
</article>