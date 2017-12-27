class Forms {
	constructor() {
		this.form = $('#sc_form');
		this.button = $('#sc_form_button');
		this.field = $('.form-control');
		this.form_values = [];
		this.events();
	}

	events() {
		this.button.on('click', this.form_handler.bind(this));
	}

	form_handler(e) {
		e.preventDefault();

		this.field.each( (i, val) => {

			this.form_values[this.field[i].name] = val.value;

		});

		console.log(this.form_values);

		var url = sc_data.theme_folder + '/inc/form-submit.php';

		$.ajax({
			url: url,
			type: 'post',
			data: this.form_values,
			success: function(data) {
				console.log('success');
				console.log('data', data);
			},
			error: function() {
				console.log('error');
			}
		});
	}

}


export default Forms;