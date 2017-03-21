@extends('backend.layouts.master')
@section('title', '代码编辑器')

@section('styles')
    <link href="{{ asset('css/plugins/codemirror/codemirror.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/codemirror/ambiance.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="wrapper wrapper-content  animated fadeInRight">
        <div class="row">
            <div class="col-sm-6">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>基本编辑器</h5>
                    </div>
                    <div class="ibox-content">

                        <p class="m-b-lg">
                            <strong>CodeMirror</strong> 是一个灵活的文本代码编辑器。它是专门用于编辑代码，并附带一些语言模块和插件，实现更先进的编辑功能。
                        </p>

                        <textarea id="code1">
<script>
    // Code goes here

    // For demo purpose - animation css script
    function animationHover(element, animation) {
        element = $(element);
        element.hover(
                function () {
                    element.addClass('animated ' + animation);
                },
                function () {
                    //wait for animation to finish before removing classes
                    window.setTimeout(function () {
                        element.removeClass('animated ' + animation);
                    }, 2000);
                });
    }
</script>
</textarea>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>主题示例</h5>
                    </div>
                    <div class="ibox-content">

                        <p class="m-b-lg">
                            <strong>CodeMirror</strong>提供丰富的API接口和CSS主题，详情请访问
                            <a href="http://codemirror.net/" target="_blank">http://codemirror.net/</a>
                        </p>
                        <textarea id="code2">
var SpeechApp = angular.module('SpeechApp', []);

function VoiceCtrl($scope) {

    $scope.said='...';

    $scope.helloWorld = function() {
        $scope.said = "Hello world!";
    }

    $scope.commands = {
        'hello (world)': function() {
            if (typeof console !== "undefined") console.log('hello world!')
            $scope.$apply($scope.helloWorld);
        },
        'hey': function() {
            if (typeof console !== "undefined") console.log('hey!')
            $scope.$apply($scope.helloWorld);
        }
    };

    annyang.debug();
    annyang.init($scope.commands);
    annyang.start();
}
</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Peity -->
    <script src="{{ asset('js/plugins/peity/jquery.peity.min.js') }}"></script>

    <!-- CodeMirror -->
    <script src="{{ asset('js/plugins/codemirror/codemirror.js') }}"></script>
    <script src="{{ asset('js/plugins/codemirror/mode/javascript/javascript.js') }}"></script>

    <!-- 自定义js -->
    <script src="{{ asset('backend/js/content.js?v=1.0.0') }}"></script>

    <script>
        $(document).ready(function () {

            var editor_one = CodeMirror.fromTextArea(document.getElementById("code1"), {
                lineNumbers: true,
                matchBrackets: true,
                styleActiveLine: true,
                theme: "ambiance"
            });

            var editor_two = CodeMirror.fromTextArea(document.getElementById("code2"), {
                lineNumbers: true,
                matchBrackets: true,
                styleActiveLine: true
            });

        });
    </script>
@endsection