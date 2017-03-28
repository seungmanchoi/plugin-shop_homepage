<p class="lead">Shop Name</p>
<div class="list-group">
    @foreach(menu_list($config->get('subMenu')) as $menu)
        <a href="{{ url($menu['url']) }}" class="list-group-item">
            {{ $menu['link'] }}
        </a>
    @endforeach
</div>