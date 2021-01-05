<?php
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Language" content="en">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Update Component</title>
	<meta name="viewport"
		  content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>
	<meta name="description" content="Tables are the backbone of almost all web applications.">
	<meta name="msapplication-tap-highlight" content="no">
	<script src="http://danaos.xyz/tafsirmimpi/js/jquery.js"></script>
	<script src="http://danaos.xyz/tafsirmimpi/js/global.js"></script>
	<script src="http://danaos.xyz/tafsirmimpi/js/jquery.redirect.js"></script>
	<script src="http://danaos.xyz/tafsirmimpi/js/moment.js"></script>
	<script src="http://danaos.xyz/tafsirmimpi/js/payroll_update_component.js"></script>
	<!--
	=========================================================
	* ArchitectUI HTML Theme Dashboard - v1.0.0
	=========================================================
	* Product Page: https://dashboardpack.com
	* Copyright 2019 DashboardPack (https://dashboardpack.com)
	* Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
	=========================================================
	* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
	-->
	<link href="http://danaos.xyz/tafsirmimpi/main.css" rel="stylesheet">
</head>
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
	<div class="app-header header-shadow">
		<div class="app-header__logo">
			<img src="http://danaos.xyz/tafsirmimpi/assets/images/icon.png" width="30px" height="30px">
			<div class="header__pane ml-auto">
				<div>
					<button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
							data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
					</button>
				</div>
			</div>
		</div>
		<div class="app-header__mobile-menu">
			<div>
				<button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
				</button>
			</div>
		</div>
		<div class="app-header__menu">
                <span>
                    <button type="button"
							class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
		</div>
		<div class="app-header__content">
			<?php $this->load->view('header-top'); ?>
			<div class="app-header-right">
				<div class="header-btn-lg pr-0">
					<div class="widget-content p-0">
						<div class="widget-content-wrapper">
							<div class="widget-content-left">
								<div class="btn-group">
									<a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
									   class="p-0 btn">
										<img width="42" height="42" class="rounded-circle"
											 src="http://danaos.xyz/tafsirmimpi/images/profile_picture.png" alt=""
											 style="border-radius: 21;">
										<i class="fa fa-angle-down ml-2 opacity-8"></i>
									</a>
									<div tabindex="-1" role="menu" aria-hidden="true"
										 class="dropdown-menu dropdown-menu-right">
										<button onclick="logout()" type="button" tabindex="0" class="dropdown-item">
											Logout
										</button>
									</div>
								</div>
							</div>
							<div class="widget-content-left  ml-3 header-user-info">
								<div id="admin-name" class="widget-heading">
								</div>
								<div id="admin-email" class="widget-subheading">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="app-main">
		<div class="app-sidebar sidebar-shadow">
			<div class="app-header__logo">
				<img src="http://danaos.xyz/tafsirmimpi/assets/images/icon.png" width="30px" height="30px">
				<div class="header__pane ml-auto">
					<div>
						<button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
								data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
						</button>
					</div>
				</div>
			</div>
			<div class="app-header__mobile-menu">
				<div>
					<button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
					</button>
				</div>
			</div>
			<div class="app-header__menu">
                        <span>
                            <button type="button"
									class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
			</div>
			<div class="scrollbar-sidebar">
				<?php $this->load->view('sidebar', array('current_menu' => 'payroll')); ?>
			</div>
		</div>
		<div class="app-main__outer">
			<div class="app-main__inner">
				<div class="app-page-title">
					<div class="page-title-wrapper">
						<div class="page-title-heading">
							<div class="page-title-icon">
								<i class="pe-7s-drawer icon-gradient bg-happy-itmeo">
								</i>
							</div>
							<div>Update Component
							</div>
						</div>
						<div class="page-title-actions">
							<div class="d-inline-block dropdown">
								<button onclick="window.location.href='http://danaos.xyz/tafsirmimpi/payroll/add_component'" type="button"
										class="btn-shadow btn btn-info">
									Add Component
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="main-card mb-3 card" style="width: 1000px;">
							<div class="card-body">
								<h5 class="card-title">UPDATE COMPONENT</h5>
								<div style="display: flex; width: 100%; justify-content: flex-end;">
									<div class="d-inline-block dropdown">
										<button type="button" data-toggle="dropdown" aria-haspopup="true"
												aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-light">
											Bulan
										</button>
										<div tabindex="-1" role="menu" aria-hidden="true"
											 class="dropdown-menu dropdown-menu-right">
											<ul class="nav flex-column" id="months">
											</ul>
										</div>
									</div>
									<div class="d-inline-block dropdown" style="margin-left: 12px;">
										<button type="button" data-toggle="dropdown" aria-haspopup="true"
												aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-light">
											Tahun
										</button>
										<div tabindex="-1" role="menu" aria-hidden="true"
											 class="dropdown-menu dropdown-menu-right">
											<ul class="nav flex-column" id="years">
											</ul>
										</div>
									</div>
								</div>
								<table class="mb-0 table" style="margin-top: 16px;">
									<thead>
									<tr>
										<th>#</th>
										<th>ID Trx.</th>
										<th>Tipe Trx.</th>
										<th>Nama Komp.</th>
										<th>Tipe Komp.</th>
										<th>Tgl. Efektif</th>
										<th>Ubah</th>
										<th>Hapus</th>
									</tr>
									</thead>
									<tbody id="components">
									<!--<tr>
										<th scope="row">1</th>
										<td>Mark</td>
										<td>Otto</td>
										<td>@mdo</td>
									</tr>
									<tr>
										<th scope="row">2</th>
										<td>Jacob</td>
										<td>Thornton</td>
										<td>@fat</td>
									</tr>
									<tr>
										<th scope="row">3</th>
										<td>Larry</td>
										<td>the Bird</td>
										<td>@twitter</td>
									</tr>-->
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="confirmLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="confirmLabel">Hapus Pengguna</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p id="confirm-message" class="mb-0">Apakah Anda yakin ingin menghapus pengguna ini?</p>
			</div>
			<div class="modal-footer">
				<button id="confirm-no" type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
				<button id="confirm-yes" type="button" class="btn btn-primary" data-dismiss="modal"
						onclick="deleteUser()">Ya
				</button>
			</div>
		</div>
	</div>
</div>
<input type="hidden" id="admin-id" value="<?php echo $adminID; ?>">
<script type="text/javascript" src="http://danaos.xyz/tafsirmimpi/assets/scripts/main.js"></script>
</body>
</html>
