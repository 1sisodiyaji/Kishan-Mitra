const url = 'https://automatic-farm-solution.p.rapidapi.com/%7BPATH%7D';
const options = {method: 'GET'};

try {
	const response = await fetch(url, options);
	const result = await response.text();
	console.log(result);
} catch (error) {
	console.error(error);
}