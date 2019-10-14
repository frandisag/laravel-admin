<div class="box-body table-responsive no-padding">
    <table {!! $attributes !!}>
        <thead>
        <tr>
            @foreach($headers as $header)
                <th>{{ $header }}</th>
            @endforeach
        </tr>
        </thead>
        <tbody>
        @foreach($rows as $row)
        <tr>
            @foreach($row as $item)
                @if(explode(':',$item)[0] == 'action')
                    <td align="center">
                        <a href="{!! explode(':',$item)[1] !!}">
                            <i class="fa fa-edit"></i>
                        </a>
                    </td>
                @else
                    <td>{!! $item !!}</td>
                @endif
            @endforeach
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
