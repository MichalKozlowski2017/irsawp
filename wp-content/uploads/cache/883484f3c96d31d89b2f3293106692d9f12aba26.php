<?php
$title = get_field('contact_title');
$subtitle = get_field('contact_subtitle');
$contact_left = get_field('contact_left');
$adres = get_field('contact_adres');
$social_links = get_field('social_links');
?>
<section class="contact section">
    <div class="container">
        <div class="row">
            <div class="section-title col-sm-12">
                <h2><?php echo e($title); ?></h2>
                <?php if($subtitle): ?>
                <p class="section-title__subtitle">
                    <?php echo $subtitle; ?>
                </p>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="contact__left col-md-6">
                <div class="contact-wrap">
                    <?php $__currentLoopData = $contact_left; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p><i aria-hidden="true" class="<?php echo e($value['icon']); ?>"></i><?php echo e($value['text']); ?></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <p class="contact__left"><?php echo $adres; ?></p>
                    <!--Start social links-->
                    <ul class="social-links">
                        <?php $__currentLoopData = $social_links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="<?php echo e($link['link']); ?>"><i class="<?php echo e($link['icon']); ?>"></i></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <!--End social links-->
                </div>
            </div>
            <div class="contact__right col-md-6">
                <?php
                    echo do_shortcode( '[contact-form-7 id="66" title="Contact form 1"]' );
                ?>
            </div>
        </div>

    </div>
</section>
