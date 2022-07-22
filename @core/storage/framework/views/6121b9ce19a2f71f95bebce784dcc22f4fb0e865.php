<?php $__env->startSection('page-meta-data'); ?>
<meta name="description" content="<?php echo e($page_post->meta_description); ?>">
<meta name="tags" content="<?php echo e($page_post->meta_tags); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('site-title'); ?>
    <?php echo e($page_post->title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>
    <?php echo e($page_post->title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('og-meta'); ?>
    <meta name="og:title" content="<?php echo e($page_post->og_meta_title); ?>">
    <meta name="og:description" content="<?php echo e($page_post->og_meta_description); ?>">
    <?php echo render_og_meta_image_by_attachment_id($page_post->og_meta_image); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="dynamic-page-content-area padding-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php if(!auth()->guard('web')->check() && $page_post->visibility === 'everyone'): ?>
                        <div class="dynamic-page-content-wrap">
                            <?php echo $page_post->page_content; ?>

                        </div>
                    <?php elseif(auth()->guard('web')->check()): ?>
                     <div class="dynamic-page-content-wrap">
                        <?php echo $page_post->page_content; ?>

                    </div>
                    <?php else: ?>
                        <div class="alert alert-warning">
                            <p><a class="text-primary" href="<?php echo e(route('user.login')); ?>"><?php echo e(__('login')); ?></a> <?php echo e(__(' to see this page')); ?> </p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend-page-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bhpegejb/altdream.app/@core/resources/views/frontend/pages/dynamic-single.blade.php ENDPATH**/ ?>