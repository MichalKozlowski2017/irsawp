<?php
$title = get_field('onas_title');
$text = get_field('onas_text');
$image = get_field('onas_image');
?>
<section class="onas section">
    <div class="container">
        <div class="row">
            <div class="section-title col-sm-12">
                <h2><?php echo $title; ?></h2>
            </div>
                <div class="col-sm-12 col-md-7">
                    <p><?php
                        echo $text;
                    ?></p>
                </div>
                <div class="col-sm-12 col-md-5">
                    <img src="<?php echo $image;  ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
