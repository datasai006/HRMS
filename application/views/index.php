<!DOCTYPE html>
<html>

<head>
    <title>Users</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
</head>

<body>
    <div class="container mt-5">
        <nav class=" navbar navbar-expand-lg bg-body-tertiary ">
            <div class=" container-fluid">
                <a class="navbar-brand text-dark" href="#">HRMS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav  ml-auto">
                        <a class="nav-link  " aria-current="page"
                            href="<?php echo site_url('users/create'); ?>">create</a>
                        <a class="nav-link " href="<?php echo site_url('users/index'); ?>">view</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="container mt-5">

        <h1>Users</h1>
        <a href="<?php echo site_url('users/create'); ?>" class="btn btn-primary mb-3">Create User</a>
        <table id="usersTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <!-- <th>Address</th> -->
                    <th>City</th>
                    <th>State</th>
                    <!-- <th>Status</th> -->
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user) { ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['name']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['mobile']; ?></td>
                    <!-- <td><?php echo $user['address']; ?></td> -->
                    <td><?php echo $user['city']; ?></td>
                    <td><?php echo $user['state']; ?></td>
                    <!-- <td><?php echo $user['status']; ?></td> -->
                    <td>
                        <a href="<?php echo site_url('users/edit/'.$user['id']); ?>"
                            class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?php echo site_url('users/delete/'.$user['id']); ?>"
                            class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Include Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Include DataTables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js">
    </script>
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#usersTable').DataTable();
    });
    </script>
</body>

</html>