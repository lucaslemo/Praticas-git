<?php require __DIR__ . '/../inicio-html.php'; ?>
<?php require __DIR__ . '/../Components/header-html.php'; ?>
	<main>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-5">
					<div class="card shadow-lg border-0 rounded-lg mt-5">
						<div class="card-header">
							<h3 class="text-center font-weight-light my-4">Login</h3>
						</div>
						<div class="card-body">

						   <!-- Mensagem de erro do login -->
						   <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
								<symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
									<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
								</symbol>
							</svg>

							<!-- ALERTA SENHA INCORRETA --->
							<?php require __DIR__ . '/../Components/message-html.php'; ?>

							<form action="/valida-login" method="post" accept-charset="utf-8" autocomplete="on" enctype="multipart/form-data">
								<div class="form-floating mb-3">
									<input name="login" class="form-control" placeholder="Login" id="input"  required>
									<label for="input">Login</label>
								</div>
								<div class="form-floating mb-3">
									<input name="senha" type="password" class="form-control" placeholder="Senha" id="inputPassword"  required>
									<label for="inputPassword">Senha</label>
								</div>
								<div class="d-flex align-items-center justify-content-center mt-4 mb-0">
									<button class="btn btn-primary">Entrar</a>
								</div>
							</form>
						</div>
						<div class="card-footer text-center py-3">
							<a class="small" href="#">Esqueceu sua senha?</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php require __DIR__ . '/../fim-html.php'; ?>