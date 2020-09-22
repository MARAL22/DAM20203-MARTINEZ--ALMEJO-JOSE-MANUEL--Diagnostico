$(document).ready(function () {
	$('#numero').on('input', function () {
		this.value = this.value.replace(/[^0-9]/g, '');
	});


	$('#numero').on('change', function () {
		let table = $('#result');
		table.empty()

		let num = this.value;
		let fact = 1;
		let cad = "1"
		for (let i = 1; i <= num; i++) {
			fact *= i;
			cad += '*' + i;
			table.append(
				'<tr>' +
				'<td class="text-center">' + i + '</td>' +
				'<td>' + cad + '</td>' +
				'<td class="text-right">' + fact + '</td>' +
				'</tr>'
			);
		}
	});
});
