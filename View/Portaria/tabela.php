<?php require __DIR__ . '/../inicio-html.php'; ?>
<?php require __DIR__ . '/../Components/header-html.php'; ?>
<?php require __DIR__ . '/../Components/aside-html.php'; ?>

<main>
	<div class="container-fluid px-4">
		<div class="row">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tabela
                </div>
                <div class="card-body">
                    <table id="table" class="table">
                        <thead>
                            <tr>
                                <th>Nome Completo</th>
                                <th>Local</th>
                                <th>Campus</th>
                                <th>Entrega</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nome Completo</th>
                                <th>Local</th>
                                <th>Campus</th>
                                <th>Entrega</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        <tr>
							<td>João Felix</td>
							<td>A102</td>
							<td>Juazeiro</td>
							<td>28/11/22</td>
						</tr>
						<tr>
							<td>Maria Augusta</td>
							<td>H012</td>
							<td>Juazeiro</td>
							<td>30/11/22</td>
						</tr>
						<tr>
							<td>Fabio Amorim</td>
							<td>K004</td>
							<td>Juazeiro</td>
							<td>01/12/22</td>
						</tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
	</div>
</main>

<?php require __DIR__ . '/../fim-html.php'; ?>