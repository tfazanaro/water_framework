<?php $app::view('template/header'); ?>

<body class="padding-20">
    <div class="container">
        <div class="col-sm-8 col-sm-offset-2 text-center">

            <h1><span class="text-primary">WaterPHP</span> Framework</h1><br>

            <pre>You are in the <strong>/view/home/welcome.php</strong> file.</pre><br>

            <a href="<?php echo ($app::auth()) ? $app::route('user') : $app::route('login'); ?>" class="btn btn-primary btn-lg">
                CRUD Example
            </a>
        </div>
    </div>

<?php $app::view('template/footer'); ?>