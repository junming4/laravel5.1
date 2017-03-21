@extends('backend.layouts.master')
@section('title', '国产富文本编辑器')

@section('styles')
    <link href="{{ asset('css/plugins/simditor/simditor.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="wrapper wrapper-content">

        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>国产simditor富文本编辑器</h5>
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

                        <textarea id="editor" placeholder="这里输入内容" autofocus>
                            <p>Simditor 是团队协作工具 <a href="http://tower.im" target="_blank">Tower</a> 使用的富文本编辑器。</p>
                            <p>相比传统的编辑器它的特点是：</p>
                            <ul>
                                <li>功能精简，加载快速</li>
                                <li>输出格式化的标准 HTML</li>
                                <li>每一个功能都有非常优秀的使用体验</li>
                            </ul>
                            <p>兼容的浏览器：IE10+、Chrome、Firefox、Safari。</p>
                        </textarea>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">

                    <div class="ibox-content">

                        <h2>
                            Simditor简介
                        </h2>
                        <p>
                            Simditor是Tower开源的所见即所得的在线富文本编辑器。它是一款十分优秀的国产富文本编辑器。Simditor的理念是保持简单，避免过度的功能，每一个特性都追求极致的用户体验。同时，Simditor也很容易扩展。
                        </p>

                        <div class="alert alert-warning">
                            官网：<a href="http://simditor.tower.im/" target="_blank">http://simditor.tower.im/</a>
                            <br>GitHub：
                            <a href="https://github.com/mycolorway/simditor" target="_blank">https://github.com/mycolorway/simditor</a>

                        </div>
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
    <script type="text/javascript" src="{{ asset('js/plugins/simditor/module.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/simditor/uploader.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/simditor/hotkeys.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/simditor/simditor.js') }}"></script>
    <script>
        $(document).ready(function () {
            var editor = new Simditor({
                textarea: $('#editor'),
                defaultImage: 'img/a9.jpg'
            });
        });
    </script>
@endsection