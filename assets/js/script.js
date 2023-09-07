function textToggle() {
	let p = $("#test-jquery");
	let status = false;
	let message = "";
	setInterval(() => {
		status = !status;
		p.empty();
		if (status) {
			message = "Hola mundo!";
		} else {
			message = "Hello World!";
		}
		p.text(message);
	}, 1500);
}

function initGrafico() {
	const ctx = document.getElementById("miGrafico");

	new Chart(ctx, {
		type: "bar",
		data: {
			labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
			datasets: [
				{
					label: "# of Votes",
					data: [12, 19, 3, 5, 2, 3],
					borderWidth: 1,
				},
			],
		},
		options: {
			scales: {
				y: {
					beginAtZero: true,
				},
			},
		},
	});
}
$(() => {
	textToggle();

	$("#table-test").DataTable();

	initGrafico();
});
