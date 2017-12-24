class Smooth_Scroll {
	constructor() {
		this.scroll_item = $('a[href*="#"]:not([href="#"]):not([data-toggle])');
		this.events();
	}

	events() {
		this.scroll_item.on('click', this.smooth_scroll);
	}

	smooth_scroll() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname ) {
			var target = $(this.hash);
	        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	        if (target.length) {
	            $('html, body').animate({
	                scrollTop: target.offset().top - 50
	            }, 1000);
	            return false;
	        }
		}
	}
}

export default Smooth_Scroll;