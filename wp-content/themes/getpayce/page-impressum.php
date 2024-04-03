<?php
/*
Template Name: impressum page
*/
?>
<?php get_header();?>

<main class="content impressum">
	<h1><?php the_title(); ?></h1>

	<?php the_post(); ?>
	<?php the_content(); ?>
</main>

<?php get_footer();?>
