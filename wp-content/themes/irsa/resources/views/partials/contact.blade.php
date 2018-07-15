@php
$title = get_field('contact_title');
$subtitle = get_field('contact_subtitle');
$contact_left = get_field('contact_left');
$adres = get_field('contact_adres');
$social_links = get_field('social_links');
@endphp
<section class="contact section">
    <div class="container">
        <div class="row">
            <div class="section-title col-sm-12">
                <h2>{{$title}}</h2>
                @if($subtitle)
                <p class="section-title__subtitle">
                    @php echo $subtitle; @endphp
                </p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="contact__left col-md-6">
                <div class="contact-wrap">
                    @foreach ($contact_left as $key => $value)
                        <p><i aria-hidden="true" class="{{$value['icon']}}"></i>{{$value['text']}}</p>
                    @endforeach
                    <p class="contact__left">@php echo $adres; @endphp</p>
                    <!--Start social links-->
                    <ul class="social-links">
                        @foreach ($social_links as $key => $link)
                            <li><a href="{{$link['link']}}"><i class="{{$link['icon']}}"></i></a></li>
                        @endforeach
                    </ul>
                    <!--End social links-->
                </div>
            </div>
            <div class="contact__right col-md-6">
                @php
                    echo do_shortcode( '[contact-form-7 id="66" title="Contact form 1"]' );
                @endphp
            </div>
        </div>

    </div>
</section>
