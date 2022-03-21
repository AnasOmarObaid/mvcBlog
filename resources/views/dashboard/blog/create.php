<?php require_once(VIEWS . "dashboard/header.php");

require_once(VIEWS . "dashboard/nav.php");

require_once(VIEWS . "dashboard/aside.php");

?>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Blogs | create</h1>
            <p>A free and open source Bootstrap 4 admin template</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="\dashboard/blog">Blog</a></li>
            <li class="breadcrumb-item active">Create</li>
        </ul>
    </div>

    <!-- form to create blog -->
    <div class="tile">
        <h3 class="tile-title">Vertical Form</h3>
        <div class="tile-body">
            <form>
                <!-- title -->
                <div class="form-group">
                    <label class="control-label">Name</label>
                    <input class="form-control" type="text" placeholder="Enter full name">
                </div>
                <!-- body -->
                <div class="form-group">
                    <label class="control-label">Email</label>
                    <input class="form-control" type="email" placeholder="Enter email address">
                </div>
            </form>
        </div>
        <div class="tile-footer">
            <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
        </div>
    </div>
</main>

<?php require_once(VIEWS . 'dashboard/footer.php') ?>