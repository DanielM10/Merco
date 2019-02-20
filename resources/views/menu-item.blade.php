@if ($item['submenu'] == [])
    <li>
    <a href="{{ url($item['Controlador']) }}"><span class="{{($item['Icono']) }}"></span><br>{{ $item['Descipcion'] }} </a>
    </li>
@else
    <li class="dropdown">
    <a href="#"><span class="{{($item['Icono']) }}"></span> <span class="xn-text">{{ $item['Descipcion'] }} </span></a>
       
        <ul>
            @foreach ($item['submenu'] as $submenu)
                @if ($submenu['submenu'] == [])
                <li><a href="{{ url($submenu['Controlador']) }}"><span class="{{($submenu['Icono']) }}"></span>{{ $submenu['Descipcion'] }}</a></li>
                    
                @else
                    @include('partials.menu-item', [ 'item' => $submenu ])
                @endif
            @endforeach
        </ul>
    </li>
@endif