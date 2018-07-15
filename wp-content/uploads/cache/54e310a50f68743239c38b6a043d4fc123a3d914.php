
<?php
$title = get_field('cennik_title');
$subtitle = get_field('cennik_subtitle');
$icons = get_field('icons');
$tables = get_field( 'cennik_tables' );
$text = get_field( 'cennik_text' );
$note = get_field( 'cennik_note' );
?>
<section class="cennik section">
    <div class="container">
        <div class="row">
            <div class="section-title col-sm-12">
                <h2><?php echo $title ?></h2>
                <?php if($subtitle): ?>
                <p class="section-title__subtitle">
                    <?php echo $subtitle; ?>
                </p>
                <?php endif; ?>
            </div>

            <?php if($tables): ?>
            <div class="cennik__tables col-sm-12">
                <?php $__currentLoopData = $tables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $table => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="cennik__tables__table table">
                        <div class="cennik__tables__table__head table__head">
                            <h2><?php echo e($value['header']); ?></h2>
                        </div>
                        <div class="cennik__tables__table__body table__body">
                            <table>
                                <tbody>
                                    <?php $__currentLoopData = $value['table']['body']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                        <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <td><?php
                                                echo $row['c'];
                                            ?></td>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php endif; ?>
            <?php if($text): ?>
            <div class="cennik__text text col-sm-12">
                <?php echo e($text); ?>

            </div>
            <?php endif; ?>
            <?php if($note): ?>
            <div class="cennik__note note col-sm-12">
                <?php echo e($note); ?>

            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
