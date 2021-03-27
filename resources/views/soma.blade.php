<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<title>Calculadora</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
 
    <style > 
     body{
		font-family: 'Noto Sans JP', sans-serif;
		background-image: url('https://image.freepik.com/fotos-gratis/teclado-diario-e-calculadora-no-plano-de-fundo_23-2148183022.jpg');
	 }
	 
	</style>

</head>

<body >
	<div class="container">
	<center>
 <div class="container"> 
	
	<div class="row">
		<h1>  Calculadora	</h1>
		<div class="mb-3">
			<form method="POST" action="{{ route('somar')}}">
				@csrf
				<div class="mb-3">
					
						<div class="resultado">Insira a baixo o primeiro valor:</div>
					
						<style>
						.resultado {
							color: white;
							border-radius: 30px;
							background-color: black;
							height: 30px;
							line-height: 30px;
							opacity: 0.9;
						}
						</style>
		
						
						</div>
						
	<input type="number"  class="form-control" id="primeiroValor" name="valor1" placeholder  ="Exemplo:2">
						
				</div>
				<div class="mb-3">
					<div class="mb-3">

					</div>
					
					<div class="resultado">Insira a baixo o segundo valor:</div>
					
						<style>
						.resultado {
							color: white;
							border-radius: 30px;
							background-color: black;
							height: 30px;
							line-height: 30px;
							opacity: 0.9;
						}
						</style>
		<div class="row">

		</div>
		<div class="mb-3">

		</div>
		
	<input type="number" class="form-control" id="segundoValor" name="valor2" placeholder="Exemplo:3">
		
				</div> 
				<div class="container">
				<button type="submit"  class="btn btn-primary">Somar os valores</button>
				</div>
			  </form>
		</div>
	</div>
	
 </div>
 <div class="container">
     
	<style>
	 footer {
		position:absolute;
		bottom:0;
		width:80%;
		text-align: center;
		color: white;
		background-color:black;
		height: 40px;
		line-height: 40px;
		border-radius: 40px;
		opacity: 0.9;
	
	 }
		</style>
		 
		 <footer>
			 Todos os direitos reservados-Francisco de Jesus Coelho Morais Filho(2021);
		 </footer>
	 </div>
</center>
</div>
</body>
</html>