<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */
 global $galleryId;
$post_id = $post->ID;
$galleryId = get_post_meta($post_id, 'viewbook', true);

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">


	<?php echo get_the_post_thumbnail( $post->ID, 'folio-image'); ?>
	
	<div class="post-gallery-link float-right"> <?php $len=strlen($galleryId); if ($len > 1) { ?> <a href="<?php echo $galleryId; ?>"><div class="gallery-icon">
		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="44" height="20" viewBox="0 0 44 20">
  <image width="44" height="20" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAioAAAD5CAQAAACjDNaQAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAALiMAAC4jAXilP3YAAAAHdElNRQfiAgIOASaGGRJ0AAAFK0lEQVR42u3dvW5cVRSG4TXjseyEyEokpKAQLoAGCgoaalCaINFQIBoKRAE3wAVwC7SkIaKhgC41DSUUSNREUSJZEFk2/klscwFU2/pm7zj7eep1pDVHR++Mj4u9qMe1UzP5pd5vmv+j3hy9clfndb8+abripDZHL93VYV1tmn9Q741euau9Vb1SV0Zv0dV24/xcd6dqUVuNV2yMXrmz1s+7PdkzdLqss9E7dHbeOD/b/Wm/Q63zs5nt/pwtR28AvFxEBYgSFSBKVIAoUQGiRAWIEhUgSlSAKFEBokQFiBIVIEpUgChRAaJEBYgSFSBKVIAoUQGiRAWIEhUgSlSAKFEBokQFiBIVIEpUgChRAaJEBYgSFSBKVIAoUQGiRAWIEhUgSlSAKFEBokQFiBIVIEpUgChRAaJEBYgSFSBKVIAoUQGiRAWIEhUgSlSAKFEBokQFiBIVIEpUgChRAaJEBYgSFSBKVIAoUQGiRAWIEhUgSlSAKFEBokQFiBIVIEpUgChRAaJEBYgSFSBqWZujV+hsteb5y2+jcX4xeuHOWj/vbE/Q5qr+qmujt+jqSeP843p99MpdndVu4xVHtTV66a7+bZx/Uo9Gr9zV/ugFAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADg/xb15WQHLDysH5rmv6g7U51sc1L36uemK76f7JCX3fqsaf7juj165a6OF3U+eofOfq+3m+b/rhujV+7sQX3QND/bE3TeeK7nb/XW6JX7Wtbe6BU6e9o4/8/ohbtrfSLORi/c2fPG+aejF+5sz1nKQNRs57yyJrfq29ErrN2n0/2svxhRIWKn7o5eYe3m+o/Gxfnzh4gZXqzM9kb6okQFiBIVIEpUgChRAaJEBYgSFSBKVIAoUQGiRAWIEhUgSlSAKFEBokQFiBIVIEpUgChRAaJEBYgSFSBKVIAoUQGiRAWIEhUgSlSAKFEBokQFiBIVIEpUgChRAaJEBYgSFSBKVIAoUQGiRAWIEhUgSlSAKFEBokQFiBIVIEpUgChRAaJEBYgSFSBKVIAoUQGiRAWIEhUgSlSAKFEBokQFiBIVIEpUgChRAaJEBYgSFSBKVIAoUQGiRIWIGR6kxegFLonV6AV4OezVT6NXWLvj0QtcEqJCxKP6cPQKvCBm+NUKdLSsndErdHa9cf7G6IW7a30iZvtiav11f330wp3trOqr2hq9RVcPG+e/rjtTvaE7qXuNV9yva6OX7mq3cf6buj165a68egIAAAAAAAAAAAAAAAAAAAAAAAAAAAAA4AW0qD8nO2Dh1/qocf6d0St3dVbf1edNVxxMdsjLfuNJPj/Wu6NX7mp/VW/UldFbdHWzcf612hi9clcb9WrjFduTHSd2tXH+Zt0avXJXh8t6NnqHzp6vef7yO22cPx+9cGetn3e2J+jZXN8xwNqJChAlKkCUqABRogJEiQoQJSpAlKgAUaICRIkKECUqQJSoAFGiAkSJChAlKkCUqABRogJEiQoQJSpAlKgAUaICRIkKECUqQJSoAFGiAkSJChAlKkCUqABRogJEiQoQJSpAlKgAUaICRIkKECUqQJSoAFGiAkSJChAlKkCUqABRogJEiQoQJSpAlKgAUaICRIkKECUqQJSoAFGiAkSJChAlKkCUqABRogJEiQoQJSpAlKgAUaICRIkKECUqQJSoAFGiAkSJChAlKkDUcrqsLBrnZ7s/7XeodX42s92f5aoOamP0Fl0dNc4fjl64s/M6brzidLLwnjbOH032DB38B9xiXyOckaEyAAAAAElFTkSuQmCC"/></svg>
		
	</div></a><?php }?></div>
	<header class="entry-header pt-3">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<h4 class='subheading'><?php echo esc_html(get_post_meta($post_id, 'subheading', true)); ?></h3>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php the_excerpt(); ?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>
		<div class="entry-meta">

			<?php //understrap_posted_on(); ?>

		</div><!-- .entry-meta -->
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		
		<?php //understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
