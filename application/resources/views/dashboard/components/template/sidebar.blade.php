<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        @foreach($items as $item)
            @if($item['type'] == 'group')
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#{{ $item['group'] }}" aria-expanded="false"
                       aria-controls="{{ $item['group'] }}">
                        <i class="mdi {{ $item['icon'] }} menu-icon"></i>
                        <span class="menu-title">{{ $item['name']}}</span>
                        <i class="mdi menu-arrow"></i>
                    </a>
                    <div class="collapse" id="{{ $item['group'] }}">
                        <ul class="nav flex-column sub-menu">
                            @foreach($item['links'] as $link)
                                <li class="nav-item">
                                    <a class="nav-link"
                                       href="{{ $link['url'] ?: route($link['route-name']) }}">{{ $link['name'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ $item['url'] ?: route($item['route-name']) }}">
                        <i class="mdi {{ $item['icon'] }} menu-icon"></i>
                        <span class="menu-title">{{ $item['name'] }}</span>
                    </a>
                </li>
            @endif
        @endforeach
    </ul>
</nav>
