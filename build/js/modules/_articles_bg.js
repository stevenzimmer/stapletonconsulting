class Articles_bg {

	constructor() {

		this.article = $('.about-us-article');

		this.bg = $('.about-us-article').data('bg');

		this.events();

	}

	events() {
		this.article.hover( this.articles_hover, this.articles_unhover);
	}

	articles_hover() {

		$('.about-us-articles-bg').css({
			'background-image': 'url(' + $(this).data('bg') + ')',
			'opacity' : 1
		});

	}

	articles_unhover() {
		$('.about-us-articles-bg').css({
			'background-image': 'url()',
			'opacity' : 0
		});
	}

}

export default Articles_bg;