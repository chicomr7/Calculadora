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
 

		<div class="resultado1">Calculadora</div>
		<div class="mb-3">
        </div>
			<form method="GET" action="{{ route('soma')}}">
				@csrf
					<div class="resultado">Se você deseja realizar uma soma:<button type="submit"  class="btn btn-primary">Soma</button></div>
            </form>
            <div class="mb-3">
            </div>

            <form method="GET" action="{{ route('sub')}}">
            @csrf           
            <div class="resultado">Se você deseja realizar uma subtração:<button type="submit"  class="btn btn-primary">Subtrair</button></div>                       
            </form>  
            <div class="mb-3">
            </div>
            
            <form method="GET" action="{{ route('multi')}}">
            @csrf            
            <div class="resultado">Se você deseja realizar uma multiplicação:<button type="submit"  class="btn btn-primary">Multiplicar</button></div>                       
            </form>   

            <div class="mb-3">
            </div>
            <form method="GET" action="{{ route('div')}}">
            @csrf         
            <div class="resultado">Se você deseja realizar uma divisão:<button type="submit"  class="btn btn-primary">Dividir</button></div>                       
            </form>   


            <style>
                .resultado {
                    color: white;
                    border-radius: 30px;
                    background-color: black;
                    height: 90px;
                    line-height: 90px;
                    opacity: 0.9;
                }
                .resultado1 {
                    color: white;
                    border-radius: 30px;
                    background-color: black;
                    height: 100px;
                    line-height: 1o0px;
                    opacity: 0.9;
                    font-size: 300%;
                }
                </style>
		
		
	
 
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