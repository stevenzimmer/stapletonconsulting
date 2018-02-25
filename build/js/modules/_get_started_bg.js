class Get_Started_bg {

	constructor() {

		this.get_started_btn = $('.btn-get-started');

		this.bg = $('.get-started-bg');

		this.events();

	}

	events() {
		this.get_started_btn.hover( this.get_started_hover.bind(this), this.get_started_unhover.bind(this));
	}

	get_started_hover() {

		this.bg.css({
			'opacity' : 1
		});

	}

	get_started_unhover() {

		this.bg.css({
			'opacity' : 0
		});
	}

}

export default Get_Started_bg;