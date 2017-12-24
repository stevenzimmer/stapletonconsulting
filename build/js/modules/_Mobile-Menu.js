class Mobile_Menu {
	constructor() {
		this.menu_icon = $('.navbar-toggle');
		this.mobile_menu = $('.navbar-collapse');
		this.search_icon = $('.navbar-nav-search');
		this.events();
	}

	events() {
		this.menu_icon.click( this.toggle_menu.bind(this) );
	}

	toggle_menu() {
		this.menu_icon.toggleClass('active');
		this.mobile_menu.toggleClass('fade_in');
		if ( this.menu_icon.hasClass('active')) {
			$('body').addClass('body-no-scroll');
		} else {
			$('body').removeClass('body-no-scroll');
		}
	}
}

export default Mobile_Menu;