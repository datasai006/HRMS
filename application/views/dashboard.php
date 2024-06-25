<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
</head>

<body>
    <h2>Welcome to Dashboard</h2>
    <p>Hello, <?php echo $this->session->userdata('username'); ?></p>
    <a href="<?php echo site_url('login/logout'); ?>">Logout</a>
</body>

</html>