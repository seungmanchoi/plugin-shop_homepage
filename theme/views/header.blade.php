<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">{{ $config->get('logoTitle') }}</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                @foreach(menu_list($config->get('gnb')) as $menu)
                    <li>
                        <a href="{{ url($menu['url']) }}">
                            {{ $menu['link'] }}
                        </a>
                    </li>
                @endforeach

            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                    <li class="member-name"><a href="{{ route('user.profile', ['user' => auth()->id()]) }}">{{ auth()->user()->getDisplayName() }}</a></li>

                    @if(auth()->user()->isAdmin())
                        <li><a href="{{ route('user.settings') }}"><i class="xi-cog"></i><span class="xe-sr-only">config</span></a></li>
                    @endif

                    <li class="li-block"><a href="{{ route('logout') }}">{{ xe_trans('xe::logout') }}</a></li>
                @else
                    <li class="li-block"><a href="{{ route('login') }}">{{ xe_trans('xe::login') }}</a></li>
                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>