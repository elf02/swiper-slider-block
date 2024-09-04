<?php

$swiper_settings = [
	'speed' => 500,
	'loop' => true,
	'autoplay' => [
		'delay' => 3000,
		'disableOnInteraction' => false,
	],
	'pagination' => [
		'el' => '.swiper-pagination',
		'clickable' => true,
	],
	'navigation' => [
		'nextEl' => '.swiper-button-next',
        'prevEl' => '.swiper-button-prev',
	],
	'keyboard' => [
		'enabled' => true,
	]
];

$swiper_settings = apply_filters('elf02/swiper-settings', $swiper_settings, $attributes);

?>

<div <?= get_block_wrapper_attributes(); ?>>
	<div class="swiper" data-settings="<?= esc_attr(json_encode($swiper_settings)) ?>">
		<div class="swiper-wrapper">
			<?= $content ?>
		</div>
		<?php if (isset($swiper_settings['pagination'])): ?>
			<div class="swiper-pagination"></div>
		<?php endif; ?>
		<?php if (isset($swiper_settings['navigation'])): ?>
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>
		<?php endif; ?>
	</div>
</div>
