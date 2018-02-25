class Clients_bg {

	constructor() {

		this.client = $('.clients-logo');

		this.bg = $('.clients-logo').data('bg');

		this.events();

	}

	events() {
		this.client.hover( this.clients_hover, this.clients_unhover);
	}

	clients_hover() {

		$('.clients-logo').css('opacity', .4);
		$(this).css('opacity', 1);

		$('.clients-bg').css({
			'background-image': 'url(' + $(this).data('bg') + ')',
			'opacity' : 1
		});

	}

	clients_unhover() {
		$('.clients-bg').css({
			'background-image': 'url()',
			'opacity' : 0
		});
		$('.clients-logo').css('opacity', 1);
	}

}

export default Clients_bg;