@extends('backend.layouts.master')
@section('title', '社交')

@section('styles')

@endsection

@section('content')
    <div class="wrapper wrapper-content  animated fadeInRight">
        <div class="row">

            <div class="col-sm-6">
                <div class="ibox">
                    <div class="ibox-content text-center">

                        <h3 class="m-b-xxs">社交示例 01</h3>
                    </div>

                </div>

                <div class="social-feed-box">

                    <div class="pull-right social-action dropdown">
                        <button data-toggle="dropdown" class="dropdown-toggle btn-white">
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu m-t-xs">
                            <li><a href="#">设置</a></li>
                        </ul>
                    </div>
                    <div class="social-avatar">
                        <a href="" class="pull-left">
                            <img alt="image" src="img/a1.jpg">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                尤小右
                            </a>
                            <small class="text-muted">8月18日 16:05 来自 微博 weibo.com</small>
                        </div>
                    </div>
                    <div class="social-body">
                        <p>
                            看到说是 React 的也是醉了，他说的是 falcor... Khan Academy 是最早在生产环境里使用 React 的公司之一
                        </p>

                        <div class="btn-group">
                            <button class="btn btn-white btn-xs"><i class="fa fa-thumbs-up"></i> 赞</button>
                            <button class="btn btn-white btn-xs"><i class="fa fa-comments"></i> 评论</button>
                            <button class="btn btn-white btn-xs"><i class="fa fa-share"></i> 分享</button>
                        </div>
                    </div>
                    <div class="social-footer">
                        <div class="social-comment">
                            <a href="" class="pull-left">
                                <img alt="image" src="img/a1.jpg">
                            </a>
                            <div class="media-body">
                                <a href="#">
                                    尤小右
                                </a> jQuery的作者在Twitter上发了一条这样的推，也是有点平衡了
                                <br/>
                                <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 26</a> -
                                <small class="text-muted">8月18日</small>
                            </div>
                        </div>

                        <div class="social-comment">
                            <a href="" class="pull-left">
                                <img alt="image" src="img/a2.jpg">
                            </a>
                            <div class="media-body">
                                <a href="#">
                                    尤小右
                                </a> John大概是在学习React和Flux。。。
                                <br/>
                                <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 11</a> -
                                <small class="text-muted">8月18日</small>
                            </div>
                        </div>

                        <div class="social-comment">
                            <a href="" class="pull-left">
                                <img alt="image" src="img/a3.jpg">
                            </a>
                            <div class="media-body">
                                <textarea class="form-control" placeholder="填写评论..."></textarea>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="social-feed-box">

                    <div class="pull-right social-action dropdown">
                        <button data-toggle="dropdown" class="dropdown-toggle btn-white">
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu m-t-xs">
                            <li><a href="#">设置</a></li>
                        </ul>
                    </div>
                    <div class="social-avatar">
                        <a href="" class="pull-left">
                            <img alt="image" src="img/a6.jpg">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                尤小右
                            </a>
                            <small class="text-muted">8月18日</small>
                        </div>
                    </div>
                    <div class="social-body">
                        <p>
                            【最高富帅、最受欢迎的技术——Bootsrap】众所周知，Bootstrap 是最受欢迎的 HTML、CSS 和 JS 框架，用处非常之广泛，在开发响应式布局、移动设备优先的 WEB 项目中都极其重要，极客学院的相关课程已经更新完毕，简直分分钟变身IT大师==>开始学习
                        </p>
                        <p>
                            介绍25个用来做新手引导的jQuery插件：
                        </p>
                        <img src="img/p1.jpg" class="img-responsive">
                        <div class="btn-group">
                            <button class="btn btn-white btn-xs"><i class="fa fa-thumbs-up"></i> 赞</button>
                            <button class="btn btn-white btn-xs"><i class="fa fa-comments"></i> 评论</button>
                            <button class="btn btn-white btn-xs"><i class="fa fa-share"></i> 分享</button>
                        </div>
                    </div>
                    <div class="social-footer">
                        <div class="social-comment">
                            <a href="" class="pull-left">
                                <img alt="image" src="img/a1.jpg">
                            </a>
                            <div class="media-body">
                                <a href="#">
                                    尤小右
                                </a> Clusterize.js 仅4k大小的js库，可以优化你的大型数据表格的性能，效果非常明显，推荐
                                <br/>
                                <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 26</a> -
                                <small class="text-muted">8月18日</small>
                            </div>
                        </div>

                        <div class="social-comment">
                            <a href="" class="pull-left">
                                <img alt="image" src="img/a2.jpg">
                            </a>
                            <div class="media-body">
                                <a href="#">
                                    尤小右
                                </a> 主页君自己买的电子版，早知道就。。。
                                <br/>
                                <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 11</a> -
                                <small class="text-muted">8月18日</small>
                            </div>
                        </div>

                        <div class="social-comment">
                            <a href="" class="pull-left">
                                <img alt="image" src="img/a8.jpg">
                            </a>
                            <div class="media-body">
                                <a href="#">
                                    尤小右
                                </a> 一张图学会Javascript，via：
                                <br/>
                                <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 11</a> -
                                <small class="text-muted">8月18日</small>
                            </div>
                        </div>

                        <div class="social-comment">
                            <a href="" class="pull-left">
                                <img alt="image" src="img/a3.jpg">
                            </a>
                            <div class="media-body">
                                <textarea class="form-control" placeholder="填写评论..."></textarea>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="social-feed-box">

                    <div class="pull-right social-action dropdown">
                        <button data-toggle="dropdown" class="dropdown-toggle btn-white">
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu m-t-xs">
                            <li><a href="#">设置</a></li>
                        </ul>
                    </div>
                    <div class="social-avatar">
                        <a href="" class="pull-left">
                            <img alt="image" src="img/a4.jpg">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                尤小右
                            </a>
                            <small class="text-muted">8月18日</small>
                        </div>
                    </div>
                    <div class="social-body">
                        <p>
                            5本《Node与Express开发》免费抽】本书涵盖Express 4.0，系统讲解利用Express开发Web应用的流程和步骤。通过实例讲授了开发网站和REST API的基础知识。还有设计与实现Web架构的最佳实践，帮你用Express构建单页、多页以及混合Web应用。
                        </p>
                        <div class="btn-group">
                            <button class="btn btn-white btn-xs"><i class="fa fa-thumbs-up"></i> 赞</button>
                            <button class="btn btn-white btn-xs"><i class="fa fa-comments"></i> 评论</button>
                            <button class="btn btn-white btn-xs"><i class="fa fa-share"></i> 分享</button>
                        </div>
                    </div>
                    <div class="social-footer">


                        <div class="social-comment">
                            <a href="" class="pull-left">
                                <img alt="image" src="img/a8.jpg">
                            </a>
                            <div class="media-body">
                                <a href="#">
                                    尤小右
                                </a> 几位中奖，请私信我你们的收获地址、电话等信息，没中的同学敬请期待下次哦
                                <br/>
                                <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 11</a> -
                                <small class="text-muted">8月18日</small>
                            </div>
                        </div>

                        <div class="social-comment">
                            <a href="" class="pull-left">
                                <img alt="image" src="img/a3.jpg">
                            </a>
                            <div class="media-body">
                                <textarea class="form-control" placeholder="填写评论..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-6">
                <div class="ibox ">
                    <div class="ibox-content text-center">
                        <h3 class="m-b-xxs">社交示例 02</h3>
                    </div>
                </div>
                <div class="social-feed-separated">

                    <div class="social-avatar">
                        <a href="">
                            <img alt="image" src="img/a5.jpg">
                        </a>
                    </div>

                    <div class="social-feed-box">

                        <div class="pull-right social-action dropdown">
                            <button data-toggle="dropdown" class="dropdown-toggle btn-white">
                                <i class="fa fa-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu m-t-xs">
                                <li><a href="#">设置</a></li>
                            </ul>
                        </div>
                        <div class="social-avatar">
                            <a href="#">
                                尤小右
                            </a>
                            <small class="text-muted">8月18日</small>
                        </div>
                        <div class="social-body">
                            <p>
                                新技术新概念很多，而且有了新定律：前端开发每18月会难一倍
                            </p>
                            <img src="img/p2.jpg" class="img-responsive">
                            <div class="btn-group">
                                <button class="btn btn-white btn-xs"><i class="fa fa-thumbs-up"></i> 赞</button>
                                <button class="btn btn-white btn-xs"><i class="fa fa-comments"></i> 评论</button>
                                <button class="btn btn-white btn-xs"><i class="fa fa-share"></i> 分享</button>
                            </div>
                        </div>
                        <div class="social-footer">
                            <div class="social-comment">
                                <a href="" class="pull-left">
                                    <img alt="image" src="img/a3.jpg">
                                </a>
                                <div class="media-body">
                                    <a href="#">
                                        尤小右
                                    </a> 图表展示、数据可视化是前端领域一个麻烦且重要的事情，这里推荐了11个JS图表库，各取所需吧
                                    <br/>
                                    <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 26</a> -
                                    <small class="text-muted">8月18日</small>
                                </div>
                            </div>

                            <div class="social-comment">
                                <a href="" class="pull-left">
                                    <img alt="image" src="img/a4.jpg">
                                </a>
                                <div class="media-body">
                                    <a href="#">
                                        尤小右
                                    </a> 看上去不错，如能结合乐曲播放有个动效就更酷了 :z
                                    <br/>
                                    <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 11</a> -
                                    <small class="text-muted">8月18日</small>
                                </div>

                                <div class="social-comment">
                                    <a href="" class="pull-left">
                                        <img alt="image" src="img/a7.jpg">
                                    </a>
                                    <div class="media-body">
                                        <a href="#">
                                            尤小右
                                        </a> 用checkbox + CSS 也能玩出来很多花样，来看看这些有趣的例子吧！
                                        <br/>
                                        <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 11</a> -
                                        <small class="text-muted">8月18日</small>
                                    </div>
                                </div>

                                <div class="social-comment">
                                    <a href="" class="pull-left">
                                        <img alt="image" src="img/a8.jpg">
                                    </a>
                                    <div class="media-body">
                                        <textarea class="form-control" placeholder="填写评论..."></textarea>
                                    </div>
                                </div>

                            </div>

                            <div class="social-comment">
                                <a href="" class="pull-left">
                                    <img alt="image" src="img/a6.jpg">
                                </a>
                                <div class="media-body">
                                    <a href="#">
                                        尤小右
                                    </a> 有情怀的工程师，赞。
                                    <br/>
                                    <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 26</a> -
                                    <small class="text-muted">8月18日</small>
                                </div>
                            </div>

                            <div class="social-comment">
                                <a href="" class="pull-left">
                                    <img alt="image" src="img/a7.jpg">
                                </a>
                                <div class="media-body">
                                    <a href="#">
                                        尤小右
                                    </a> 几位同学中奖，请将你们的收获地址电话姓名私信给我哦~
                                    <br/>
                                    <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 26</a> -
                                    <small class="text-muted">8月18日</small>
                                </div>
                            </div>

                            <div class="social-comment">
                                <a href="" class="pull-left">
                                    <img alt="image" src="img/a3.jpg">
                                </a>
                                <div class="media-body">
                                    <textarea class="form-control" placeholder="填写评论..."></textarea>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="social-feed-separated">

                    <div class="social-avatar">
                        <a href="">
                            <img alt="image" src="img/a8.jpg">
                        </a>
                    </div>

                    <div class="social-feed-box">

                        <div class="pull-right social-action dropdown">
                            <button data-toggle="dropdown" class="dropdown-toggle btn-white">
                                <i class="fa fa-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu m-t-xs">
                                <li><a href="#">设置</a></li>
                            </ul>
                        </div>
                        <div class="social-avatar">
                            <a href="#">
                                尤小右
                            </a>
                            <small class="text-muted">8月18日</small>
                        </div>
                        <div class="social-body">
                            <p>
                                这次带来【5本 《你不知道的JavaScript（上卷）》】。在本书中，我们要直面当前JavaScript开发者不求甚解的大趋势，深入理解语言内部的机制。本书既适合JavaScript语言初学者阅读，又适合经验丰富的JavaScript开发人员深入学习。关注本博并转发，即可参与抽奖，8月17日开奖，感谢@图灵教育
                            </p>
                            <div class="btn-group">
                                <button class="btn btn-white btn-xs"><i class="fa fa-thumbs-up"></i> 赞</button>
                                <button class="btn btn-white btn-xs"><i class="fa fa-comments"></i> 评论</button>
                                <button class="btn btn-white btn-xs"><i class="fa fa-share"></i> 分享</button>
                            </div>
                        </div>
                        <div class="social-footer">
                            <div class="social-comment">
                                <a href="" class="pull-left">
                                    <img alt="image" src="img/a3.jpg">
                                </a>
                                <div class="media-body">
                                    <a href="#">
                                        尤小右
                                    </a> 是这样的，不过要解决的问题还是那些，只是方法越来越简单越来越强大。
                                    <br/>
                                    <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 26</a> -
                                    <small class="text-muted">8月18日</small>
                                </div>
                            </div>

                            <div class="social-comment">
                                <a href="" class="pull-left">
                                    <img alt="image" src="img/a1.jpg">
                                </a>
                                <div class="media-body">
                                    <a href="#">
                                        尤小右
                                    </a> #粉丝福利#又来了，这次带来【5本 《MEAN Web开发》】MEAN是流行的现代Web开发工具的集合，包括MongoDB、Express、AngularJS和Node.js，为现代Web开发提供了一种创新性的方法。 关注本博并转发，即可参与抽奖
                                    <br/>
                                    <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 11</a> -
                                    <small class="text-muted">8月18日</small>
                                </div>
                            </div>

                            <div class="social-comment">
                                <a href="" class="pull-left">
                                    <img alt="image" src="img/a4.jpg">
                                </a>
                                <div class="media-body">
                                    <textarea class="form-control" placeholder="填写评论..."></textarea>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="social-feed-separated">

                    <div class="social-avatar">
                        <a href="">
                            <img alt="image" src="img/a2.jpg">
                        </a>
                    </div>

                    <div class="social-feed-box">

                        <div class="pull-right social-action dropdown">
                            <button data-toggle="dropdown" class="dropdown-toggle btn-white">
                                <i class="fa fa-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu m-t-xs">
                                <li><a href="#">设置</a></li>
                            </ul>
                        </div>
                        <div class="social-avatar">
                            <a href="#">
                                尤小右
                            </a>
                            <small class="text-muted">8月18日 12:48 来自 微博 weibo.com</small>
                        </div>
                        <div class="social-body">
                            <p>
                                我在 GitHub 上为《CSS Secrets》这本书的中文版建了一个公开项目，我会把所有的样章、勘误、注解发到这里，大家对于这本书的疑问、讨论、反馈也请在这里发
                            </p>
                            <div class="btn-group">
                                <button class="btn btn-white btn-xs"><i class="fa fa-thumbs-up"></i> 赞</button>
                                <button class="btn btn-white btn-xs"><i class="fa fa-comments"></i> 评论</button>
                                <button class="btn btn-white btn-xs"><i class="fa fa-share"></i> 分享</button>
                            </div>
                        </div>
                        <div class="social-footer">

                            <div class="social-comment">
                                <a href="" class="pull-left">
                                    <img alt="image" src="img/a4.jpg">
                                </a>
                                <div class="media-body">
                                    <textarea class="form-control" placeholder="填写评论..."></textarea>
                                </div>
                            </div>

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
@endsection