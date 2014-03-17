<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $brand }}</title>
    {{ $cruddy->styles() }}
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="{{ $brand_url }}" class="navbar-brand">{{ $brand }}</a>
            </div>
            
            <div class="navbar-collapse">
                {{ $cruddy->menu() }}
            
                @if ($logout_url)
                    <p class="navbar-text navbar-right">
                        <a href="{{ $logout_url }}" type="button" class="navbar-link">@lang('cruddy::app.logout')</a>
                    </p>
                @endif
            </div>
        </div>
    </nav>

    <div class="main-content" id="content">@yield('content', $content)</div>

    <script>
    Cruddy = {{ $cruddy->toJSON() }};
    </script>

    {{ $cruddy->scripts() }}
</body>
</html>