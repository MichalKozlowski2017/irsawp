
@php
$title = get_field('oferta_title');
$subtitle = get_field('oferta_subtitle');
$icons = get_field('icons');
$tables = get_field( 'oferta_tables' );
@endphp
<section class="oferta section">
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
            @if($icons)
            <div class="oferta__icons col-sm-12">
                <div class="oferta__icons__wrapper">
                    @foreach ($icons as $icon)
                        <div class="oferta__icons__wrapper__icon">
                            <div class="oferta__icons__wrapper__icon__container">
                                <div><i class="{{$icon['icon']}}"></i></div>
                            </div>
                            <h3>{{$icon['text']}}</h3>
                        </div>
                    @endforeach
                </div>
            </div>
            @endif
            @if($tables)
            <div class="oferta__tables">
                @foreach ($tables as $table)
                    <div class="oferta__tables__table table-ul">
                        <div class="oferta__tables__table__header table-ul__header">
                            <h2>{{$table['header']}}</h2>
                        </div>
                        <div class="oferta__tables__table__body table-ul__body">
                            <ul>
                            @foreach ($table['points'] as $point => $value)
                                <li>{{$value['text']}}</li>
                            @endforeach
                            </ul>
                        </div>
                        <div class="oferta__tables__table__button table-ul__button">
                            <a href='#kontakt' class="button button--dark">
                                <button>
                                    {{$table['button_text']}}
                                </button>
                            </a>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
