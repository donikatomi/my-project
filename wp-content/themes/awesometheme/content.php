<h3><?php the_title(); ?></h3>
<div class="thumbnail-img"><?php echo the_post_thumbnail('thumbnail') ?></div>
<small>Posted on <?php the_time('j F Y') ?> at <?php the_time('g i a') ?>, in <?php the_category(); ?></small>
<p><?php the_content(); ?></p>
<hr>