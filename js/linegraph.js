$(document).ready(function(){
	$.ajax({
		url : "http://localhost/sism/adm/busca_dado.php",
		type : "GET",
		success : function(data){
			console.log(data);

			var cod_equipamento = [];			
			var consumo_arduino_consumo = [];
			var tarifa_arduino_consumo = [];
			var data_arduino_consumo = [];

			for(var i in data) {
				cod_equipamento.push("cod_equipamento " + data[i].cod_equipamento);		
				data.push("data " + data[i].data);		
				consumo_arduino_consumo.push(data[i].consumo);
				tarifa_arduino_consumo.push(data[i].tarifa);
								
			}
			
			var chartdata = {
				labels: cod_equipamento,nome,data,
				datasets: [
					{
						label: "Consumo kWh",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(59, 89, 152, 0.75)",
						borderColor: "rgba(59, 89, 152, 1)",
						pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
						pointHoverBorderColor: "rgba(59, 89, 152, 1)",
						data: consumo_arduino_consumo
					},
					{
						label: "Tarifa R$",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(211, 72, 54, 0.75)",
						borderColor: "rgba(211, 72, 54, 1)",
						pointHoverBackgroundColor: "rgba(211, 72, 54, 1)",
						pointHoverBorderColor: "rgba(211, 72, 54, 1)",
						data: tarifa_arduino_consumo
					}			
					
				]
			};	
			
			
			
			var ctx = $("#mycanvas");

			var BarGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata
				
				
			});		
			
		},
		error : function(data) {

		}
	});
});