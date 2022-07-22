<?php $__env->startSection('site-title'); ?>
    <?php echo e(get_static_option('about_page_name')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-title',get_static_option('about_page_name')); ?>
<?php $__env->startSection('page-meta-data'); ?>
    <meta name="description" content="<?php echo e(get_static_option('about_page_meta_description')); ?>">
    <meta name="tags" content="<?php echo e(get_static_option('about_page__meta_tags')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- About Section -->
    <div class="about-area padding-top-115 padding-bottom-120">
        <div class="container">
            <?php if(!empty(get_static_option('about_page_about_us_section_status'))): ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-title-content margin-bottom-50">
                        <div class="section-title desktop-left">
                            <span><?php echo e(get_static_option('about_page_about_section_subtitle')); ?></span>
                            <h3 class="title"><?php echo render_colored_text(get_static_option('about_page_about_section_title')); ?></h3>
                        </div>
                        <div class="section-paragraph">
                            <?php echo get_static_option('about_page_about_section_description'); ?>

                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php if(!empty(get_static_option('about_page_our_mission_section_status'))): ?>
            <div class="about-content-area padding-top-60 padding-bottom-60">
                <div class="bg-img" <?php echo render_background_image_markup_by_attachment_id(get_static_option('about_page_our_mission_left_image_image')); ?>></div>
                <div class="row">
                    <div class="col-lg-7 offset-lg-5">
                        <div class="about-content">
                            <div class="section-title">
                                <h3 class="title"><?php echo e(get_static_option('about_page_our_mission_title')); ?></h3>
                                <div><?php echo get_static_option('about_page_our_mission_description'); ?></div>
                            </div>
                            <div class="content">
                                <ul>
                                    <?php
                                        $all_icon_fields =  get_static_option('about_page_our_mission_list_section_icon');
                                        $all_icon_fields = !empty($all_icon_fields) ? unserialize($all_icon_fields) : [];
                                        $all_title_fields = get_static_option('about_page_our_mission_list_section_title');
                                        $all_title_fields = !empty($all_title_fields) ? unserialize($all_title_fields) : [];
                                    ?>
                                    <?php $__currentLoopData = $all_icon_fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $icon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><i class="<?php echo e($icon); ?>"></i> <?php echo e($all_title_fields[$loop->index] ?? ''); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <?php if(!empty(get_static_option('about_page_counterup_section_status'))): ?>
    <!-- Counter Area -->
    <div class="counterup-area bg-image padding-bottom-105 padding-top-110"
    <?php echo render_background_image_markup_by_attachment_id(get_static_option('about_page_counterup_background_image')); ?>

    >
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $all_counterup; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-counterup-01">
                            <div class="icon">
                                <i class="<?php echo e($data->icon); ?>"></i>
                            </div>
                            <div class="content">
                                <div class="count-wrap"><span class="count-num"><?php echo e($data->number); ?></span><?php echo e($data->extra_text); ?></div>
                                <h4 class="title"><?php echo e($data->title); ?></h4>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php if(!empty(get_static_option('about_page_what_we_do_section_status'))): ?>
    <!-- Follow Problem -->
    <section class="problem-area padding-top-100 padding-bottom-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-sm-11 col-11">
                    <div class="section-title b-top desktop-center padding-top-25 margin-bottom-55">
                        <span><?php echo e(get_static_option('about_page_what_we_do_area_subtitle')); ?></span>
                        <h2 class="title"><?php echo render_colored_text(get_static_option('about_page_what_we_do_area_title')); ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                    $all_icon_fields =  get_static_option('about_page_what_we_do_section_icon');
                    $all_icon_fields = !empty($all_icon_fields) ? unserialize($all_icon_fields) : [];
                    $all_title_fields = get_static_option('about_page_what_we_do_section_title');
                    $all_title_fields = !empty($all_title_fields) ? unserialize($all_title_fields) : [];
                    $all_description_fields = get_static_option('about_page_what_we_do_section_description');
                    $all_description_fields = !empty($all_description_fields) ? unserialize($all_description_fields) : [];
                    $all_url_fields =  get_static_option('about_page_what_we_do_section_url');
                    $all_url_fields = !empty($all_url_fields) ? unserialize($all_url_fields) : [];
                ?>
                <?php $__currentLoopData = $all_icon_fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $icon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="problem-single-item margin-bottom-30">
                            <div class="icon style-0<?php echo e($loop->index); ?>">
                                <i class="<?php echo e($icon); ?>"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">
                                    <a href="<?php echo e($all_url_fields[$loop->index] ?? ''); ?>"><?php echo e($all_title_fields[$loop->index] ?? ''); ?></a>
                                </h4>
                                <p><?php echo e($all_description_fields[$loop->index] ?? ''); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
<?php endif; ?>
    <?php if(!empty(get_static_option('about_page_testimonial_section_status'))): ?>
    <!-- testimonial area start  -->
    <section class="testimonial-area-02 padding-bottom-100 padding-top-120" style="background-image: url(<?php echo e(asset('assets/frontend/img/shape/03.png')); ?>);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-12 p-0">
                    <div class="section-title desktop-center margin-bottom-50">
                        <span><?php echo e(get_static_option('about_page_testimonial_subtitle')); ?></span>
                        <h3 class="title"><?php echo render_colored_text(get_static_option('about_page_testimonial_title')); ?></h3>
                    </div>
                </div>
            </div>
            <div class="row no-gutters justify-content-center">
                <div class="col-lg-7">
                    <div class="global-carousel-init slider-dots"
                         data-loop="true"
                         data-desktopitem="1"
                         data-mobileitem="1"
                         data-tabletitem="1"
                         data-dots="true"
                         data-margin="0"
                         data-autoplay="true"
                    >
                        <?php $__currentLoopData = $all_testimonial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="single-testimonial-item dark">
                                <div class="thumb bg-image" <?php echo render_background_image_markup_by_attachment_id($data->image); ?>>
                                    <div class="icon">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="author-details">
                                        <div class="author-meta">
                                            <h4 class="title"><?php echo e($data->name); ?></h4>
                                            <span class="designation"><?php echo e($data->designation); ?></span>
                                        </div>
                                    </div>
                                    <p class="description"><?php echo e($data->description); ?></p>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- testimonial area end -->
    <?php if(!empty(get_static_option('about_page_team_member_section_status'))): ?>
    <!-- Volunteer Area -->
    <section class="volunteer-area padding-bottom-120 padding-top-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="volunteer-title-content margin-bottom-50">
                        <div class="section-title desktop-left">
                            <span><?php echo e(get_static_option('about_page_team_member_section_subtitle')); ?></span>
                            <h3 class="title"><?php echo render_colored_text(get_static_option('about_page_team_member_section_title')); ?></h3>
                        </div>
                        <div class="section-paragraph volunteer-slider-container"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="global-carousel-init slider-dots"
                         data-loop="true"
                         data-desktopitem="4"
                         data-mobileitem="1"
                         data-tabletitem="2"
                         data-dots="true"
                         data-nav="true"
                         data-margin="30"
                         data-autoplay="true"
                         data-navcontainer=".volunteer-slider-container"
                    >
                        <?php $__currentLoopData = $all_team_members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.frontend.team.grid','data' => ['image' => $data->image,'index' => $loop->index,'name' => $data->name,'iconone' => $data->icon_one,'icononeurl' => $data->icon_one_url,'icontwo' => $data->icon_two,'icontwourl' => $data->icon_two_url,'iconthree' => $data->icon_three,'iconthreeurl' => $data->icon_three_url]]); ?>
<?php $component->withName('frontend.team.grid'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data->image),'index' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($loop->index),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data->name),'iconone' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data->icon_one),'icononeurl' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data->icon_one_url),'icontwo' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data->icon_two),'icontwourl' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data->icon_two_url),'iconthree' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data->icon_three),'iconthreeurl' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data->icon_three_url)]); ?>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend-page-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bhpegejb/altdream.app/@core/resources/views/frontend/pages/about.blade.php ENDPATH**/ ?>