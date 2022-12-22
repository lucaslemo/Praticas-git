<?php require __DIR__ . '/../inicio-html.php'; ?>
<?php require __DIR__ . '/../Components/header-html.php'; ?>
<?php require __DIR__ . '/../Components/aside-html.php'; ?>

<main>
    <div class="container">
		<div class="row">
			<div class="card mb-4">
				<div class="card-body">
					Nessa tela você pode cadastrar sua senha.
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
                            <div class="form-floating mb-1">
                                <input class="form-control border" id="confirmSenha" type="password" placeholder="confirme sua senha" required>
                                <label for="confirmSenha">Confirme sua Senha</label>
                            </div>
                            <div class="form-floating mb-3">
                                <span class="text-danger d-none" id="text-tam">
                                    <small><p class="mb-1">A senha deve possuir no mínimo 4 caracteres</p></small>
                                </span>
                                <span class="text-danger d-none" id="text-erro">
                                    <small><p class="mb-1">As senhas não são iguais</p></small>
                                </span>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                <button class="btn btn-primary" id="botaoConfirmar" disabled>Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require __DIR__ . '/../fim-html.php'; ?>