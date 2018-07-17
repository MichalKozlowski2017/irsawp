<?php
    $footer_text = get_field('footer_text');
    $footer_copyright = get_field('footer_copyright');
?>

<footer class="footer">
    <div class="footer__above">
        <div class="container">
            <div class="row">
                <div class="col-md-12 footer__above__text">
                    <?php
                    if ( function_exists( 'the_custom_logo' ) ) {
                      the_custom_logo();
                    }
                    ?>
                    <p class="footer-text"><?php echo e($footer_text); ?> </p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p><?php echo e($footer_copyright); ?></p>
                </div>
            </div>
        </div>
    </div>
</footer>
