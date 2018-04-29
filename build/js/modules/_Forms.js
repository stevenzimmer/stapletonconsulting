class Forms {
	constructor() {
		this.form = $('.sc-form');
		this.form_leads = $('.leads-hero-right-box');
		this.form_success = $('.form-success');
		this.field = $('.form-control');
		this.form_values = [];
		this.events();
	}

	events() {
		this.form.on('submit', this.form_handler.bind(this));
		this.form_leads.on('submit', this.form_handler_leads.bind(this));
	}

	form_handler() {

		this.form.remove();

		this.form_success.show();

	}

	form_handler_leads() {

		this.form_leads.remove();

		this.form_success.show();
	}

}


export default Forms;