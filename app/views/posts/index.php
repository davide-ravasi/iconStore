<?php include_once APPROOT.'/views/inc/header.php'; ?>
    <?php flash('post_added') ?>
    <div class="row mb-3">
        <div class="col-md-6">
            <h1>
                posts
            </h1>
        </div>
        <div class="col-md-6">
            <a href="<?php echo URLROOT; ?>posts/add" class="btn btn-primary pull-right">
                <i class="fa fa-pencil">add post</i>
            </a>    
        </div>
    </div>    
        
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