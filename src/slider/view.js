import Swiper from "swiper";
import { Navigation, Pagination, A11y, Keyboard, Autoplay } from "swiper/modules";
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/a11y';
import 'swiper/css/keyboard';
import 'swiper/css/autoplay';

document.addEventListener('DOMContentLoaded', () => {
	const swipers = document.querySelectorAll('.swiper');

	if (!!swipers && swipers.length > 0) {
		swipers.forEach(swiper =>
			new Swiper(swiper, {
				modules: [Navigation, Pagination, A11y, Keyboard, Autoplay],
				...JSON.parse(swiper.dataset.settings)
			})
		);
	}
});
