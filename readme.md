# Swiper Slider Block

A WordPress Gutenberg slideshow block using [SwiperJS](https://swiperjs.com/).

The purpose of this slider is to work with clients without attributes/settings. There is a filter to change the slider settings (see below). Block-Styles can be used to change the style of the slider and set a class to identify the slider in the mentioned filter.

## Getting Started

1. Drop this folder in your WordPress plugins folder and activate it under the plugins settings.

2. You can use the following filter to manipulate the Swiper JS settings per slider instance:

```php
function my_swiper_settings($swiper_settings, $attributes) {
    if (
        isset($attributes['className']) &&
        $attributes['className'] === 'my-swiper'
    ) {
        unset($swiper_settings['navigation']);
    }

    return $swiper_settings;
}
add_filter('elf02/swiper-settings', 'my_swiper_settings', 10, 2);
```
