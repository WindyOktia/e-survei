// chart survei Kegiatan
$(document).ready(function () {
	var sb = document.getElementById('sb').innerHTML;
	var b = document.getElementById('b').innerHTML;
	var c = document.getElementById('c').innerHTML;
	var k = document.getElementById('k').innerHTML;

	var ctx = document.getElementById('kegiatan').getContext('2d');
	var chart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ['Sangat Baik', 'Baik', 'Cukup', 'Kurang'],
			datasets: [{
				label: 'Grafik Kepuasan',
				backgroundColor: '#0094C6',
				data: [sb, b, c, k]
			}]
		},
		options: {}
	});
});


//-------------------------------------------------------------------------------------> End of Survei Kegiatan
