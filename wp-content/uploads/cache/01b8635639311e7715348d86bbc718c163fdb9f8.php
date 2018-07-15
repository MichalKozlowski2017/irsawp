
<?php
$title = get_field('oferta_title');
$subtitle = get_field('oferta_subtitle');
$icons = get_field('icons');
$tables = get_field( 'oferta_tables' );
?>
<section class="oferta section">
    <div class="container">
        <div class="row">
            <div class="section-title col-sm-12">
                <h2><?php echo e($title); ?></h2>
                <p class="section-title__subtitle">
                    <?php echo $subtitle; ?>
                </p>
            </div>
            <?php if($icons): ?>
            <div class="oferta__icons col-sm-12">
                <div class="oferta__icons__wrapper">
                    <?php $__currentLoopData = $icons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $icon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="oferta__icons__wrapper__icon">
                            <div class="oferta__icons__wrapper__icon__container">
                                <div><i class="<?php echo e($icon['icon']); ?>"></i></div>
                            </div>
                            <h3><?php echo e($icon['text']); ?></h3>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <?php endif; ?>
            <?php if($tables): ?>
            <div class="oferta__tables">
                <?php $__currentLoopData = $tables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $table): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="oferta__tables__table table">
                        <div class="oferta__tables__table__header table__header">
                            <h2><?php echo e($table['header']); ?></h2>
                        </div>
                        <div class="oferta__tables__table__body table__body">
                            <ul>
                            <?php $__currentLoopData = $table['points']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $point => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($value['text']); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <div class="oferta__tables__table__button table__button">
                            <a href='#kontakt' class="button button--dark">
                                <button>
                                    <?php echo e($table['button_text']); ?>

                                </button>
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </div>
</section>
