<?php include_once APPROOT.'/views/inc/header.php'; ?>
    <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <h1 class="display-3"><?php echo $data['title']; ?></h1>
            <p class="lead"><?php echo $data['description']; ?></p>
            <p>Version: <?php echo APPVERSION; ?></p>
        </div>
    </div>
<h1>
    Last 4 post uploaded
</h1>
<?php foreach ($data['lastPosts'] as $lastPost) : ?>
        <div class="card card-body mb-3 flex-row flex-wrap">
            <div class="col-auto">
                <img width="100" src="<?php echo '/uploads/images/'.$lastPost->image_url ?>" class="img-fluid" alt="">
            </div>
            <div class="col">
                <h5 class="card-title"><?php echo $lastPost->title; ?></h5>
                <div class="card_text"><?php echo $lastPost->body; ?></div>
                <a href="<?php echo URLROOT; ?>posts/show/<?php echo  $lastPost->postId ?>" class="btn btn-dark">More</a>
            </div>
            <div class="card-footer w-100 text-muted">
               <div class="bg-light p-2">
                    Written by <?php echo $lastPost->name ?> on <?php echo $lastPost->postCreated ?>
                </div>
            </div>
        </div>
<?php endforeach ?>

<h1>
    All the posts
</h1>
<?php foreach ($data['posts'] as $post) : ?>
        <div class="card card-body mb-3 flex-row flex-wrap">
            <div class="col-auto">
                <img width="100" src="<?php echo '/uploads/images/'.$post->image_url ?>" class="img-fluid" alt="">
            </div>
            <div class="col">
                <h5 class="card-title"><?php echo $post->title; ?></h5>
                <div class="card_text"><?php echo $post->body; ?></div>
                <a href="<?php echo URLROOT; ?>posts/show/<?php echo  $post->postId ?>" class="btn btn-dark">More</a>
            </div>
            <div class="card-footer w-100 text-muted">
               <div class="bg-light p-2">
                    Written by <?php echo $post->name ?> on <?php echo $post->postCreated ?>
                </div>
            </div>
        </div>
<?php endforeach ?>
    
<?php include_once APPROOT.'/views/inc/footer.php'; ?>