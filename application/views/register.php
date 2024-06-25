<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Registration</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/plugins/bootstrap/css/bootstrap.min.css')?>">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/plugins/fontawesome-free/css/all.min.css')?>">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?=base_url('assets/dist/css/custom.css')?>">

    <!-- jQuery -->
    <script src="<?=base_url('assets/plugins/jquery/jquery.min.js')?>"></script>

    <!-- Bootstrap JS -->
    <script src="<?=base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
</head>

<body class="bg-light">

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Register</h3>
                    </div>
                    <div class="card-body">
                        <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                        <form action="<?=base_url('Auth/register_user')?>" method="post">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    value="<?=set_value('name')?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="mobile" class="form-label">Mobile Number</label>
                                <input type="text" name="mobile" id="mobile" class="form-control"
                                    value="<?=set_value('mobile')?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    value="<?=set_value('email')?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <!-- <div class="mb-3">
                                <label for="confirm_password" class="form-label">Confirm Password</label>
                                <input type="password" name="confirm_password" id="confirm_password"
                                    class="form-control" required>
                            </div> -->
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>