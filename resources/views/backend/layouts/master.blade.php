<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">

    <title> @yield('title') - 后台管理</title>

    <meta name="keywords" content="后台管理">
    <meta name="description" content="后台管理">

    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html"/>
    <![endif]-->

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link href="{{ asset('css/bootstrap.min.css?v=3.3.6') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css?v=4.4.0') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css?v=4.1.0') }}" rel="stylesheet">
    @yield('styles')
</head>
<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">

{{--内容部分--}}
<div id="wrapper">
    {{--导航部分--}}
    @include('backend.partials._nav')

    <div id="page-wrapper" class="gray-bg dashbard-1">
        {{--静态头部部分--}}
        @include('backend.partials._navbar_static_top')

        <div class="row J_mainContent" id="content-main" style="overflow-y:auto;">
            {{--内容部分--}}
            @yield('content')
            {{--内容结束--}}
        </div>
    </div>

</div>

<!-- 全局js -->
<script src=" {{ asset('js/jquery.min.js?v=2.1.4') }}"></script>
<script src="{{ asset('js/bootstrap.min.js?v=3.3.6') }}"></script>
<script src=" {{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('js/plugins/layer/layer.min.js') }}"></script>

<!-- 自定义js -->
<script type="text/javascript" src="{{ asset('backend/js/hAdmin.js?v=4.1.0') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/index.js') }}"></script>

<!-- 第三方插件 -->
<script type="text/javascript" src="{{ asset('js/plugins/pace/pace.min.js') }}"></script>

@yield('scripts')
</body>
</html>
