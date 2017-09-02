<?php



?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<h1>text</h1>

<span class="icon icon-bulb"></span>
<span class="icon icon-bubble"></span>
<span class="icon icon-heart"></span>
<span class="icon icon-pen"></span>
<span class="icon icon-phone"></span>
<span class="icon icon-star"></span>

<div class="bg-blue">
	<span class="icon icon-singolo-logo"></span>
</div>
<div>
	<a href="" class="btn btn-primary">Text</a>
</div>

<?php wp_footer(); ?>
</body>
</html>