class Parallax {
	constructor() {
		this.parallax = $('.parallax');
		this.events();
	}

	events() {
		$(window).on('scroll', this.parallax_scroll.bind(this));
	}

	parallax_scroll() {
		this.parallax.each( function() {
			this.y_pos = $(document).scrollTop() / 2;
			this.coords = '50% ' + this.y_pos + 'px';
			$(this).css({ backgroundPosition: this.coords });
		});
	}
}

export default Parallax;