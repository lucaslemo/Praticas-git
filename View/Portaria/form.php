<?php require __DIR__ . '/../inicio-html.php'; ?>
<?php require __DIR__ . '/../Components/header-html.php'; ?>
<?php require __DIR__ . '/../Components/aside-html.php'; ?>

<main>
    <div class="container">
		<div class="row">
			<div class="card mb-4">
				<div class="card-body">
					Cadastro de Senha
				</div>
			</div>
		</div>
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Crie sua Senha</h3></div>
                    <div class="card-body">
                        <div class="small mb-3 text-muted">Digite sua senha</div>
                        <form action="#">
                            <div class="form-floating mb-3">
                                <input name="senha" class="form-control" id="inputSenha" type="password" placeholder="senha" required>
                                <label for="inputSenha">Senha</label>
                            </div>
							<div class="form-floating mb-3">
                                <input class="form-control" id="confirmarSenha" type="password" placeholder="senha" required>
                                <label for="confirmarSenha">Confirme sua Senha</label>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                <button class="btn btn-primary">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require __DIR__ . '/../fim-html.php'; ?>