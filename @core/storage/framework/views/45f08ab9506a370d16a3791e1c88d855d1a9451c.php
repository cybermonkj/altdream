<?php
    $home_page_variant = $home_page ?? get_static_option('home_page_variant');
?>
<div class="header-style-01 home-page-variant-<?php echo e($home_page_variant); ?>">
    <div class="topbar-area style-01">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="topbar-inner">
                        <div class="left-contnet">
                            <ul class="info-items">
                                <?php
                                    $all_icon_fields =  filter_static_option_value('home_page_01_topbar_info_list_icon_icon',$global_static_field_data);
                                    $all_icon_fields =  !empty($all_icon_fields) ? unserialize($all_icon_fields) : [];
                                    $all_title_fields = filter_static_option_value('home_page_01_topbar_info_list_text',$global_static_field_data);
                                    $all_title_fields = !empty($all_title_fields) ? unserialize($all_title_fields) : [];
                                ?>
                                <?php $__currentLoopData = $all_icon_fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $icon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><i class="<?php echo e($icon); ?>"></i> <?php echo e(isset($all_title_fields[$index]) ? $all_title_fields[$index] : ''); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <div class="right-contnet">
                            <div class="social-link">
                                <ul>
                                    <?php $__currentLoopData = $all_social_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a href="<?php echo e($data->url); ?>"><i class="<?php echo e($data->icon); ?>"></i></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                            <div class="volunteer-right">
                                <ul class="info-items-02">
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.front-user-login-li','data' => []]); ?>
<?php $component->withName('front-user-login-li'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-area navbar-expand-lg charity-nav-02 has-topbar nav-style-02">
        <div class="container nav-container">
            <div class="responsive-mobile-menu">
                <div class="logo-wrapper">
                    <?php if(filter_static_option_value('site_logo',$global_static_field_data) || filter_static_option_value('site_white_logo',$global_static_field_data)): ?>
                    <a href="<?php echo e(route('homepage')); ?>" class="logo-pc">
                        <?php echo render_image_markup_by_attachment_id(filter_static_option_value('site_logo',$global_static_field_data)); ?>

                    </a>
                    <a href="<?php echo e(route('homepage')); ?>" class="mobile-logo">
                        <?php echo render_image_markup_by_attachment_id(filter_static_option_value('site_white_logo',$global_static_field_data)); ?>

                    </a>
                    <?php else: ?>
                        <a href="<?php echo e(route('homepage')); ?>">
                           <span class="site-title"><?php echo e(filter_static_option_value('site_title',$global_static_field_data)); ?></span>
                        </a>
                    <?php endif; ?>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bizcoxx_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bizcoxx_main_menu">
                <ul class="navbar-nav">
                    <?php echo render_frontend_menu($primary_menu); ?>

                </ul>
            </div>
            <?php if(!empty(filter_static_option_value('home_page_navbar_button_status',$global_static_field_data))): ?>
                <div class="nav-right-content">
                    <ul>
                        <li>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.front-donate-btn','data' => ['home' => $home_page_variant]]); ?>
<?php $component->withName('front-donate-btn'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['home' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($home_page_variant)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        </li>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </nav>

</div>

<?php if(get_static_option('home_page_header_slider_section_status')): ?>
    <div class="global-carousel-init header-slider-one"
         data-loop="true"
         data-desktopitem="1"
         data-mobileitem="1"
         data-tabletitem="1"
         data-nav="true"
         data-autoplay="true"
    >
    <?php $__currentLoopData = $all_header_slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="header-area style-01 header-bg-02" <?php echo render_background_image_markup_by_attachment_id($data->image); ?>>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="header-inner-02">
                        <?php if(!empty($data->subtitle)): ?>
                            <p class="subtitle"><?php echo e($data->subtitle); ?></p>
                        <?php endif; ?>
                        <?php if(!empty($data->title)): ?>
                            <h1 class="title"><?php echo e($data->title); ?></h1>
                        <?php endif; ?>
                        <?php if(!empty($data->description)): ?>
                            <p class="description"><?php echo e($data->description); ?></p>
                        <?php endif; ?>
                        <?php if(!empty($data->btn_01_status)): ?>
                            <div class="btn-wrapper  desktop-left padding-top-30">
                                <a href="<?php echo e($data->btn_01_url); ?>" class="boxed-btn reverse-color"><?php echo e($data->btn_01_text); ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endif; ?>

<?php if(get_static_option('home_page_key_feature_section_status')): ?>
<div class="volunteer-area m-top">
    <div class="container">
        <div class="row">
            <?php
                $homepage_01_feature_section_icon = filter_static_option_value('homepage_01_feature_section_icon',$static_field_data);
                $all_icon_fields = !empty($homepage_01_feature_section_icon) ? unserialize($homepage_01_feature_section_icon) : [];
                $all_title_fields = filter_static_option_value('homepage_01_feature_section_title',$static_field_data);
                $all_title_fields = !empty($all_title_fields) ? unserialize($all_title_fields) : [];
                $all_description_fields = filter_static_option_value('homepage_01_feature_section_description',$static_field_data);
                $all_description_fields = !empty($all_description_fields) ? unserialize($all_description_fields) : [];
                $all_url_fields =  filter_static_option_value('homepage_01_feature_section_url',$static_field_data);
                $all_url_fields = !empty($all_url_fields) ? unserialize($all_url_fields) : [];
            ?>
            <?php $__currentLoopData = $all_icon_fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $icon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-6 col-xl-4 col-md-6">
                    <div class="volunteer-single-item no-border margin-bottom-30 style-<?php echo e($loop->index); ?> bg-image"
                         style="background-image: url(<?php echo e(asset('assets/frontend/img/shape/volunteer-bg.png')); ?>);">
                        <div class="icon">
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
</div>
<?php endif; ?>


<?php if(get_static_option('home_page_about_us_section_status')): ?>
<div class="header-bottom-area bg-white padding-bottom-120 padding-top-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-4">
                <div class="help-and-support-right">
                    <div class="support-img-02 bg-image"
                    <?php echo render_background_image_markup_by_attachment_id(filter_static_option_value('home_page_02_about_us_left_image',$static_field_data)); ?>

                    ></div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="help-and-support-left">
                    <div class="section-title margin-bottom-35">
                        <span><?php echo e(filter_static_option_value('home_page_01_about_us_subtitle',$static_field_data)); ?></span>
                        <h2 class="title"> <?php echo render_colored_text(filter_static_option_value('home_page_01_about_us_title',$static_field_data)); ?></h2>
                        <div><?php echo filter_static_option_value('home_page_01_about_us_description',$static_field_data); ?></div>
                    </div>
                    <div class="content">
                        <?php
                            $_about_us_lists = filter_static_option_value('home_page_01_about_us_lists',$static_field_data) ?? [];
                            $_about_us_list = explode("\n",$_about_us_lists);
                        ?>
                        <ul>
                            <?php $__currentLoopData = $_about_us_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><i class="fas fa-check"></i> <?php echo e($item); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-xl-4">
                <div class="support-single-item">
                    <div class="icon">
                        <i class="<?php echo e(filter_static_option_value('home_page_02_about_us_icon',$static_field_data)); ?>"></i>
                    </div>
                    <div class="content">
                        <h3 class="title"> <?php echo e(filter_static_option_value('home_page_01_about_us_total_donation',$static_field_data)); ?></h3>
                        <div class="details"><?php echo e(filter_static_option_value('home_page_02_about_us_donation_text',$static_field_data)); ?></div>
                    </div>
                </div>
                <div><?php echo filter_static_option_value('home_page_02_about_us_short_description',$static_field_data); ?></div>
                <div class="support-single-img padding-top-25">
                    <?php echo render_image_markup_by_attachment_id(filter_static_option_value('home_page_02_about_us_right_bottom_image',$static_field_data)); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>


<?php if(get_static_option('home_page_cause_category_section_status')): ?>
<div class="our-latest-area padding-bottom-90 bg-image padding-top-90"
style="background-image: url(<?php echo e(asset('assets/frontend/img/shape/02.png')); ?>)"
>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-sm-11 col-11">
                <div class="section-title b-top desktop-center padding-top-25 margin-bottom-55">
                    <span><?php echo e(filter_static_option_value('home_page_01_donation_category_subtitle',$static_field_data)); ?></span>
                    <h2 class="title"><?php echo render_colored_text(filter_static_option_value('home_page_01_donation_category_title',$static_field_data)); ?></h2>
                </div>
            </div>
        </div>
        <div class="row padding-bottom-120">
            <div class="col-lg-12">
                <div class="global-carousel-init slider-dots"
                     data-loop="true"
                     data-desktopitem="4"
                     data-mobileitem="1"
                     data-tabletitem="2"
                     data-dots="true"
                     data-margin="30"
                     data-autoplay="true"
                >
                    <?php $__currentLoopData = $all_donation_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="single-donation-category-item"
                                <?php echo render_background_image_markup_by_attachment_id($data->image,'grid'); ?>

                        >
                            <a href="<?php echo e(route('frontend.donations.category',['id' => $data->id,'any' => Str::slug($data->title) ?? '' ])); ?>">

                                <div class="hover-content">
                                    <h3 class="title"><?php echo e($data->title); ?> <span class="count">(<?php echo e($data->donation->count()); ?>)</span>
                                    </h3>
                                    <p class="description"><?php echo e($data->description); ?></p>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
        <?php endif; ?>


        <?php if(get_static_option('home_page_feature_cause_section_status')): ?>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-sm-11 col-11">
                <div class="section-title b-top desktop-center padding-top-25 margin-bottom-55">
                    <span><?php echo e(filter_static_option_value('home_page_01_featured_cause_area_subtitle',$static_field_data)); ?></span>
                    <h2 class="title"><?php echo render_colored_text(filter_static_option_value('home_page_01_featured_cause_area_title',$static_field_data)); ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="global-carousel-init slider-dots"
                     data-loop="true"
                     data-desktopitem="3"
                     data-mobileitem="1"
                     data-tabletitem="2"
                     data-dots="true"
                     data-margin="30"
                     data-autoplay="true"
                >
                    <?php $__currentLoopData = $feature_cause; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.frontend.donation.grid','data' => ['featured' => $data->featured,'image' => $data->image,'amount' => $data->amount,'raised' => $data->raised,'slug' => $data->slug,'title' => $data->title,'excerpt' => $data->excerpt,'buttontext' => filter_static_option_value('home_page_01_featured_cause_area_button_text',$static_field_data)]]); ?>
<?php $component->withName('frontend.donation.grid'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['featured' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data->featured),'image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data->image),'amount' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data->amount),'raised' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data->raised),'slug' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data->slug),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data->title),'excerpt' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data->excerpt),'buttontext' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(filter_static_option_value('home_page_01_featured_cause_area_button_text',$static_field_data))]); ?>
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
</div>
<?php endif; ?>


<?php if(get_static_option('home_page_recent_cause_section_status')): ?>
<section class="problem-area padding-top-90 padding-bottom-85">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-sm-11 col-11">
                <div class="section-title b-top desktop-center padding-top-25 margin-bottom-55">
                    <span><?php echo e(filter_static_option_value('home_page_01_latest_cause_subtitle',$static_field_data)); ?></span>
                    <h2 class="title"><?php echo render_colored_text(filter_static_option_value('home_page_01_latest_cause_title',$static_field_data)); ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php $__currentLoopData = $all_recent_donation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.frontend.donation.grid','data' => ['featured' => $data->featured,'image' => $data->image,'amount' => $data->amount,'raised' => $data->raised,'slug' => $data->slug,'title' => $data->title,'excerpt' => $data->excerpt,'buttontext' => filter_static_option_value('home_page_01_featured_cause_area_button_text',$static_field_data)]]); ?>
<?php $component->withName('frontend.donation.grid'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['featured' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data->featured),'image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data->image),'amount' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data->amount),'raised' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data->raised),'slug' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data->slug),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data->title),'excerpt' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data->excerpt),'buttontext' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(filter_static_option_value('home_page_01_featured_cause_area_button_text',$static_field_data))]); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-12">
                <div class="btn-wrapper text-center">
                    <a href="<?php echo e(route('frontend.donations')); ?>" class="boxed-btn reverse-color"><?php echo e(filter_static_option_value('home_page_01_latest_cause_button_text',$static_field_data)); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>


<?php if(get_static_option('home_page_video_section_status')): ?>
<div class="work-towards-area bg-image padding-bottom-120 padding-top-105"
<?php echo render_background_image_markup_by_attachment_id(filter_static_option_value('home_page_01_cta_area_background_image',$static_field_data)); ?>

>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="left-content">
                    <div class="inner-section-title desktop-center">
                        <h2 class="title"><?php echo e(filter_static_option_value('home_page_01_cta_area_title',$static_field_data)); ?></h2>
                    </div>
                </div>
                <div class="right-content style-01">
                    <div class="vdo-btn">
                        <a class="video-play mfp-iframe" href="<?php echo e(filter_static_option_value('home_page_01_cta_area_video_url',$static_field_data)); ?>"><i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>


<?php if(get_static_option('home_page_team_member_section_status')): ?>
<section class="volunteer-area padding-bottom-90 padding-top-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="volunteer-title-content margin-bottom-50">
                    <div class="section-title desktop-left">
                        <span><?php echo e(filter_static_option_value('home_page_01_team_member_section_subtitle',$static_field_data)); ?></span>
                        <h3 class="title"><?php echo render_colored_text(filter_static_option_value('home_page_01_team_member_section_title',$static_field_data)); ?></h3>
                    </div>
                    <div class="section-paragraph volunteer-slider-container">

                    </div>
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


<?php if(get_static_option('home_page_what_we_do_section_status')): ?>
<section class="problem-area margin-top-90 padding-top-120 padding-bottom-120">
    <div class="bg-img" <?php echo render_background_image_markup_by_attachment_id(filter_static_option_value('home_page_02_what_we_do_left_image',$static_field_data)); ?>></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-4">
                <div class="problem-area-wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-sm-11 col-11">
                            <div class="section-title margin-bottom-55">
                                <span><?php echo e(filter_static_option_value('home_page_02_what_we_do_area_subtitle',$static_field_data)); ?></span>
                                <h2 class="title"><?php echo render_colored_text(filter_static_option_value('home_page_02_what_we_do_area_title',$static_field_data)); ?></h2>
                            </div>
                        </div>
                        <?php
                            $all_icon_fields =  get_static_option('homepage_02_what_we_do_section_icon');
                            $all_icon_fields = !empty($all_icon_fields) ? unserialize($all_icon_fields) : [];
                            $all_title_fields = get_static_option('homepage_02_what_we_do_section_title');
                            $all_title_fields = !empty($all_title_fields) ? unserialize($all_title_fields) : [];
                            $all_description_fields = get_static_option('homepage_02_what_we_do_section_description');
                            $all_description_fields = !empty($all_description_fields) ? unserialize($all_description_fields) : [];
                            $all_url_fields =  get_static_option('homepage_02_what_we_do_section_url');
                            $all_url_fields = !empty($all_url_fields) ? unserialize($all_url_fields) : [];
                        ?>
                        <?php $__currentLoopData = $all_icon_fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $icon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-6 col-md-6">
                            <div class="problem-single-item style-01 margin-bottom-30">
                                <div class="icon">
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
            </div>
        </div>
    </div>
</section>
<?php endif; ?>


<?php if(get_static_option('home_page_testimonial_section_status')): ?>
<!-- testimonial area start  -->
<section class="testimonial-area padding-bottom-100 padding-top-115">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title desktop-center margin-bottom-50">
                    <span class="subtitle"><?php echo e(filter_static_option_value('home_page_01_testimonial_section_subtitle',$static_field_data)); ?></span>
                    <h3 class="title"><?php echo render_colored_text(filter_static_option_value('home_page_01_testimonial_section_title',$static_field_data)); ?></h3>
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


<?php if(get_static_option('home_page_counterup_section_status')): ?>
<div class="counterup-area bg-image padding-bottom-105 padding-top-90"
     <?php echo render_background_image_markup_by_attachment_id(filter_static_option_value('home_page_02_coutnerup_background_image',$static_field_data)); ?> }>
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


<?php if(get_static_option('home_page_latest_events_section_status')): ?>
<section class="attend-events-area m-top bg-image padding-top-115 padding-bottom-90"
         style="background-image: url(<?php echo e(asset('assets/frontend/img/shape/02.png')); ?>)"
>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="attend-title-content margin-bottom-50">
                    <div class="section-title desktop-left">
                        <span><?php echo e(filter_static_option_value('home_page_01_latest_event_subtitle',$static_field_data)); ?></span>
                        <h3 class="title"><?php echo render_colored_text(filter_static_option_value('home_page_01_latest_event_title',$static_field_data)); ?></h3>
                    </div>
                    <div class="section-paragraph">
                        <div class="event-nav-container"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="global-carousel-init slider-dots"
                 data-loop="true"
                 data-desktopitem="2"
                 data-mobileitem="1"
                 data-tabletitem="1"
                 data-nav="true"
                 data-navcontainer=".event-nav-container"
                 data-dots="true"
                 data-margin="30"
                 data-autoplay="true"
            >
                <?php $__currentLoopData = $all_recent_events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.frontend.event.grid','data' => ['image' => $data->image,'date' => $data->date,'slug' => $data->slug,'title' => $data->title,'time' => $data->time,'cost' => $data->cost,'venuelocation' => $data->venue_location,'buttontext' => filter_static_option_value('home_page_01_latest_event_button_text',$static_field_data)]]); ?>
<?php $component->withName('frontend.event.grid'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data->image),'date' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data->date),'slug' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data->slug),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data->title),'time' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data->time),'cost' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data->cost),'venuelocation' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data->venue_location),'buttontext' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(filter_static_option_value('home_page_01_latest_event_button_text',$static_field_data))]); ?>
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
</section>
<?php endif; ?>

<?php if(get_static_option('home_page_latest_blog_section_status')): ?>
<section class="blog-area bg-white padding-top-120 padding-bottom-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title desktop-center margin-bottom-50">
                    <span><?php echo e(filter_static_option_value('home_page_01_latest_news_subtitle',$static_field_data)); ?></span>
                    <h3 class="title"><?php echo render_colored_text(filter_static_option_value('home_page_01_latest_news_title',$static_field_data)); ?></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="global-carousel-init slider-dots"
                     data-loop="true"
                     data-desktopitem="3"
                     data-mobileitem="1"
                     data-tabletitem="2"
                     data-dots="true"
                     data-margin="30"
                     data-autoplay="true"
                >
                    <?php $__currentLoopData = $all_blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.frontend.blog.grid01','data' => ['image' => $data->image,'date' => $data->created_at,'author' => $data->author,'catid' => $data->blog_categories_id,'slug' => $data->slug,'title' => $data->title]]); ?>
<?php $component->withName('frontend.blog.grid01'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data->image),'date' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data->created_at),'author' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data->author),'catid' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data->blog_categories_id),'slug' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data->slug),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data->title)]); ?>
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
<?php endif; ?><?php /**PATH /home/bhpegejb/altdream.app/@core/resources/views/frontend/home-pages/home-02.blade.php ENDPATH**/ ?>