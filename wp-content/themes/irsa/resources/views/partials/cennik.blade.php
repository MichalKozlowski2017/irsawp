
@php
$title = get_field('cennik_title');
$subtitle = get_field('cennik_subtitle');
$icons = get_field('icons');
$tables = get_field( 'cennik_tables' );
$text = get_field( 'cennik_text' );
$note = get_field( 'cennik_note' );
@endphp
<section class="cennik section">
    <div class="container">
        <div class="row">
            <div class="section-title col-sm-12">
                <h2>@php echo $title @endphp</h2>
                @if($subtitle)
                <p class="section-title__subtitle">
                    @php echo $subtitle; @endphp
                </p>
                @endif
            </div>

            @if($tables)
            <div class="cennik__tables col-sm-12">
                @foreach ($tables as $table => $value)
                    <div class="cennik__tables__table table">
                        <div class="cennik__tables__table__head table__head">
                            <h2>{{$value['header']}}</h2>
                        </div>
                        <div class="cennik__tables__table__body table__body">
                            <table>
                                <tbody>
                                    @foreach ($value['table']['body'] as $key => $value)
                                        <tr>
                                        @foreach ($value as $key => $row)

                                            <td>@php
                                                echo $row['c'];
                                            @endphp</td>

                                        @endforeach
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endforeach
            </div>
            @endif
            @if($text)
            <div class="cennik__text text col-sm-12">
                {{$text}}
            </div>
            @endif
            @if($note)
            <div class="cennik__note note col-sm-12">
                {{$note}}
            </div>
            @endif
        </div>
    </div>
</section>
