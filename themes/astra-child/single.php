<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header(); ?>
<div>
<?php echo do_shortcode('[wpcode id="1005"]'); // shortkód pro vložení hlavičky ?>
<section id="main">
<?php echo do_shortcode('[wpcode id="472"]'); //shortkód pro vložení navigačního menu ?>
<section id="content-wrapperCalendar">
<?php echo do_shortcode('[wpcode id="493"]'); //shortkód pro vložení tlačítka, které na mobilu zobrazuje navigační menu ?>
<h2><?php the_title(); //název příspěvku ?></h2>
<hr class="redLine" />
<p><b>Datum:</b> <?php the_date(); //datum zveřejnění příspěvku ?>
<b> Autor:</b> <?php the_author(); //autor příspěvku ?></p>
<p><?php the_content(); //obsah příspěvku ?></p>
<?php comments_template(); //komentářová sekce?>
</section></section><footer id="footer">Tomáš David © 2022</footer>
</div>
<?php get_footer();?>