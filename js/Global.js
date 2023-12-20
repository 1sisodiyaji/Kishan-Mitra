function searchItem() {
	const searchItem = document.getElementById('SearchItem').value;
	const display1 = document.getElementById('display1');
	const display2 = document.getElementById('display2');
	const message = document.getElementById('message');

	if (searchItem === "") {
		message.textContent = "Please fill in the item";
	} else {
		$.ajax({
			url: '../ajax/search.php',
			method: 'POST',
			data: { searchItem: searchItem },
			dataType: 'json',
			success: function (response) {
				if (response.type  === 'success') {
					display1.textContent = response.display1;
					display2.textContent = response.display2;
				} else {
					message.textContent = response.message || 'Error in response';
				}
			},
			error: function (xhr, status, error) {
				console.log(error);
				//message.textContent = "Error occurred during the AJAX request";
			}
		});
	}
}
