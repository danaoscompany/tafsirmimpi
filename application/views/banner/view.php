<?php
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Language" content="en">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Lihat Banner</title>
	<meta name="viewport"
		  content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>
	<meta name="description" content="Tables are the backbone of almost all web applications.">
	<meta name="msapplication-tap-highlight" content="no">
	<script src="http://apps.n29itech.xyz/tafsir_mimpi/js/jquery.js"></script>
	<script src="http://apps.n29itech.xyz/tafsir_mimpi/js/global.js"></script>
	<script src="http://apps.n29itech.xyz/tafsir_mimpi/js/jquery.redirect.js"></script>
	<script src="http://apps.n29itech.xyz/tafsir_mimpi/js/moment.js"></script>
	<script src="http://apps.n29itech.xyz/tafsir_mimpi/js/view-banner.js"></script>
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
	<link href="http://apps.n29itech.xyz/tafsir_mimpi/main.css" rel="stylesheet">
</head>
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
	<div class="app-header header-shadow">
		<div class="app-header__logo">
			<img src="http://apps.n29itech.xyz/tafsir_mimpi/assets/images/icon.png" width="30px" height="30px">
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
			<div class="app-header-left">
				<ul class="header-menu nav">
					<li class="nav-item">
						<a href="http://apps.n29itech.xyz/tafsir_mimpi/admin" class="nav-link">
							<i class="nav-link-icon fa fa-users-cog"> </i>
							Admin
						</a>
					</li>
					<li class="btn-group nav-item">
						<a href="http://apps.n29itech.xyz/tafsir_mimpi/user" class="nav-link">
							<i class="nav-link-icon fa fa-user"></i>
							User
						</a>
					</li>
					<li class="btn-group nav-item">
						<a href="http://apps.n29itech.xyz/tafsir_mimpi/banner" class="nav-link">
							<i class="nav-link-icon fa fa-bookmark"></i>
							Banner
						</a>
					</li>
					<li class="btn-group nav-item">
						<a href="http://apps.n29itech.xyz/tafsir_mimpi/store" class="nav-link">
							<i class="nav-link-icon fa fa-store"></i>
							Toko
						</a>
					</li>
					<li class="btn-group nav-item">
						<a href="http://apps.n29itech.xyz/tafsir_mimpi/product" class="nav-link">
							<i class="nav-link-icon fa fa-box-open"></i>
							Produk
						</a>
					</li>
					<li class="btn-group nav-item">
						<a href="http://apps.n29itech.xyz/tafsir_mimpi/news" class="nav-link">
							<i class="nav-link-icon fa fa-newspaper"></i>
							Berita
						</a>
					</li>
					<li class="btn-group nav-item">
						<a href="http://apps.n29itech.xyz/tafsir_mimpi/message" class="nav-link">
							<i class="nav-link-icon fa fa-envelope"></i>
							Pesan
						</a>
					</li>
					<li class="btn-group nav-item">
						<a href="http://apps.n29itech.xyz/tafsir_mimpi/settings" class="nav-link">
							<i class="nav-link-icon fa fa-tools"></i>
							Pengaturan
						</a>
					</li>
					<li class="dropdown nav-item">
						<a href="http://apps.n29itech.xyz/tafsir_mimpi/logout" class="nav-link">
							<i class="nav-link-icon fa fa-sign-out-alt"></i>
							Logout
						</a>
					</li>
				</ul>
			</div>
			<div class="app-header-right">
				<div class="header-btn-lg pr-0">
					<div class="widget-content p-0">
						<div class="widget-content-wrapper">
							<div class="widget-content-left">
								<div class="btn-group">
									<a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
									   class="p-0 btn">
										<img width="42" height="42" class="rounded-circle" src="http://apps.n29itech.xyz/tafsir_mimpi/images/profile_picture.png" alt="" style="border-radius: 21;">
										<i class="fa fa-angle-down ml-2 opacity-8"></i>
									</a>
									<div tabindex="-1" role="menu" aria-hidden="true"
										 class="dropdown-menu dropdown-menu-right">
										<button onclick="logout()" type="button" tabindex="0" class="dropdown-item">Logout</button>
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
				<img src="http://apps.n29itech.xyz/tafsir_mimpi/assets/images/icon.png" width="30px" height="30px">
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
				<div class="app-sidebar__inner">
					<ul class="vertical-nav-menu">
						<li>
						<li>
							<a href="http://apps.n29itech.xyz/tafsir_mimpi/admin">
								<i class="metismenu-icon pe-7s-users"></i>
								Admin
							</a>
						</li>
						<li>
							<a href="http://apps.n29itech.xyz/tafsir_mimpi/user">
								<i class="metismenu-icon pe-7s-users"></i>
								User
							</a>
						</li>
						<li class="mm-active">
							<a href="http://apps.n29itech.xyz/tafsir_mimpi/banner">
								<i class="metismenu-icon pe-7s-flag"></i>
								Banner
							</a>
						</li>
						<li>
							<a href="http://apps.n29itech.xyz/tafsir_mimpi/store">
								<i class="metismenu-icon pe-7s-shopbag"></i>
								Toko
							</a>
						</li>
						<li>
							<a href="http://apps.n29itech.xyz/tafsir_mimpi/product">
								<i class="metismenu-icon pe-7s-cart"></i>
								Produk
							</a>
						</li>
						<li>
							<a href="http://apps.n29itech.xyz/tafsir_mimpi/news">
								<i class="metismenu-icon pe-7s-news-paper"></i>
								Berita
							</a>

						<li>
							<a href="http://apps.n29itech.xyz/tafsir_mimpi/message">
								<i class="metismenu-icon pe-7s-mail-open"></i>
								Pesan
							</a>
						</li>
						<li>
							<a href="http://apps.n29itech.xyz/tafsir_mimpi/settings">
								<i class="metismenu-icon pe-7s-settings"></i>
								Pengaturan
							</a>
						</li>
						<li>
							<a href="http://apps.n29itech.xyz/tafsir_mimpi/logout">
								<i class="metismenu-icon pe-7s-close-circle"></i>
								Keluar
							</a>
						</li>
					</ul>
				</div>
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
							<div>Lihat Banner
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="main-card mb-3 card" style="width: 1000px;">
							<div class="card-body">
								<h5 class="card-title">LIHAT BANNER</h5>
								<div style="width: 100%; height: 100%; display: flex; justify-content: center;">
									<img id="banner-img" width="500px" height="500px">
								</div>
								<button onclick="window.history.back()" type="button" class="btn btn-danger" style="width: 100%; margin-top: 20px;">Kembali</button>
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
				<h5 class="modal-title" id="confirmLabel">Delete User</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p id="confirm-message" class="mb-0">Are you sure you want to delete this user?</p>
			</div>
			<div class="modal-footer">
				<button id="confirm-no" type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
				<button id="confirm-yes" type="button" class="btn btn-primary" data-dismiss="modal" onclick="deleteUser()">Yes</button>
			</div>
		</div>
	</div>
</div>
<input type="hidden" id="admin-id" value="<?php echo $adminID; ?>">
<input type="hidden" id="banner-id" value="<?php echo $bannerID; ?>">
<script type="text/javascript" src="http://apps.n29itech.xyz/tafsir_mimpi/assets/scripts/main.js"></script>
</body>
</html>
