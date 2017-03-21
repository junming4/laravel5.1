@extends('backend.layouts.master')
@section('title', 'Markdown文本编辑器')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/markdown/bootstrap-markdown.min.css') }}" />
@endsection

@section('content')
    <div class="wrapper wrapper-content">

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Markdown文本编辑器</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="form_editors.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="form_editors.html#">选项1</a>
                                </li>
                                <li><a href="form_editors.html#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <textarea name="content" data-provide="markdown" rows="10"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">

                    <div class="ibox-content">
                        <div data-provide="markdown-editable">
                            <h2>Bootstrap-Markdown简介</h2>
                            <p>Bootstrap-Markdown是一款优秀的markdown编辑器，提供了实用的API，利用插件进行扩展。<code>你可以单击这段文字试试</code>
                            </p>
                        </div>
                        <p class="alert alert-success alert-dismissable m-t">
                            更多示例请访问：<a href="http://toopay.github.io/bootstrap-markdown/">http://toopay.github.io/bootstrap-markdown/</a>
                            <br>GitHub：
                            <a href="https://github.com/toopay/bootstrap-markdown">https://github.com/toopay/bootstrap-markdown</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- 自定义js -->
    <script src="{{ asset('backend/js/content.js?v=1.0.0') }}"></script>

    <!-- simditor -->
    <script type="text/javascript" src="{{ asset('js/plugins/markdown/markdown.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/markdown/to-markdown.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/markdown/bootstrap-markdown.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/markdown/bootstrap-markdown.zh.js') }}"></script>
@endsection