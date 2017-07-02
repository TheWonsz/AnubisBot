<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>{{ $title.' - '.env('APP_NAME') }}</title>
        {!! Html::style('css/site.min.css') !!}
        {!! Html::style('css/animate.min.css') !!}
        {!! Html::style('css/zenburn.css') !!}
        {!! Html::script('js/global.min.js') !!}
    </head>
    <body>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="navbar-inner">
                <div class="container">
                    <a href="{{ url('/') }}" class="navbar-brand">{{ env('APP_NAME') }}</a>
                    <div class="btn-group navbar-form navbar-right">
                        <button class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $version }} <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ url('/1.0') }}" class="version-selection">1.0</a>
                                <a href="{{ url('/0.4') }}" class="version-selection">0.4</a>
                            </li>
                        </ul>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navigation">
                            <span class="sr-only">Mobile Menu</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
        <div class="pageContent">
            <div class="container">
                <div class="col-lg-3 collapse navbar-collapse bs-navbar-collapse sidebar-navigation" style="border-right: 1px solid #888;">
                    @include('docs.markdown.'.str_replace('.', '_', $version).'.navigation')
                </div>
                <div class="col-lg-9">
                    @yield('content')
                </div>
            </div>
        </div>
        <div class="footer navbar-default navbar-footer">
            <div class="container">
                <div class="footer_text">
                    Site &copy; <span class="date">{{ date('Y') }}</span>
                    <a href="https://kalebklein.com" target="_blank">Kaleb Klein</a>.
                </div>
            </div>
        </div>
        <div id="backToTopA"><div class="arrow"></div></div>
        <script type="text/javascript">
            $(function()
            {
                $("pre code").each(function(i, block)
                {
                    var className = $(this).attr('class');
                    $(this).removeClass(className).addClass(className.replace('language-', ''));
                    hljs.highlightBlock(block);
                });
            });
        </script>
    </body>
</html>
