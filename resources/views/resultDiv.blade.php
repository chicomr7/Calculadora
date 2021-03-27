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
		background-color: aqua;
        
		background-image: url('https://image.freepik.com/fotos-gratis/teclado-diario-e-calculadora-no-plano-de-fundo_23-2148183022.jpg');
	 
	 
	
	 }
	 
	</style>





</head>

<body >
	<center>
 <div class="container"> 
    
        <div   class="cabecalhoResultado">Calculadora</div>
        <div class="mb-3"> 
        <style>
        .cabecalhoResultado {
            color: white;
            border-radius: 30px;
            background-color: black;
            font-size: 50px;
            width:100%;
            text-align: center;
            opacity: 0.9;
        }
        
        </style>
        </div>

        
       
      	<div class="mb-8">
			<form method="GET" action="{{ route('div')}}">
				@csrf
                <div class="mb-3">
                <div class="resultado">O resultado da divisão dos valores é : {{$result}}</div>
                <style>
                .resultado {
                    color: white;
                    border-radius: 30px;
                    background-color: black;
                    height: 300px;
                    line-height: 300px;
                    opacity: 0.9;
                }
                </style>

                
                </div>
                
                
			  </form>
		</div>
	
 </div>
 <div class="container">
    <form method="GET" action="{{ route('menu')}}">
    <div class="mb-3">        
        <button type="submit"   class="btn btn-primary">Retornar ao menu de operações</button>
        </div>
    </form>
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


</body>

</html>