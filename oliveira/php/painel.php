<!DOCTYPE html>
<?php

include('barco.php');
session_start();



  ?>
<html>
	<head>
		 <meta charset="utf-8">
     	 <meta name="viewport" content="width=device-width, initial-scale=1">
      	<link rel="stylesheet" type="text/css" href="../css/painel.css">
      	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
      
    
		<title>document</title>
	</head>
	<body>
		
		<aside id="painel">
				<button id="grafico" onclick="mostra('paine02') ">
					<i class="bi bi-bar-chart-fill"></i>
						<h4>Grafic</h4>
				</button>
				<button onclick="mostra('painel03')">
					<i class="bi bi-book-fill"></i>
							<h4>Book</h4>
					</button>
				<button onclick="mostra('invest')">
							<i class="bi bi-currency-dollar"></i>
							<h4>Invest</h4>
					</button>
				<button onclick="mostra('life')">
						<i class="bi bi-suit-heart-fill"></i>
						<h4>life</h4>
				</button>
				<button>
						<i class="bi bi-collection"></i>
						<h4>Conta</h4>
				</button>
				<button>
						<i class="bi bi-square-half"></i>
						<h4>encolher</h4>
			</button>
		</aside>

			<?php 
			//o grafico de domnstrativo  reside a qui no painel02

			?>
			<article id="paine02">
				<h1>Gráfico De Demonstrativos</h1>

				<div id="barchart_values" style="width: 1237px; height: 355px;"></div>
				<div id="poka">	
				</div>
			</article>

			<?php
			//o grafico de domnstrativo  reside a qui no painel03

			 ?>

			<article id="painel03">
				<div id="book">
			
					<h1>Book De Demonstrativos</h1>
				<div class="ajuste">
				<from action=" " method="post">
						<input type="text" name="salario" placeholder="salario" class="entrada">
						<input type="text" name="divida" placeholder="divida" class="entrada">
						<input  type="submit" class="btn button" value="enviar">
			
				</from>
				</div>
				<table cellspacing="1">
					<tr>
			    		<th>nome</th>
			   			 <th>lucro</th> 
			   			 <th>prejuiço</th>
			   			 <th>salario</th>
			  		</tr>
			  		<tr>
			  			<td>
			  			lucas
			  			</td>
			  		
			  			<td>
			  			0
			  			</td>
			 		 </tr>
			 		</table>
				</div>
			</article>
                        

			<article id="invest">
				<h1>Investimento</h1>
				
				<div id="invest01">
				</div>
				<div id="inv">
				<form action=" "  method="POST" >
					<input type="text" name="s" id="s" placeholder="saldo ">
					<input type="text" name="p" id="p"  placeholder="juros">
					<button type="submit" id="btn" onclick="calculo()">Enviar</button>
				</form>
				</div>
			</article>
			
			<?php
			// a tela da vida financeira 

			?>
			<article id="life">
				<h1> Grafico Da Vida Financeira</h1>
				<div id="pie" style="width: 1100px; height: 500px;"></div>
			</article>

		<script type="text/javascript" src="../js/index.js"></script>			
 		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"> 
 		</script>
			<script>
				google.charts.load('current', {'packages':['corechart']});
      	google.charts.setOnLoadCallback(drawChart);

      	function drawChart() {
        	var data = google.visualization.arrayToDataTable([
          	['Ano', 'juros', 'Saldo'],
          	['2022',  1000,   12  ],
          	['2023',  1170,   15  ],
          	['2024',  660,    16  ],
          	['2025',  1030,   15  ]
        	]);

        	var options = {
          	title: 'Gráfico De Investimento ',
          	curveType: 'function',
          	legend: { position: 'bottom' },
          	width: 1300,
          	backgroundColor: "d9d9d9"

        	};

        	var chart = new google.visualization.LineChart(document.getElementById('invest01'));

        	chart.draw(data, options);
      	}
			</script>

			<script type="text/javascript">
				google.charts.load("current", {packages:["corechart"]});
    		google.charts.setOnLoadCallback(drawChart);
    		function drawChart() {
      	var data = google.visualization.arrayToDataTable([
      	['mes', 'lucro', { role: 'style' } ],
        	['jan', 10, 'color: gray'],
        	['fev', 14, 'color: gray'],
        	['mar', 16, 'color: gray'],
        	['abril', 22, 'color: gray'],
        	['mai', 28, 'color: gray'],
        	['jun', 30, 'color: gray'], 
        	['jul', 32, 'color: gray'],
        	['ago', 34, 'color: gray'],
      	]);

      	var view = new google.visualization.DataView(data);
      	view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

     	 var options = {
      	title: "Demonstrativos  The House",
      	width: 1400,
        height: 400,
        bar: {groupWidth: "70%"},
        backgroundColor: "d9d9d9",
        right:100,
        legend: { position: "none" },
    		}

      	var chart = new google.visualization.ColumnChart(document.getElementById("barchart_values"));
      	chart.draw(view, options);
  			}	        
			</script>

 			<script type="text/javascript">
      	google.charts.load("current", {packages:["corechart"]});
     	 google.charts.setOnLoadCallback(drawChart);
      	function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['vida', ' financeira'],
          ['Vida Financeira',50],
          ['Divida', 40]
        ]);

        var options = {
        	backgroundColor: "d9d9d9",
        	is3D: true,
          pieHole: 0.5,
          pieSliceTextStyle: {
            color: 'black',

          },
          legend: 'none'
        };

        var chart = new google.visualization.PieChart(document.getElementById('pie'));
        chart.draw(data, options);
      	}
    </script>

		
	
	
	</body>
</html>