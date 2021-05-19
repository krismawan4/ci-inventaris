<div class="jumbotron" style="background-color: #e7d4b5;">
	<div class="container">
		<h1 class="display-4">INVENTORY JARINGAN KOMPUTER RUMAH SAKIT</h1>
		<hr class="my-4">
		<p>Dalam sebuah rumah sakit yang tentunya banyak terdapat ruangan.
			Setidaknya memiliki perangkat komputer dan jaringan di dalam satu ruangan.
			Hal ini juga membutuhkan pengelolaan data yang baik dari setiap daftar perangkat yang ada.
			Dari sini kelompok kami mencoba untuk membuat daftar inventaris dari perangkat yang ada di dalam rumah sakit
			yang sekiranya dapat
			mempermudah dalam mengelola dan mengawasi perangkat yang ada.</p>
	</div>
</div>

<div class="row m-t-25">
	<div class="col-sm-6 col-lg-4">
		<div class="overview-item overview-item--c1">
			<div class="overview__inner">
				<div class="overview-box clearfix">
					<div class="icon">
						<i class="fa fa-desktop"></i>
					</div>
					<div class="text">
						<?php $count = $this->db->count_all_results('tb_pc'); ?>
						<h2><?php echo $count; ?></h2>
						<span>Centrall Process Unit</span>
					</div>
				</div>
				<div class="overview-chart">
					<canvas id="widgetChart1"></canvas>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-6 col-lg-4">
		<div class="overview-item overview-item--c2">
			<div class="overview__inner">
				<div class="overview-box clearfix">
					<div class="icon">
						<i class="fa fa-print"></i>
					</div>
					<div class="text">
						<?php $count_print = $this->db->count_all_results('tb_printer'); ?>
						<h2><?php echo $count_print ?></h2>
						<span>Printer</span>
					</div>
				</div>
				<div class="overview-chart">
					<canvas id="widgetChart2"></canvas>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-6 col-lg-4">
		<div class="overview-item overview-item--c4">
			<div class="overview__inner">
				<div class="overview-box clearfix">
					<div class="icon">
						<i class="fa fa-circle"></i>
					</div>
					<div class="text">
						<?php $count_switch = $this->db->count_all_results('tb_switch'); ?>
						<h2><?php echo $count_switch ?></h2>
						<span>Switch</span>
					</div>
				</div>
				<div class="overview-chart">
					<canvas id="widgetChart4"></canvas>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="card-group">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">Opname</h5>
			<img class="card-img-top" src="assets/images/icon/c1.png" alt="Card image cap">
			<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat magnam illum laboriosam
				qui vero a voluptas distinctio delectus, quasi sunt culpa reiciendis autem tempore praesentium
				perspiciatis blanditiis tempora, voluptates ex!.</p>
		</div>
	</div>
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">Radiologi</h5>
			<img class="card-img-top" src="assets/images/icon/c2.png" alt="Card image cap">
			<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum debitis placeat itaque
				laudantium quisquam consequatur ratione? Aspernatur excepturi veritatis maxime temporibus vel autem
				dolore earum omnis ipsam est? Similique, autem?.</p>
		</div>
	</div>
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">Surgery</h5>
			<img class="card-img-top" src="assets/images/icon/c3.png" alt="Card image cap">
			<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat molestiae minima
				delectus culpa vitae minus illo voluptatum et eaque, distinctio, quis facere? Consequuntur,
				exercitationem similique molestiae praesentium ab saepe voluptatum!.</p>
		</div>
	</div>
</div>
