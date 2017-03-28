<!-- Page Content -->
<div class="container">
    <div class="row">

        @if($config->get('useSubMenu'))
            <div class="col-md-3">
                <!-- sub_menu.blade.php -->
                @include($theme::view('sub_menu'))
            </div>
            <div class="col-md-9">
                {!! $content !!}
            </div>
        @else
            <div class="col-md-12">
                {!! $content !!}
            </div>
        @endif

    </div>
</div>
<!-- /.container -->