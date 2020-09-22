<style>
	tr:nth-child(even) {
		background-color: lightgray !important;
	}
</style>

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-6 mx-auto">
				<h1 class="text-info text-center"> Bienvenido <?= $this->session->username ?> </h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 mx-auto">
				<form action="">
					<div class="form-group">
						<label for="numero">Ingresa un número para calcular su factorial</label>
						<input type="text" name="numero" id="numero" class="form-control">

					</div>
				</form>
				<table class="table sebra">
					<thead class="bg-dark text-white ">
					<tr class="text-center">
						<th>Iteración</th>
						<th>Expresión</th>
						<th>Valor</th>
					</tr>
					</thead>
					<tbody id="result">

					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>

