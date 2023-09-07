<main class="container mt-5">
	<div class="row">
		<div class="col-12 mb-4">
			<h1 class="text-center text-muted">TEST CIELO</h1>
		</div>
		<div class="col-12">
			<hr>
		</div>
		<div class="col-12 col-md-6 mb-4">
			<h2># Test FontAwesome</h2>
			<div>
				<i class="fas fa-user mr-3"></i>
				<i class="fas fa-book mr-3"></i>
				<i class="fas fa-pen mr-3"></i>
				<i class="fas fa-file mr-3"></i>
			</div>
		</div>
		<div class="col-12 col-md-6 mb-4">
			<h2>#Test JQuery</h2>
			<p id="test-jquery">Cargando test...</p>
		</div>
		<div class="col-12 col-md-12 mb-4">
			<h2>#Test DataTable</h2>
			<div class="table-responsive">
				<table class="table table-striped" id="table-test">
					<thead>
						<tr>
							<th>ID</th>
							<th>NOMBRE</th>
							<th>APELLIDO</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Paul</td>
							<td>Martinez</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Dario</td>
							<td>Flores</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="col-12 col-md-12 mb-4">
			<h2># Test CharJS</h2>
			<div>
				<canvas id="miGrafico"></canvas>
			</div>
		</div>
		<div class="col-12 col-md-6 mb-4">
			<h2># Test Bootstrap</h2>
			<div>
				<button type="button" class="btn btn-primary">
					Primary
				</button>
				<button type="button" class="btn btn-secondary">
					Secondary
				</button>
			</div>
		</div>
		<div class="col-12 col-md-6 mb-4">
			<h2>#Test CI</h2>
			<div class="mb-4">
				<a href="<?php echo site_url('welcome/index'); ?>" class="btn btn-link">Recargar</a>
			</div>
			<ul>
				<?php if ($usuarios) : ?>
					<?php foreach ($usuarios as $index => $usuario) : ?>
						<li><?php echo $usuario['id'] . ' ' . $usuario['nombre'] . ' / ' . $usuario['email']; ?></li>
					<?php endforeach; ?>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</main>
