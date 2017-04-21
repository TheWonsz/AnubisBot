<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>{{ $title.' - '.config_get('appname', 'app') }}</title>
    <link rel="stylesheet" type="text/css" href="{{ Html::asset('css/site.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ Html::asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ Html::asset('css/zenburn.css') }}">
    <script type="text/javascript" src="{{ Html::asset('js/global.min.js') }}"></script>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="navbar-inner">
        <div class="container">
          <a class="navbar-brand" href="{{ Html::url('/') }}">{{ config_get('appname', 'app') }}</a>
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Mobile Menu</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
            <ul class="nav navbar-nav navbar-right">
              <li>{!! Html::link('/reference', 'Reference', ['target' => '_blank']) !!}</li>
              <li>{!! Html::link('http://api.kalebklein.com/scara', 'Framework Demo') !!}</li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Extras <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li>{!! Html::link('https://github.com/ScaraMVC/Scara', 'View on Github', ['target' => '_blank']) !!}</li>
                  <li>{!! Html::link('https://github.com/ScaraMVC/Documentation', 'Documentation Source Code', ['target' => '_blank']) !!}</li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </nav>
    <div class="pageContent">
      <div class="container">
        <div class="col-lg-2" style="border-right: 1px solid #888;">
          <h5 class="sidebar-head">Getting Started</h5>
          {!! Html::link('/0.4/installation', 'Installation') !!}<br>
          <h5 class="sidebar-head">Extras</h5>
          {!! Html::link('/0.4/helpers', 'Helpers') !!}<br>
        </div>
        <div class="col-lg-10">
          @yield('content')
        </div>
      </div>
    </div>
    <div class="footer navbar-default navbar-footer">
      <div class="container">
        <div class="footer_text">
          Site &copy; <span class="date">{{ date('Y') }}</span>
          {!! Html::link('http://kalebklein.com', 'Kaleb Klein',
          ['target' => '_blank']) !!}.
          |
          {{ Benchmark::check('scara') }} ms
          |
          {{ Benchmark::memcheck() }} mb
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
