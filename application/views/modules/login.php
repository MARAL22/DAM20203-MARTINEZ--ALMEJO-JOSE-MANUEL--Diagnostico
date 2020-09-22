<section id="login">

	<div class="container">
		<div class="row justify-content-center" style="height: 100vh;">
			<div class="col-lg-4">
				<div class="login-form" id="login" style="transform: translateY(40%)">
					<div class="card">
						<div class="card-header">
							<h4>Login</h4>
						</div>
						<div class="card-body">
							<?= form_open('principal/login')?>
							<div class="form-group">
								<label>Usuario</label>
								<input type="text" class="form-control" name="user" placeholder="Ingresa tú nombre de usuario">
							</div>
							<div class="form-group">
								<label>Contraseña</label>
								<input type="password" class="form-control" name="password" placeholder="Ingresa tú contraseña">
							</div>
							<button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" name="submit">Entrar
							</button>
							<?=form_close()?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
