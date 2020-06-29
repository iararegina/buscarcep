<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>MEU CEP</title>
		<link rel="stylesheet" href="{{ asset('css/estilo.css') }}" />
	  </head>
	
	<body> 
		<section class="form-section">
			<h1>Buscar CEP</h1>
			<div class="form-wrapper">
				<!--faltava o N na palavra index, erro no script passado -->
				<form action="{{ route('cep') }}" method="get">
				<div class="input-block">
					<label> Insira o CEP: </label>
					<input type="text" name="cep" id="login-email">
				</div>
				<input type="submit" value="Enviar" class="btn-enviar">
				</form>
			</div>
			
			@if ($cep)
				<div class="form .input-block label">
					CEP Informado: {{ $cep }}<br><br>

					Seu endereço é:<br>
					Rua: {{$endereco->logradouro}}<br>
					Bairro: {{$endereco->bairro}}<br>
					Estado: {{$endereco->uf}}
				</div>
			@endif
		</section>
	</body>
</html>

