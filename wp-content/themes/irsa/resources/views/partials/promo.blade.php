@php
$title = get_field('promo_title');
$subtitle = get_field('promo_subtitle');
$promocje = get_field('promocja');
@endphp
<section class="promo section">
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
        @if($promocje)
        <div class="row">
            @foreach ($promocje as $promocja => $value)
                <div class="col-md-6">
                    <div class="promo__item">
                        <div class="promo__item__icon">
                            <i class="{{$value['icon']}}"></i>
                            <div class="promo__item__icon__bg-icon">
                                <i class="{{$value['icon']}}"></i>
                            </div>
                        </div>
                        <div class="promo__item__content">
                            <h3>@php echo $value['title']; @endphp</h3>
                            <p>{{$value['content']}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @endif
    </div>
</section>
