
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

	<title>Signin Template for Bootstrap</title>
	<?php $this->load->view('includes/header') ?>
</head>

<body class="text-center">
	<form class="form-signin border" style="background-color:white;">
		<h1 class="h3 mb-3 font-weight-normal">Formu Doldurun</h1>
		<div class="row">
			<div class="col-12">
				<table id="example" class="display" style="width:100%">
					<thead>
						<tr>
							<th>Adı</th>
							<th>email</th>
							<th>service</th>
							<th>Fiyat</th>
							<th>Mesaj</th>
							<th>#</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($items as $item): ?>
							<tr>
								<td><?php echo $item->name ?></td>
								<td><?php echo $item->email ?></td>
								<td><?php echo $item->service ?></td>
								<td><?php echo $item->budget ?></td>
								<td><?php echo $item->message ?></td>
								<td>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#change<?php echo $item->id;  ?>">Degiştir</button>
									<a type="button" class="btn btn-danger" href="<?php echo base_url('delete/'.$item->id)  ?>">Sil</a>
								</td>
							</tr>
						<?php endforeach; ?>

					</tbody>

				</table>
			</div>
		</div>
		</form>
		<?php foreach ($items as $item_change): ?>
			<div class="modal fade" id="change<?php echo $item_change->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-l">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel"><?php echo $item_change->name ?></h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<form class="form-control" action="<?php echo base_url('update/'.$item_change->id) ?>" method="post" enctype="application/x-www-form-urlencoded">

							<div class="row">
					      <div class="col-12 mb-3">
					        <input type="text" id="" class="form-control" name="name" value="<?php echo $item_change->name ?>"  autofocus>
					      </div>
					      <div class="col-12 mb-3">
					        <input type="email" id="inputEmail" class="form-control" name="email" value="<?php echo $item_change->email ?>" autofocus>
					      </div>
					      <div class="col-12 mb-3">
					        <select class="form-select" aria-label="Default select example" name="service">
					          <option <?php echo $item_change->service == 'Hizmetler' ? 'Selected' : '' ?>>Hizmetler</option>
					          <option <?php echo $item_change->service == 'Müşteri İlişkileri' ? 'Selected' : '' ?>>Müşteri İlişkileri</option>
					          <option <?php echo $item_change->service == 'Yazılım Geliştirme' ? 'Selected' : '' ?>>Yazılım Geliştirme</option>
					          <option <?php echo $item_change->service == 'Proje Yürütücüsü' ? 'Selected' : '' ?>>Proje Yürütücüsü</option>
					          <option <?php echo $item_change->service == 'Muhasebe' ? 'Selected' : '' ?>>Muhasebe</option>
					        </select>
					      </div>
					      <div class="col-12 mb-3">
					        <select class="form-select" aria-label="Default select example" name="budget">
					          <option>Maaş Seçiniz</option>
					          <option value="5500" <?php echo $item_change->budget == '5500' ? 'Selected' : '' ?>>5500 TL</option>
					          <option value="6000" <?php echo $item_change->budget == '6000' ? 'Selected' : '' ?>>6000 TL</option>
					          <option value="4500" <?php echo $item_change->budget == '4500' ? 'Selected' : '' ?>>4500 TL</option>
					        </select>
					      </div>

					      <div class="col-12 mb-3">
					        <textarea class="form-control" name="message" placeholder="Mesajınızı Giriniz" ><?php echo $item_change->message ?></textarea>
					      </div>
					    </div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
							<button type="submit" class="btn btn-primary">Kaydet</button>
						</div>
					</form>
					</div>
				</div>
			</div>
		<?php endforeach; ?>

		<?php $this->load->view('includes/footer') ?>
		<script type="text/javascript">
		$(document).ready(function() {
			$('#example').DataTable();
		} );

		</script>
	</body>
	</html>
