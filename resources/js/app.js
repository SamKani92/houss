require('./bootstrap');

import Glide from '@glidejs/glide'
new Glide('.glide', {
	autoplay: 5000,
	animationDuration: 1500,
	type: 'carousel'
}).mount()