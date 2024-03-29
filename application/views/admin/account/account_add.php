<!-- Page header -->
<div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Account</span> - Add</h4>
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
                <span class="breadcrumb-item active">Add Account</span>
            </div>

            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>

        <div class="header-elements d-none">
            <div class="breadcrumb justify-content-center">
                <!-- <a href="#" class="breadcrumb-elements-item" data-toggle="modal" data-target="#modal_theme_primary">
                    <i class="icon-add mr-2"></i>
                    Add New
                </a> -->
            </div>
        </div>
    </div>
</div>
<!-- /page header -->


<!-- Content area -->
<div class="content">
    <!-- Dashboard content -->
    <div class="row justify-content-md-center">
        <div class="col-md-12">
            <!-- Hover rows -->
            <div class="card">
                <div class="card-body">
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset>
                                    <div class="form-group">
                                        <label>Account Name:</label>
                                        <input type="text" class="form-control" placeholder="Please Enter Account Name">
                                    </div>
                                    <div class="form-group">
                                        <label>Bank:</label>
                                        <select data-placeholder="Select Bank of Account"
                                            class="form-control form-control-select2" data-fouc="">
                                            <option></option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Opening Balance:</label>
                                        <input type="text" class="form-control" placeholder="Add Opening Balance">
                                    </div>
                                </fieldset>
                            </div>

                            <div class="col-md-6">
                                <fieldset>
                                    <div class="form-group">
                                        <label>Account Number:</label>
                                        <input type="text" class="form-control" placeholder="Please Enter Account Number">
                                    </div>
                                    <div class="form-group">
                                        <label>Branch:</label>
                                        <select data-placeholder="Select Brach of Account"
                                            class="form-control form-control-select2" data-fouc="">
                                            <option></option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Additional message:</label>
                                        <textarea rows="5" cols="5" class="form-control"
                                            placeholder="Enter your message here"></textarea>
                                    </div>
                                </fieldset>
                            </div>
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Submit <i
                                    class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>
                </div>

            </div>
            <!-- /hover rows -->
        </div>
    </div>
    <!-- /dashboard content -->

</div>
<!-- /content area -->