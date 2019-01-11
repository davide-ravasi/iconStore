<?php include_once APPROOT.'/views/inc/header.php'; ?>

<h1>
    <?php echo $data['post']->title; ?>
</h1>

<div class="bg-secondary text-white p-2 mb-3">
    Written by <?php echo $data['user']->name; ?> on <?php echo $data['post']->created_at; ?>
</div>

<p>
    <?php echo $data['post']->body; ?>
</p>

<?php if($data['post']->user_id == $_SESSION['user_id']) : ?>
        <a href="<?php URLROOT;?>/posts/edit/<?php echo $data['post']->id ?>" class="btn btn-dark">Edit</a>
    
        <form action="<?php echo URLROOT; ?>/posts/delete/<?php $data['post']->id ?>" method="post" class="pull-right">
            <input type="submit" value="Delete" class="btn btn-danger" />    
        </form>
<?php endif ?>

<?php include_once APPROOT.'/views/inc/footer.php'; ?>