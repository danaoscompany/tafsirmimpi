<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Language" content="en">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Lihat Pencari Kerja</title>
	<meta name="viewport"
		  content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>
	<meta name="description" content="Build whatever layout you need with our Architect framework.">
	<meta name="msapplication-tap-highlight" content="no">
	<script src="http://0fcf2098e08f.ngrok.io/tafsirmimpi/js/jquery.js"></script>
	<script src="http://0fcf2098e08f.ngrok.io/tafsirmimpi/js/jquery.redirect.js"></script>
	<script src="http://0fcf2098e08f.ngrok.io/tafsirmimpi/js/global.js"></script>
	<script src="http://0fcf2098e08f.ngrok.io/tafsirmimpi/js/view-user.js"></script>
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
	<link href="http://0fcf2098e08f.ngrok.io/tafsirmimpi/main.css" rel="stylesheet">
</head>
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
	<div class="app-header header-shadow">
		<div class="app-header__logo">
			<img src="http://0fcf2098e08f.ngrok.io/tafsirmimpi/assets/images/icon.png" width="30px" height="30px">
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
										<img width="42" height="42" class="rounded-circle" src="http://0fcf2098e08f.ngrok.io/tafsirmimpi/images/profile_picture.png" alt="" style="border-radius: 21;">
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
				<img src="http://0fcf2098e08f.ngrok.io/tafsirmimpi/assets/images/icon.png" width="30px" height="30px">
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
				<?php $this->load->view('sidebar', array('current_menu' => 'user')); ?>
			</div>
		</div>
		<div class="app-main__outer">
			<div class="app-main__inner">
				<div class="app-page-title">
					<div class="page-title-wrapper">
						<div class="page-title-heading">
							<div class="page-title-icon">
								<i class="pe-7s-graph text-success">
								</i>
							</div>
							<div>Lihat Pencari Kerja
							</div>
						</div>
					</div>
				</div>
				<div class="tab-content">
					<div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
						<div class="main-card mb-3 card">
							<div class="card-body"><h5 class="card-title">LIHAT PENCARI KERJA</h5>
								<div style="width: 100%; display: flex; flex-direction: row; justify-content: center;">
									<img id="profile-picture" src="" width="200px" height="200px">
								</div>
								<div class="position-relative form-group"><label for="email" class="">Email</label>
									<input name="email" id="email" placeholder="Masukkan email"
										   type="email" class="form-control">
								</div>
								<div class="position-relative form-group"><label for="password" class="">Kata Sandi</label>
									<input name="password" id="password" placeholder="Masukkan kata sandi"
										   type="password" class="form-control">
								</div>
								<div class="position-relative form-group"><label for="first-name" class="">Nama Depan</label>
									<input name="first-name" id="first-name" placeholder="Masukkan nama depan"
										   type="text" class="form-control">
								</div>
								<div class="position-relative form-group"><label for="last-name" class="">Nama Belakang</label>
									<input name="last-name" id="last-name" placeholder="Masukkan nama belakang"
										   type="text" class="form-control">
								</div>
								<div class="position-relative form-group"><label for="phone" class="">Nomor HP</label>
									<input name="phone" id="phone" placeholder="Masukkan nomor HP"
										   type="text" class="form-control">
								</div>
								<div class="position-relative form-group"><label for="address" class="">Alamat</label>
									<input name="address" id="address" placeholder="Masukkan alamat"
										   type="text" class="form-control">
								</div>
								<div class="position-relative form-group"><label for="expected-salary" class="">Gaji Diharapkan</label>
									<input name="expected-salary" id="expected-salary" placeholder="Masukkan gaji diharapkan"
										   type="text" class="form-control">
								</div>
								<div class="position-relative form-group"><label for="expected-work-location" class="">Lokasi Kerja</label>
									<input name="expected-work-location" id="expected-work-location" placeholder="Masukkan gaji diharapkan"
										   type="text" class="form-control">
								</div>
								<div class="position-relative form-group"><label for="additional-info" class="">Info Tambahan</label>
									<input name="additional-info" id="additional-info" placeholder="Masukkan info tambahan"
										   type="text" class="form-control">
								</div>
								<div class="position-relative form-group"><label for="additional-info" class="">Resume</label>
									<button class="mt-2 btn btn-danger" style="" onclick="viewResume()">Lihat
									</button>
								</div>
								<div style="width: 100%; display: flex; flex-direction: row;">
									<button class="mt-2 btn btn-danger" style="width: 100%;" onclick="cancelEditing()">Kembali
									</button>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
						<div class="main-card mb-3 card">
							<div class="card-body"><h5 class="card-title">Grid</h5>
								<form class="">
									<div class="position-relative row form-group"><label for="exampleEmail"
																						 class="col-sm-2 col-form-label">Email</label>
										<div class="col-sm-10"><input name="email" id="exampleEmail"
																	  placeholder="with a placeholder" type="email"
																	  class="form-control"></div>
									</div>
									<div class="position-relative row form-group"><label for="examplePassword"
																						 class="col-sm-2 col-form-label">Password</label>
										<div class="col-sm-10"><input name="password" id="examplePassword"
																	  placeholder="password placeholder" type="password"
																	  class="form-control"></div>
									</div>
									<div class="position-relative row form-group"><label for="exampleSelect"
																						 class="col-sm-2 col-form-label">Select</label>
										<div class="col-sm-10"><select name="select" id="exampleSelect"
																	   class="form-control"></select></div>
									</div>
									<div class="position-relative row form-group"><label for="exampleSelectMulti"
																						 class="col-sm-2 col-form-label">Select
											Multiple</label>
										<div class="col-sm-10"><select multiple="" name="selectMulti"
																	   id="exampleSelectMulti"
																	   class="form-control"></select></div>
									</div>
									<div class="position-relative row form-group"><label for="exampleText"
																						 class="col-sm-2 col-form-label">Text
											Area</label>
										<div class="col-sm-10"><textarea name="text" id="exampleText"
																		 class="form-control"></textarea></div>
									</div>
									<div class="position-relative row form-group"><label for="exampleFile"
																						 class="col-sm-2 col-form-label">File</label>
										<div class="col-sm-10"><input name="file" id="exampleFile" type="file"
																	  class="form-control-file">
											<small class="form-text text-muted">This is some placeholder block-level
												help text for the above input. It's a bit lighter and easily wraps to a
												new line.</small>
										</div>
									</div>
									<fieldset class="position-relative row form-group">
										<legend class="col-form-label col-sm-2">Radio Buttons</legend>
										<div class="col-sm-10">
											<div class="position-relative form-check"><label
														class="form-check-label"><input name="radio2" type="radio"
																						class="form-check-input"> Option one
													is this and that—be sure to include why it's great</label></div>
											<div class="position-relative form-check"><label
														class="form-check-label"><input name="radio2" type="radio"
																						class="form-check-input"> Option two
													can be something else and selecting it will deselect option
													one</label></div>
											<div class="position-relative form-check disabled"><label
														class="form-check-label"><input name="radio2" disabled=""
																						type="radio"
																						class="form-check-input"> Option
													three is disabled</label></div>
										</div>
									</fieldset>
									<div class="position-relative row form-group"><label for="checkbox2"
																						 class="col-sm-2 col-form-label">Checkbox</label>
										<div class="col-sm-10">
											<div class="position-relative form-check"><label
														class="form-check-label"><input id="checkbox2" type="checkbox"
																						class="form-check-input"> Check me
													out</label></div>
										</div>
									</div>
									<div class="position-relative row form-check">
										<div class="col-sm-10 offset-sm-2">
											<button class="btn btn-secondary">Submit</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<input id="admin-id" type="hidden" value="<?php echo $adminID; ?>">
<input id="user-id" type="hidden" value="<?php echo $userID; ?>">
<script type="text/javascript" src="http://0fcf2098e08f.ngrok.io/tafsirmimpi/assets/scripts/main.js"></script>
</body>
</html>
