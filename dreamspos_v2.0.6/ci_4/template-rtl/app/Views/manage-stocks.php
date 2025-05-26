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
						<div class="content">
							<div class="page-header">
								<div class="add-item d-flex">
									<div class="page-title">
										<h4>Manage Stock</h4>
										<h6>Manage your stock</h6>
									</div>							
								</div>
								<ul class="table-top-head">
									<li>
										<a data-bs-toggle="tooltip" data-bs-placement="top" title="Pdf"><img src="<?php echo base_url(); ?>/assets/img/icons/pdf.svg" alt="img"></a>
									</li>
									<li>
										<a data-bs-toggle="tooltip" data-bs-placement="top" title="Excel"><img src="<?php echo base_url(); ?>/assets/img/icons/excel.svg" alt="img"></a>
									</li>
									<li>
										<a data-bs-toggle="tooltip" data-bs-placement="top" title="Print"><i data-feather="printer" class="feather-rotate-ccw"></i></a>
									</li>
									<li>
										<a data-bs-toggle="tooltip" data-bs-placement="top" title="Refresh"><i data-feather="rotate-ccw" class="feather-rotate-ccw"></i></a>
									</li>
									<li>
										<a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i data-feather="chevron-up" class="feather-chevron-up"></i></a>
									</li>
								</ul>
								<div class="page-btn">
									<a href="#" class="btn btn-added" data-bs-toggle="modal" data-bs-target="#add-units"><i data-feather="plus-circle" class="me-2"></i>Add New</a>
								</div>
							</div>
							<!-- /product list -->
							<div class="card table-list-card">
								<div class="card-body">
									<div class="table-top">
										<div class="search-set">
											<div class="search-input">
												<a href="" class="btn btn-searchset"><i data-feather="search" class="feather-search"></i></a>
											</div>
										</div>
										<div class="search-path">
											<div class="d-flex align-items-center">
												<a class="btn btn-filter" id="filter_search">
													<i data-feather="filter" class="filter-icon"></i>
													<span><img src="<?php echo base_url(); ?>/assets/img/icons/closes.svg" alt="img"></span>
												</a>
												<div class="layout-hide-box">
													<a href="javascript:void(0);" class="me-3 layout-box"><i data-feather="layout" class="feather-search feather-20"></i></a>
													<div class="layout-drop-item card">
														<div class="drop-item-head">
															<h5>Want to manage datatable?</h5>
															<p>Please drag and drop your column to reorder your table and enable see option as you want.</p>
														</div>
														<ul>
															<li>
																<div class="status-toggle modal-status d-flex justify-content-between align-items-center">
																	<span class="status-label"><i data-feather="menu" class="feather-menu"></i>Shop</span>
																	<input type="checkbox" id="option1" class="check" checked>
																	<label for="option1" class="checktoggle">	</label>
																</div>
															</li>
															<li>
																<div class="status-toggle modal-status d-flex justify-content-between align-items-center">
																	<span class="status-label"><i data-feather="menu" class="feather-menu"></i>Product</span>
																	<input type="checkbox" id="option2" class="check" checked>
																	<label for="option2" class="checktoggle">	</label>
																</div>
															</li>
															<li>
																<div class="status-toggle modal-status d-flex justify-content-between align-items-center">
																	<span class="status-label"><i data-feather="menu" class="feather-menu"></i>Reference No</span>
																	<input type="checkbox" id="option3" class="check" checked>
																	<label for="option3" class="checktoggle">	</label>
																</div>
															</li>
															<li>
																<div class="status-toggle modal-status d-flex justify-content-between align-items-center">
																	<span class="status-label"><i data-feather="menu" class="feather-menu"></i>Date</span>
																	<input type="checkbox" id="option4" class="check" checked>
																	<label for="option4" class="checktoggle">	</label>
																</div>
															</li>
															<li>
																<div class="status-toggle modal-status d-flex justify-content-between align-items-center">
																	<span class="status-label"><i data-feather="menu" class="feather-menu"></i>Responsible Person</span>
																	<input type="checkbox" id="option5" class="check" checked>
																	<label for="option5" class="checktoggle">	</label>
																</div>
															</li>
															<li>
																<div class="status-toggle modal-status d-flex justify-content-between align-items-center">
																	<span class="status-label"><i data-feather="menu" class="feather-menu"></i>Notes</span>
																	<input type="checkbox" id="option6" class="check" checked>
																	<label for="option6" class="checktoggle">	</label>
																</div>
															</li>
															<li>
																<div class="status-toggle modal-status d-flex justify-content-between align-items-center">
																	<span class="status-label"><i data-feather="menu" class="feather-menu"></i>Quantity</span>
																	<input type="checkbox" id="option7" class="check" checked>
																	<label for="option7" class="checktoggle">	</label>
																</div>
															</li>
															<li>
																<div class="status-toggle modal-status d-flex justify-content-between align-items-center">
																	<span class="status-label"><i data-feather="menu" class="feather-menu"></i>Actions</span>
																	<input type="checkbox" id="option8" class="check" checked>
																	<label for="option8" class="checktoggle">	</label>
																</div>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<div class="form-sort">
											<i data-feather="sliders" class="info-img"></i>
											<select class="select">
												<option>Sort by Date</option>
												<option>Newest</option>
												<option>Oldest</option>
											</select>
										</div>
									</div>
									<!-- /Filter -->
									<div class="card" id="filter_inputs">
										<div class="card-body pb-0">
											<div class="row">
												<div class="col-lg-2 col-sm-6 col-12">
													<div class="input-blocks">
														<i data-feather="archive" class="info-img"></i>
														<select class="select">
															<option>Choose Warehouse</option>
															<option>Lobar Handy</option>
															<option>Quaint Warehouse</option>
															<option>Traditional Warehouse</option>
															<option>Cool Warehouse</option>
														</select>
													</div>
												</div>
												<div class="col-lg-2 col-sm-6 col-12">
													<div class="input-blocks">
														<i data-feather="box" class="info-img"></i>
														<select class="select">
															<option>Choose Product</option>
															<option>Nike Jordan</option>
															<option>Apple Series 5 Watch</option>
															<option>Amazon Echo Dot</option>
															<option>Lobar Handy</option>
														</select>
													</div>
												</div>
												<div class="col-lg-2 col-sm-6 col-12">
													<div class="input-blocks">
														<i data-feather="calendar" class="info-img"></i>
														<div class="input-groupicon">
															<input type="text" class="datetimepicker" placeholder="Choose Date" >
														</div>
													</div>
												</div>
												<div class="col-lg-2 col-sm-6 col-12">
													<div class="input-blocks">
														<i data-feather="user" class="info-img"></i>
														<select class="select">
															<option>Choose Person</option>
															<option>Steven</option>
															<option>Gravely</option>
														</select>
													</div>
												</div>
												<div class="col-lg-4 col-sm-6 col-12 ms-auto">
													<div class="input-blocks">
														<a class="btn btn-filters ms-auto"> <i data-feather="search" class="feather-search"></i> Search </a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /Filter -->
									<div class="table-responsive">
										<table class="table  datanew">
											<thead>
												<tr>
													<th class="no-sort">
														<label class="checkboxs">
															<input type="checkbox" id="select-all">
															<span class="checkmarks"></span>
														</label>
													</th>
													<th>Warehouse</th>
													<th>Shop</th>
													<th>Product</th>
													<th>Date</th>
													<th>Person</th>
													<th>Quantity</th>
													<th class="no-sort">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<label class="checkboxs">
															<input type="checkbox">
															<span class="checkmarks"></span>
														</label>
													</td>
													<td>Lobar Handy </td>
													<td>Selosy </td>
													<td>
														<div class="productimgname">
															<a href="javascript:void(0);" class="product-img stock-img">
																<img src="<?php echo base_url(); ?>/assets/img/products/stock-img-02.png" alt="product">
															</a>
															<a href="javascript:void(0);">Nike Jordan</a>
														</div>												
													</td>
													<td>25 Jul 2023</td>
													<td>
														<div class="userimgname">
															<a href="javascript:void(0);" class="product-img">
																<img src="<?php echo base_url(); ?>/assets/img/users/user-08.jpg" alt="product">
															</a>
															<a href="javascript:void(0);">Steven</a>
														</div>
													</td>
													<td>120</td>
													<td class="action-table-data">
														<div class="edit-delete-action">
															<a class="me-2 p-2" href="#" data-bs-toggle="modal" data-bs-target="#edit-units">
																<i data-feather="edit" class="feather-edit"></i>
															</a>
															<a class="confirm-text p-2" href="javascript:void(0);">
																<i data-feather="trash-2" class="feather-trash-2"></i>
															</a>
														</div>
														
													</td>
												</tr>
												<tr>
													<td>
														<label class="checkboxs">
															<input type="checkbox">
															<span class="checkmarks"></span>
														</label>
													</td>
													<td>Quaint Warehouse </td>
													<td>Logerro </td>
													<td>
														<div class="productimgname">
															<a href="javascript:void(0);" class="product-img stock-img">
																<img src="<?php echo base_url(); ?>/assets/img/products/stock-img-03.png" alt="product">
															</a>
															<a href="javascript:void(0);">Apple Series 5 Watch</a>
														</div>												
													</td>
													<td>28 Jul 2023</td>
													<td>
														<div class="userimgname">
															<a href="javascript:void(0);" class="product-img">
																<img src="<?php echo base_url(); ?>/assets/img/users/user-04.jpg" alt="product">
															</a>
															<a href="javascript:void(0);">Gravely</a>
														</div>
													</td>
													<td>130</td>
													<td class="action-table-data">
														<div class="edit-delete-action">
															<a class="me-2 p-2" href="#" data-bs-toggle="modal" data-bs-target="#edit-units">
																<i data-feather="edit" class="feather-edit"></i>
															</a>
															<a class="confirm-text p-2" href="javascript:void(0);">
																<i data-feather="trash-2" class="feather-trash-2"></i>
															</a>
														</div>
														
													</td>
												</tr>
												<tr>
													<td>
														<label class="checkboxs">
															<input type="checkbox">
															<span class="checkmarks"></span>
														</label>
													</td>
													<td>Traditional Warehouse </td>
													<td>Vesloo </td>
													<td>
														<div class="productimgname">
															<a href="javascript:void(0);" class="product-img stock-img">
																<img src="<?php echo base_url(); ?>/assets/img/products/stock-img-04.png" alt="product">
															</a>
															<a href="javascript:void(0);">Amazon Echo Dot</a>
														</div>												
													</td>
													<td>24 Jul 2023</td>
													<td>
														<div class="userimgname">
															<a href="javascript:void(0);" class="product-img">
																<img src="<?php echo base_url(); ?>/assets/img/users/user-09.jpg" alt="product">
															</a>
															<a href="javascript:void(0);">Kevin</a>
														</div>
													</td>
													<td>140</td>
													<td class="action-table-data">
														<div class="edit-delete-action">
															<a class="me-2 p-2" href="#" data-bs-toggle="modal" data-bs-target="#edit-units">
																<i data-feather="edit" class="feather-edit"></i>
															</a>
															<a class="confirm-text p-2" href="javascript:void(0);">
																<i data-feather="trash-2" class="feather-trash-2"></i>
															</a>
														</div>
														
													</td>
												</tr>
												<tr>
													<td>
														<label class="checkboxs">
															<input type="checkbox">
															<span class="checkmarks"></span>
														</label>
													</td>
													<td>Cool Warehouse </td>
													<td>Crompy</td>
													<td>
														<div class="productimgname">
															<a href="javascript:void(0);" class="product-img stock-img">
																<img src="<?php echo base_url(); ?>/assets/img/products/stock-img-05.png" alt="product">
															</a>
															<a href="javascript:void(0);">Lobar Handy</a>
														</div>												
													</td>
													<td>15 Jul 2023</td>
													<td>
														<div class="userimgname">
															<a href="javascript:void(0);" class="product-img">
																<img src="<?php echo base_url(); ?>/assets/img/users/user-10.jpg" alt="product">
															</a>
															<a href="javascript:void(0);">Grillo</a>
														</div>
													</td>
													<td>150</td>
													<td class="action-table-data">
														<div class="edit-delete-action">
															<a class="me-2 p-2" href="#" data-bs-toggle="modal" data-bs-target="#edit-units">
																<i data-feather="edit" class="feather-edit"></i>
															</a>
															<a class="confirm-text p-2" href="javascript:void(0);">
																<i data-feather="trash-2" class="feather-trash-2"></i>
															</a>
														</div>
														
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- /product list -->
						</div>
			</div>
		</div>
    	<!-- /Main Wrapper -->
				<!-- Add Stock -->
				<div class="modal fade" id="add-units">
			<div class="modal-dialog modal-dialog-centered stock-adjust-modal">
				<div class="modal-content">
					<div class="page-wrapper-new p-0">
						<div class="content">
							<div class="modal-header border-0 custom-modal-header">
								<div class="page-title">
									<h4>Add Stock</h4>
								</div>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body custom-modal-body">
								<form action="manage-stocks">
									<div class="row">
										<div class="col-lg-6">
											<div class="input-blocks">
												<label>Warehouse</label>
												<select class="select">
													<option>Choose</option>
													<option>Lobar Handy</option>
													<option>Quaint Warehouse</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="input-blocks">
												<label>Shop</label>
												<select class="select">
													<option>Choose</option>
													<option>Selosy</option>
													<option>Logerro</option>
												</select>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="input-blocks">
												<label>Responsible Person</label>
												<select class="select">
													<option>Choose</option>
													<option>Steven</option>
													<option>Gravely</option>
												</select>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="input-blocks search-form mb-0">
												<label>Product</label>
												<input type="text" class="form-control" placeholder="Select Product">
												<i data-feather="search" class="feather-search"></i>
											</div>
										</div>
									</div>
									<div class="modal-footer-btn">
										<button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-submit">Create</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Stock -->

		<!-- Edit Stock -->
		<div class="modal fade" id="edit-units">
			<div class="modal-dialog modal-dialog-centered stock-adjust-modal">
				<div class="modal-content">
					<div class="page-wrapper-new p-0">
						<div class="content">
							<div class="modal-header border-0 custom-modal-header">
								<div class="page-title">
									<h4>Edit Stock</h4>
								</div>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body custom-modal-body">
								<form action="manage-stocks">
									<div class="input-blocks search-form">
										<label>Product</label>
										<input type="text" class="form-control" value="Nike Jordan">
										<i data-feather="search" class="feather-search"></i>
									</div>
									<div class="row">
										<div class="col-lg-6">
											<div class="input-blocks">
												<label>Warehouse</label>
												<select class="select">
													<option>Lobar Handy</option>
													<option>Quaint Warehouse</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="input-blocks">
												<label>Shop</label>
												<select class="select">
													<option>Selosy</option>
													<option>Logerro</option>
												</select>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="input-blocks">
												<label>Responsible Person</label>
												<select class="select">
													<option>Steven</option>
													<option>Gravely</option>
												</select>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="input-blocks search-form mb-3">
												<label>Product</label>
												<input type="text" class="form-control" placeholder="Select Product" value="Nike Jordan">
												<i data-feather="search" class="feather-search"></i>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="modal-body-table">
												<div class="table-responsive">
													<table class="table  datanew">
														<thead>
															<tr>
																<th>Product</th>
																<th>SKU</th>
																<th>Category</th>
																<th>Qty</th>
																<th class="no-sort">Action</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>
																	<div class="productimgname">
																		<a href="javascript:void(0);" class="product-img stock-img">
																			<img src="<?php echo base_url(); ?>/assets/img/products/stock-img-02.png" alt="product">
																		</a>
																		<a href="javascript:void(0);">Nike Jordan</a>
																	</div>												
																</td>
																<td>PT002</td>
																<td>Nike</td>
																<td>
																	<div class="product-quantity">
																		<span class="quantity-btn"><i data-feather="minus-circle" class="feather-search"></i></span>
																		<input type="text" class="quntity-input" value="2">
																		<span class="quantity-btn">+<i data-feather="plus-circle" class="plus-circle"></i></span>
																	</div>
																</td>
																<td class="action-table-data">
																	<div class="edit-delete-action">
																		<a class="me-2 p-2" href="#" data-bs-toggle="modal" data-bs-target="#edit-units">
																			<i data-feather="edit" class="feather-edit"></i>
																		</a>
																		<a class="confirm-text p-2" href="javascript:void(0);">
																			<i data-feather="trash-2" class="feather-trash-2"></i>
																		</a>
																	</div>
																	
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
									<div class="modal-footer-btn">
										<button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-submit">Save Changes</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Edit Stock -->
    	<?= $this->include('partials/theme-settings') ?>
        <?= $this->include('partials/vendor-scripts') ?>
        
    </body>
</html>