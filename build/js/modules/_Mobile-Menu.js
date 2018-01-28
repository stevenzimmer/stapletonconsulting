class Mobile_Menu {
	constructor() {
		this.menu_icon = $('.navbar-toggle');
		this.mobile_menu = $('.mobile-nav');
		this.search_icon = $('.navbar-nav-search');
		this.events();
	}

	events() {
		this.menu_icon.click( this.toggle_menu.bind(this) );
	}

	toggle_menu() {
		this.menu_icon.toggleClass('active');
		this.mobile_menu.toggleClass('active');
		if ( this.menu_icon.hasClass('active')) {
			$('body').addClass('mobile-nav-no-scroll');
		} else {
			$('body').removeClass('mobile-nav-no-scroll');
		}
	}
}

export default Mobile_Menu;