@extends('backend.layouts.master')
@section('title', 'sparkline 图表')

@section('styles')

@endsection

@section('content')
    <div class="wrapper wrapper-content animated fadeInDown">

        <div class="row">
            <div class="col-sm-5">
                <div class="jumbotron">
                    <h1>Sparkline</h1>
                    <p>这是另一个可视化图表库</p>
                    <p><a href="http://omnipotent.net/jquery.sparkline" target="_blank" class="btn btn-primary btn-lg" role="button">了解 Sparkline</a>
                    </p>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Sparkline图表 <small>自定义颜色</small></h5>
                        <div class="ibox-tools">
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div>
                        <table class="table table-bordered white-bg">
                            <thead>
                            <tr>
                                <th>图表</th>
                                <th>类型</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>
                                    <span id="sparkline1"></span>
                                </td>
                                <td>
                                    内联线性图
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span id="sparkline2"></span>
                                </td>
                                <td>
                                    柱状图
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span id="sparkline3"></span>
                                </td>
                                <td>
                                    饼状图
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span id="sparkline4"></span>
                                </td>
                                <td>
                                    长线性图
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span id="sparkline5"></span>
                                </td>
                                <td>
                                    三态图
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span id="sparkline6"></span>
                                </td>
                                <td>
                                    散点图
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>自定义饼状图尺寸</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="graph_sparkline.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="graph_sparkline.html#">选项1</a>
                                </li>
                                <li><a href="graph_sparkline.html#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content text-center h-200">
                        <span id="sparkline7"></span>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>自定义柱状图尺寸</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="graph_sparkline.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="graph_sparkline.html#">选项1</a>
                                </li>
                                <li><a href="graph_sparkline.html#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content text-center h-200">
                        <span id="sparkline8"></span>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>自定义线性图尺寸</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="graph_sparkline.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="graph_sparkline.html#">选项1</a>
                                </li>
                                <li><a href="graph_sparkline.html#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content text-center h-200">
                        <span id="sparkline9"></span>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('scripts')
    <!-- Sparkline -->
    <script src="{{ asset('js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- 自定义js -->
    <script src="{{ asset('backend/js/content.js?v=1.0.0') }}"></script>


    <!-- Sparkline demo data -->
    <script src="{{ asset('js/demo/sparkline-demo.js') }}"></script>
@endsection