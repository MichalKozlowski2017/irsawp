<?php
$title = get_field('promo_title');
$subtitle = get_field('promo_subtitle');
$promocje = get_field('promocja');
?>
<section class="promo section">
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
        <?php if($promocje): ?>
        <div class="row">
            <?php $__currentLoopData = $promocje; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $promocja => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6">
                    <div class="promo__item">
                        <div class="promo__item__icon">
                            <i class="<?php echo e($value['icon']); ?>"></i>
                            <div class="promo__item__icon__bg-icon">
                                <i class="<?php echo e($value['icon']); ?>"></i>
                            </div>
                        </div>
                        <div class="promo__item__content">
                            <h3><?php echo $value['title']; ?></h3>
                            <p><?php echo e($value['content']); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endif; ?>
    </div>
</section>
