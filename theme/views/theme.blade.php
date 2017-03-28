{{-- header --}}
@include($theme::view('header'))

{{-- contents --}}
@include($theme::view($config->get('layout')))

{{-- footer --}}
@include($theme::view('footer'))

{{-- meta(viewport) --}}
{{ app('xe.frontend')->meta()->name('viewport')->content(
    'width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no'
)->load() }}

{{-- stylesheet --}}
{{ app('xe.frontend')->css([
    $theme::asset('css/bootstrap.min.css'),
    $theme::asset('css/shop-homepage.css'),
    $theme::asset('css/theme.css'),
])->load() }}

{{-- script --}}
{{ app('xe.frontend')->js([
    $theme::asset('js/bootstrap.min.js'),
])->load() }}