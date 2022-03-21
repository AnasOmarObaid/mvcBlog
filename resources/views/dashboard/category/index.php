<?php require_once(VIEWS . "dashboard/header.php");

require_once(VIEWS . "dashboard/nav.php");

require_once(VIEWS . "dashboard/aside.php");

?>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Categories</h1>
            <p>A free and open source Bootstrap 4 admin template</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Categories</a></li>
        </ul>
    </div>

    <!-- table of Categories -->
    <div class="tile">
        <h3 class="tile-title">Categories Table</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>name</th>
                    <th>created at</th>
                    <th>updated at</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $index => $category) { ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= $category->name ?></td>
                        <td><?= $category->created_at ?></td>
                        <td><?= $category->updated_at ?></td>
                        <td>
                            <a href="\dashboard\category\edit\<?= $category->id ?>" class="btn btn-primary">Edit</a>
                            <form action="\dashboard\category\destroy\<?= $category->id ?>" method="post" class="d-inline-flex">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>

                <?php } ?>

            </tbody>
        </table>
    </div>
</main>

<?php require_once(VIEWS . 'dashboard/footer.php') ?>