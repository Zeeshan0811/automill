<!-- Page header -->
<div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Sub Category</span> - List</h4>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>

        <div class="header-elements d-none">
            <div class="d-flex justify-content-center">
                <!-- <a href="#" class="btn btn-link btn-float text-default"><i class="icon-add text-primary"></i><span>Add New</span></a> -->
            </div>
        </div>
    </div>

    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Dashboard</a>
                <span class="breadcrumb-item active">Sub Category</span>
            </div>

            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>

        <div class="header-elements d-none">
            <div class="breadcrumb justify-content-center">
                <a href="#" class="breadcrumb-elements-item" data-toggle="modal" data-target="#modal_theme_primary">
                    <i class="icon-add mr-2"></i>
                    Add New
                </a>
            </div>
        </div>
    </div>
</div>
<!-- /page header -->


<!-- Content area -->
<div class="content">
    <!-- Dashboard content -->
    <div class="row justify-content-md-center">
        <div class="col-md-8">
            <!-- Hover rows -->
				<div class="card">
					<table class="table datatable-basic table-hover">
						<thead>
							<tr>
								<th>SL.</th>
								<th>Category</th>
								<th>Sub Category</th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
                            <?php $i=0; foreach($subcategories as $subcategory){ $i++; ?>
							<tr>
                                <td><?php echo $i; ?></td>
								<td><?php echo $subcategory->category; ?></td>
								<td><?php echo $subcategory->title; ?></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-pencil5"></i> Edit</a>
												<a href="#" class="dropdown-item"><i class="icon-bin"></i> Delete</a>
											</div>
										</div>
									</div>
								</td>
                            </tr>
                            <?php } ?>
						</tbody>
					</table>
				</div>
				<!-- /hover rows -->
        </div>
    </div>
    <!-- /dashboard content -->

</div>
<!-- /content area -->

<!-- Primary modal -->
<div id="modal_theme_primary" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h6 class="modal-title">New Sub-Category</h6>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form action="<?php echo base_url('category'); ?>">
                    <div class="form-group">
                        <label>Sub Category Title:</label>
                        <input type="text" class="form-control" name="cat_title" placeholder="Title of the sub category" required>
                    </div>
                    <div class="form-group">
                        <label>Description:</label>
                        <textarea rows="5" cols="5" class="form-control" name="cat_description" placeholder="Note about the sub category" required></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6 text-left">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                        <div class="col-md-6 text-right">
                            <button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /primary modal -->

