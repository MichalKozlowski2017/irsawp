@php
$banner_image = get_field('banner_image');
$banner_subtitle = get_field('banner_subtitle');
$banner_button_text = get_field('banner_button_text');
$banner_button_link = get_field('banner_button_link');
@endphp

<section class="banner" style="background-image: url('@php echo $banner_image; @endphp');">
    <div class="container">
        <div class="row">
            <div class="banner__wrapper">
                <div class="banner__wrapper__text">
                    <h2>IR<span>SA</span></h2>
                    <h1>BIURO RACHUNKOWE</h1>
                    <p>@php echo $banner_subtitle; @endphp</p>
                    <a href='@php echo $banner_button_link; @endphp' class="button button--light">
                        <button>
                            @php echo $banner_button_text; @endphp
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <a href="#about" class="smooth-scroll btn-down"><i class="fas fa-chevron-down"></i></a>
    <div class="banner__overlay"></div>
</section>
