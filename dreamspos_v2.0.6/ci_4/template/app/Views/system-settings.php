<!DOCTYPE html>
<html lang="en">
    <head>
		<?= $this->include('partials/title-meta') ?>
		<?= $this->include('partials/head-css') ?>
    </head>
    <?= $this->include('partials/body') ?>
		<div id="global-loader">
			<div class="whirly-loader"> </div>
		</div>
		<!-- Main Wrapper -->
		<div class="main-wrapper">
    		<?= $this->include('partials/menu') ?>
    		<div class="page-wrapper">
				<div class="content settings-content">
					<div class="page-header settings-pg-header">
						<div class="add-item d-flex">
							<div class="page-title">
								<h4>Settings</h4>
								<h6>Manage your settings on portal</h6>
							</div>
						</div>
						<ul class="table-top-head">
							<li>
								<a data-bs-toggle="tooltip" data-bs-placement="top" title="Refresh"><i data-feather="rotate-ccw" class="feather-rotate-ccw"></i></a>
							</li>
							<li>
								<a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i data-feather="chevron-up" class="feather-chevron-up"></i></a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-xl-12">
							 <div class="settings-wrapper d-flex">
							 <?= $this->include('partials/settings-sidebar') ?>
								<div class="settings-page-wrap">
									<div class="setting-title">
										<h4>System Settings</h4>
									</div>
									<div class="row">
										<div class="col-xxl-4 col-xl-6 col-lg-12 col-md-6 d-flex">
											<div class="connected-app-card d-flex w-100">
												<ul class="w-100">
													<li class="flex-column align-items-start">
														<div class="d-flex align-items-center justify-content-between w-100">
															<div class="security-type d-flex align-items-center">
																<span class="system-app-icon">
																	<img src="<?php echo base_url(); ?>/assets/img/icons/app-icon-07.svg" alt="">
																</span>
																<div class="security-title">
																	<h5>Google Captcha</h5>
																</div>
															</div>
															<div class="status-toggle modal-status d-flex justify-content-between align-items-center ms-2">
																<input type="checkbox" id="user1" class="check" checked>
																<label for="user1" class="checktoggle">	</label>
															</div>
														</div>
														<p>Captcha helps protect you from spam and password decryption</p>
													</li>
													<li>
														<div class="integration-btn">
															<a href="" data-bs-toggle="modal" data-bs-target="#google-captcha"><i data-feather="tool" class="me-2"></i>View Integration</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-xxl-4 col-xl-6 col-lg-12 col-md-6 d-flex">
											<div class="connected-app-card d-flex w-100">
												<ul class="w-100">
													<li class="flex-column align-items-start">
														<div class="d-flex align-items-center justify-content-between w-100">
															<div class="security-type d-flex align-items-center">
																<span class="system-app-icon">
																	<img src="<?php echo base_url(); ?>/assets/img/icons/app-icon-08.svg" alt="">
																</span>
																<div class="security-title">
																	<h5>Google Analytics</h5>
																</div>
															</div>
															<div class="status-toggle modal-status d-flex justify-content-between align-items-center ms-2">
																<input type="checkbox" id="user2" class="check" checked>
																<label for="user2" class="checktoggle">	</label>
															</div>
														</div>
														<p>Provides statistics and basic analytical tools for SEO and marketing purposes.</p>
													</li>
													<li>
														<div class="integration-btn">
															<a href="" data-bs-toggle="modal" data-bs-target="#google-analytics"><i data-feather="tool" class="me-2"></i>View Integration</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-xxl-4 col-xl-6 col-lg-12 col-md-6 d-flex">
											<div class="connected-app-card d-flex w-100">
												<ul class="w-100">
													<li class="flex-column align-items-start">
														<div class="d-flex align-items-center justify-content-between w-100">
															<div class="security-type d-flex align-items-center">
																<span class="system-app-icon">
																	<img src="<?php echo base_url(); ?>/assets/img/icons/app-icon-09.svg" alt="">
																</span>
																<div class="security-title">
																	<h5>Google Adsense Code</h5>
																</div>
															</div>
															<div class="status-toggle modal-status d-flex justify-content-between align-items-center ms-2">
																<input type="checkbox" id="user3" class="check" checked>
																<label for="user3" class="checktoggle">	</label>
															</div>
														</div>
														<p>Provides a way for publishers to earn money from their online content.</p>
													</li>
													<li>
														<div class="integration-btn">
															<a href="" data-bs-toggle="modal" data-bs-target="#google-adsense"><i data-feather="tool" class="me-2"></i>View Integration</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-xxl-4 col-xl-6 col-lg-12 col-md-6 d-flex">
											<div class="connected-app-card d-flex w-100">
												<ul class="w-100">
													<li class="flex-column align-items-start">
														<div class="d-flex align-items-center justify-content-between w-100">
															<div class="security-type d-flex align-items-center">
																<span class="system-app-icon">
																	<img src="<?php echo base_url(); ?>/assets/img/icons/app-icon-10.svg" alt="">
																</span>
																<div class="security-title">
																	<h5>Google Map</h5>
																</div>
															</div>
															<div class="status-toggle modal-status d-flex justify-content-between align-items-center ms-2">
																<input type="checkbox" id="user4" class="check" checked>
																<label for="user4" class="checktoggle">	</label>
															</div>
														</div>
														<p>Provides detailed information about geographical regions and sites worldwide.</p>
													</li>
													<li>
														<div class="integration-btn">
															<a href="" data-bs-toggle="modal" data-bs-target="#google-map"><i data-feather="tool" class="me-2"></i>View Integration</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
									
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Main Wrapper -->
				<!-- Google Captcha -->
				<div class="modal fade" id="google-captcha">
			<div class="modal-dialog modal-dialog-centered custom-modal-two">
				<div class="modal-content">
					<div class="page-wrapper-new p-0">
						<div class="content">
							<div class="modal-header border-0 custom-modal-header">
								<div class="page-title">
									<h4>Configure Google Captcha</h4>
								</div>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body custom-modal-body">
								<form action="system-settings">
									<div class="row">
										<div class="col-lg-12">
											<div class="mb-3">
												<label class="form-label">Google Rechaptcha Site Key <span> *</span></label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="mb-0">
												<label class="form-label">Google Rechaptcha Secret Key <span> *</span></label>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
									<div class="modal-footer-btn">
										<button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-submit">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Google Captcha -->

		<!-- Google Analytics -->
		<div class="modal fade" id="google-analytics">
			<div class="modal-dialog modal-dialog-centered custom-modal-two">
				<div class="modal-content">
					<div class="page-wrapper-new p-0">
						<div class="content">
							<div class="modal-header border-0 custom-modal-header">
								<div class="page-title">
									<h4>Configure Google Analytics</h4>
								</div>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body custom-modal-body">
								<form action="system-settings">
									<div class="row">
										<div class="col-lg-12">
											<div class="mb-0">
												<label class="form-label">Google Analytics <span> *</span></label>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
									<div class="modal-footer-btn">
										<button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-submit">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Google Analytics -->

		<!-- Google Adsense -->
		<div class="modal fade" id="google-adsense">
			<div class="modal-dialog modal-dialog-centered custom-modal-two">
				<div class="modal-content">
					<div class="page-wrapper-new p-0">
						<div class="content">
							<div class="modal-header border-0 custom-modal-header">
								<div class="page-title">
									<h4>Configure Google Adsense Code</h4>
								</div>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body custom-modal-body">
								<form action="system-settings">
									<div class="row">
										<div class="col-lg-12">
											<div class="mb-0">
												<label class="form-label">Google Adsense Code <span> *</span></label>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
									<div class="modal-footer-btn">
										<button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-submit">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Google Adsense -->

		<!-- Google Adsense -->
		<div class="modal fade" id="google-map">
			<div class="modal-dialog modal-dialog-centered custom-modal-two">
				<div class="modal-content">
					<div class="page-wrapper-new p-0">
						<div class="content">
							<div class="modal-header border-0 custom-modal-header">
								<div class="page-title">
									<h4>Configure  Google Map ID</h4>
								</div>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body custom-modal-body">
								<form action="system-settings">
									<div class="row">
										<div class="col-lg-12">
											<div class="mb-0">
												<label class="form-label">Enter Map ID <span> *</span></label>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
									<div class="modal-footer-btn">
										<button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-submit">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Google Adsense -->
		<?= $this->include('partials/theme-settings') ?>
        <?= $this->include('partials/vendor-scripts') ?>
    </body>
</html>