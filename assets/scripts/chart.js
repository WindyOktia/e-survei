// chart survei Kegiatan

var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
	// The type of chart we want to create
	type: 'line',

	// The data for our dataset
	data: {
		labels: ['Sangat Baik', 'Baik', 'Cukup', 'Kurang'],
		datasets: [{
			label: 'Grafik Kepuasan',
			backgroundColor: '#0094C6',
			data: [30, 10, 5, 2]
		}]
	},

	// Configuration options go here
	options: {}
});

//-------------------------------------------------------------------------------------> End of Survei Kegiatan
