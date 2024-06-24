<!DOCTYPE html>
<html>

<head>
    <title>Edit User</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <nav class=" navbar navbar-expand-lg bg-body-tertiary ">
            <div class=" container-fluid">
                <a class="navbar-brand text-dark" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav text-dark ml-auto">
                        <a class="nav-link text-dark " aria-current="page"
                            href="<?php echo site_url('users/create'); ?>">create</a>
                        <a class="nav-link text-dark" href="<?php echo site_url('users/index'); ?>">view</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="container">
        <h1 class="mt-5">Edit User</h1>
        <form method="post" action="<?php echo site_url('users/update/'.$user['id']); ?>" class="mt-4">
            <div class="form-row">
                <div class="form-group col-md-4 col-lg-3 col-sm-6">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $user['name']; ?>"
                        required>
                </div>
                <div class="form-group col-md-4 col-lg-3 col-sm-6">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email"
                        value="<?php echo $user['email']; ?>" required>
                </div>
                <div class="form-group col-md-4 col-lg-3 col-sm-6">
                    <label for="mobile">Mobile:</label>
                    <input type="text" class="form-control" id="mobile" name="mobile"
                        value="<?php echo $user['mobile']; ?>" required>
                </div>
                <div class="form-group col-md-4 col-lg-3 col-sm-6">
                    <label for="address">Address:</label>
                    <textarea class="form-control" id="address" name="address" rows="3"
                        required><?php echo $user['address']; ?></textarea>
                </div>
                <div class="form-group col-md-4 col-lg-3 col-sm-6">
                    <label for="city">City:</label>
                    <input type="text" class="form-control" id="city" name="city" value="<?php echo $user['city']; ?>"
                        required>
                </div>
                <div class="form-group col-md-4 col-lg-3 col-sm-6">
                    <label for="state">State:</label>
                    <input type="text" class="form-control" id="state" name="state"
                        value="<?php echo $user['state']; ?>" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <!-- Include Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>