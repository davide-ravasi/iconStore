<?php include_once APPROOT.'/views/inc/header.php'; ?>
    <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <h1 class="display-3"><?php echo $data['title']; ?></h1>
            <p class="lead"><?php echo $data['description']; ?></p>
            <p>Version: <strong><?php echo APPVERSION; ?></strong></p>
        </div>
    </div>
    
<?php include_once APPROOT.'/views/inc/footer.php'; ?>