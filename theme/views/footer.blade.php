@if($config->get('useFooter') == 'y')
<div class="container">

    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                {!! $config->get('footerCopyright') !!}
            </div>
        </div>
    </footer>

</div>
@endif