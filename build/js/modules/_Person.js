class Person {
	constructor(fullname, favcolor) {
		this.name = fullname;
		this.favoriteColor = favcolor;
	}

	greet() {
		console.log('hello, my name is ' + this.name + ' and my favorite color is ' + this.favoriteColor);
	}
}

export default Person;