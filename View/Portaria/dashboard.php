<?php require __DIR__ . '/../inicio-html.php'; ?>
<?php require __DIR__ . '/../Components/header-html.php'; ?>
<?php require __DIR__ . '/../Components/aside-html.php'; ?>
	<main>
		<div class="container-fluid px-4">
			<div class="row">
				<div class="col-xl-3 col-md-6">
					<div class="card bg-primary text-white mb-4">
						<div class="card-body">
							<h4>
								<i class="fa-solid fa-building"></i> Espaços
							</h4>
						</div>
						<div class="card-footer d-flex align-items-center justify-content-between">
							<a class="small text-white stretched-link">Ver Detalhes</a>
							<div class="small text-white"><i class="fas fa-angle-right"></i></div>
						</div>
					</div>
				</div>

				<div class="col-xl-3 col-md-6">
					<div class="card bg-success text-white mb-4">
						<div class="card-body">
							<h4>
								<i class="fa-solid fa-building-user"></i> Pessoas
							</h4>
						</div>
						<div class="card-footer d-flex align-items-center justify-content-between">
							<a class="small text-white stretched-link">Ver Detalhes</a>
							<div class="small text-white"><i class="fas fa-angle-right"></i></div>
						</div>
					</div>
				</div>

				<div class="col-xl-3 col-md-6">
					<div class="card bg-info text-white mb-4">
						<div class="card-body">
							<h4>
								<i class="fa-sharp fa-solid fa-key"></i> Autorizações
							</h4>
						</div>
						<div class="card-footer d-flex align-items-center justify-content-between">
							<a class="small text-white stretched-link">Ver Detalhes</a>
							<div class="small text-white"><i class="fas fa-angle-right"></i></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-3 col-md-6">
					<div class="card bg-danger text-white mb-4">
						<div class="card-body">
							<h2><?= rand_int(1, 20); ?></h2>
							Chaves Atrasadas
							<p><small><?= 'nda' ?>% de atrasos totais</small></p>                                        
						</div>
						<div class="card-footer d-flex align-items-center justify-content-between">
							<a class="small text-white stretched-link" href="/dashboard/chaves-atrasadas">Ver Detalhes</a>
							<div class="small text-white"><i class="fas fa-angle-right"></i></div>
						</div>
					</div>
				</div>
			
				<div class="col-xl-3 col-md-6">
					<div class="card bg-warning text-white mb-4">
						<div class="card-body">
							<h2><?= rand_int(1, 20); ?></h2>
							Chaves Pendentes do dia
							<p><small><?= 'nda' ?>% ativo</small></p>                                        
						</div>
						<div class="card-footer d-flex align-items-center justify-content-between">
							<a class="small text-white stretched-link" href="/dashboard/chaves-pendentes">Ver Detalhes</a>
							<div class="small text-white"><i class="fas fa-angle-right"></i></div>
						</div>
					</div>
				</div>
			
				<div class="col-xl-3 col-md-6">
					<div class="card bg-success text-white mb-4">
						<div class="card-body">
							<h2><?= rand_int(1, 20); ?></h2>
							Chaves Devolvidas Hoje
							<p><small><?= 'nda' ?>% de sucesso</small></p>                                        
						</div>
						<div class="card-footer d-flex align-items-center justify-content-between">
							<a class="small text-white stretched-link">Ver Detalhes</a>
							<div class="small text-white"><i class="fas fa-angle-right"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php require __DIR__ . '/../fim-html.php'; ?>