new Vue ({
	el: "#app",
	data: {
		title: "default",
		getUsers: "http://localhost:8000/api/users",
		counter: 0
	},
	methods: {
		changeTitle: function(event){
			this.title = event.target.value;
		}
		incrementCounter: function(event){
			this.counter = event.target.value++;
		}

	}
})

