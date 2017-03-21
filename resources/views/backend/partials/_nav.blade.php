<!--左侧导航开始-->
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="nav-close"><i class="fa fa-times-circle"></i>
    </div>
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                                    <span class="block m-t-xs" style="font-size:20px;">
                                        <i class="fa fa-area-chart"></i>
                                        <strong class="font-bold">hAdmin</strong>
                                    </span>
                                </span>
                    </a>
                </div>
                <div class="logo-element">hAdmin
                </div>
            </li>
            <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                <span class="ng-scope">分类</span>
            </li>
            <li>
                <a class="J_menuItem" href="{{ route('admin.index') }}">
                    <i class="fa fa-home"></i>
                    <span class="nav-label">主页</span>
                </a>
            </li>
            <li @if(Request::is('admin/chart/*')) class="active" @endif>
                <a href="#">
                    <i class="fa fa fa-bar-chart-o"></i>
                    <span class="nav-label">统计图表</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li @if(Request::is('admin/chart/echats')) class="active" @endif>
                        <a class="J_menuItem" href="{{ route('admin.chart.echats') }}">百度ECharts</a>
                    </li>
                    <li @if(Request::is('admin/chart/flots')) class="active" @endif>
                        <a class="J_menuItem" href="{{ route('admin.chart.flots') }}">Flot</a>
                    </li>
                    <li @if(Request::is('admin/chart/morris')) class="active" @endif>
                        <a class="J_menuItem" href="{{ route('admin.chart.morris') }}">Morris.js</a>
                    </li>
                    <li @if(Request::is('admin/chart/rickshaws')) class="active" @endif>
                        <a class="J_menuItem" href="{{ route('admin.chart.rickshaws') }}">Rickshaw</a>
                    </li>
                    <li @if(Request::is('admin/chart/peities')) class="active" @endif>
                        <a class="J_menuItem" href="{{ route('admin.chart.peities') }}">Peity</a>
                    </li>
                    <li @if(Request::is('admin/chart/sparklines')) class="active" @endif>
                        <a class="J_menuItem" href="{{ route('admin.chart.sparklines') }}">Sparkline</a>
                    </li>
                    <li @if(Request::is('admin/chart/metrics')) class="active" @endif>
                        <a class="J_menuItem" href="{{ route('admin.chart.metrics') }}">图表组合</a>
                    </li>
                </ul>
            </li>
            <li class="line dk"></li>
            <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                <span class="ng-scope">分类</span>
            </li>
            <li @if(Request::is('admin/mail/*')) class="active" @endif>
                <a href="{{ route('admin.mail.index') }}"><i class="fa fa-envelope"></i> <span
                            class="nav-label">信箱 </span><span
                            class="label label-warning pull-right">16</span></a>
                <ul class="nav nav-second-level">
                    <li @if(Request::is('admin/mail/index')) class="active" @endif><a class="J_menuItem"
                                                                                      href="{{ route('admin.mail.index') }}">收件箱</a>
                    </li>
                    <li @if(Request::is('admin/mail/show')) class="active" @endif><a class="J_menuItem"
                                                                                     href="{{ route('admin.mail.show') }}">查看邮件</a>
                    </li>
                    <li @if(Request::is('admin/mail/create')) class="active" @endif><a class="J_menuItem"
                                                                                       href="{{ route('admin.mail.create') }}">写信</a>
                    </li>
                </ul>
            </li>

            {{--表单部分--}}
            <li @if(Request::is('admin/form/*')) class="active" @endif>
                <a href="javascript:void(0);">
                    <i class="fa fa-edit"></i>
                    <span class="nav-label">表单</span><span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li @if(Request::is('admin/form/basic')) class="active" @endif>
                        <a class="J_menuItem" href="{{ route('admin.form.basic') }}">基本表单</a>
                    </li>
                    <li @if(Request::is('admin/form/validates')) class="active" @endif><a class="J_menuItem" href="{{ route('admin.form.validates') }}">表单验证</a>
                    </li>
                    <li @if(Request::is('admin/form/advanced')) class="active" @endif>
                        <a class="J_menuItem" href="{{ route('admin.form.advanced') }}">高级插件</a>
                    </li>
                    <li @if(Request::is('admin/form/wizard')) class="active" @endif>
                        <a class="J_menuItem" href="{{ route('admin.form.wizard') }}">表单向导</a>
                    </li>
                    <li @if(Request::is('admin/form/upload/*')) class="active" @endif>
                        <a href="#">文件上传 <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li @if(Request::is('admin/form/upload/webuploader')) class="active" @endif>
                                <a class="J_menuItem" href="{{ route('admin.form.upload.webuploader') }}">百度WebUploader</a>
                            </li>
                            <li @if(Request::is('admin/form/upload/dropzone')) class="active" @endif>
                                <a class="J_menuItem" href="{{ route('admin.form.upload.dropzone') }}">DropzoneJS</a>
                            </li>
                        </ul>
                    </li>
                    <li @if(Request::is('admin/form/editors/*')) class="active" @endif>
                        <a href="#">编辑器 <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li @if(Request::is('admin/form/editors/summer')) class="active" @endif>
                                <a class="J_menuItem" href="{{ route('admin.form.editors.summer') }}">富文本编辑器</a>
                            </li>
                            <li @if(Request::is('admin/form/editors/sim')) class="active" @endif>
                                <a class="J_menuItem" href="{{ route('admin.form.editors.sim') }}">simditor</a>
                            </li>
                            <li @if(Request::is('admin/form/editors/markdown')) class="active" @endif>
                                <a class="J_menuItem" href="{{ route('admin.form.editors.markdown') }}">MarkDown编辑器</a>
                            </li>
                            <li @if(Request::is('admin/form/editors/code')) class="active" @endif>
                                <a class="J_menuItem" href="{{ route('admin.form.editors.code') }}">代码编辑器</a>
                            </li>
                        </ul>
                    </li>
                    <li @if(Request::is('admin/form/layerdate')) class="active" @endif>
                        <a class="J_menuItem" href="{{ route('admin.form.layerdate') }}">日期选择器layerDate</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">页面</span><span
                            class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a class="J_menuItem" href="contacts.html">联系人</a>
                    </li>
                    <li><a class="J_menuItem" href="profile.html">个人资料</a>
                    </li>
                    <li>
                        <a href="#">项目管理 <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li><a class="J_menuItem" href="projects.html">项目</a>
                            </li>
                            <li><a class="J_menuItem" href="project_detail.html">项目详情</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="J_menuItem" href="teams_board.html">团队管理</a>
                    </li>
                    <li><a class="J_menuItem" href="social_feed.html">信息流</a>
                    </li>
                    <li><a class="J_menuItem" href="clients.html">客户管理</a>
                    </li>
                    <li><a class="J_menuItem" href="file_manager.html">文件管理器</a>
                    </li>
                    <li><a class="J_menuItem" href="calendar.html">日历</a>
                    </li>
                    <li>
                        <a href="#">博客 <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li><a class="J_menuItem" href="blog.html">文章列表</a>
                            </li>
                            <li><a class="J_menuItem" href="article.html">文章详情</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="J_menuItem" href="faq.html">FAQ</a>
                    </li>
                    <li>
                        <a href="#">时间轴 <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li><a class="J_menuItem" href="timeline.html">时间轴</a>
                            </li>
                            <li><a class="J_menuItem" href="timeline_v2.html">时间轴v2</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="J_menuItem" href="pin_board.html">标签墙</a>
                    </li>
                    <li>
                        <a href="#">单据 <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li><a class="J_menuItem" href="invoice.html">单据</a>
                            </li>
                            <li><a class="J_menuItem" href="invoice_print.html">单据打印</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="J_menuItem" href="search_results.html">搜索结果</a>
                    </li>
                    <li><a class="J_menuItem" href="forum_main.html">论坛</a>
                    </li>
                    <li>
                        <a href="#">即时通讯 <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li><a class="J_menuItem" href="chat_view.html">聊天窗口</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">登录注册相关 <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li><a href="login.html" target="_blank">登录页面</a>
                            </li>
                            <li><a href="login_v2.html" target="_blank">登录页面v2</a>
                            </li>
                            <li><a href="register.html" target="_blank">注册页面</a>
                            </li>
                            <li><a href="lockscreen.html" target="_blank">登录超时</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="J_menuItem" href="404.html">404页面</a>
                    </li>
                    <li><a class="J_menuItem" href="500.html">500页面</a>
                    </li>
                    <li><a class="J_menuItem" href="empty_page.html">空白页</a>
                    </li>
                </ul>
            </li>
            <li class="line dk"></li>
            <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                <span class="ng-scope">分类</span>
            </li>
            <li>
                <a href="#"><i class="fa fa-flask"></i> <span class="nav-label">UI元素</span><span
                            class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a class="J_menuItem" href="typography.html">排版</a>
                    </li>
                    <li>
                        <a href="#">字体图标 <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a class="J_menuItem" href="fontawesome.html">Font Awesome</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="glyphicons.html">Glyphicon</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="iconfont.html">阿里巴巴矢量图标库</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">拖动排序 <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li><a class="J_menuItem" href="draggable_panels.html">拖动面板</a>
                            </li>
                            <li><a class="J_menuItem" href="agile_board.html">任务清单</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="J_menuItem" href="buttons.html">按钮</a>
                    </li>
                    <li><a class="J_menuItem" href="tabs_panels.html">选项卡 &amp; 面板</a>
                    </li>
                    <li><a class="J_menuItem" href="notifications.html">通知 &amp; 提示</a>
                    </li>
                    <li><a class="J_menuItem" href="badges_labels.html">徽章，标签，进度条</a>
                    </li>
                    <li>
                        <a class="J_menuItem" href="grid_options.html">栅格</a>
                    </li>
                    <li><a class="J_menuItem" href="plyr.html">视频、音频</a>
                    </li>
                    <li>
                        <a href="#">弹框插件 <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li><a class="J_menuItem" href="layer.html">Web弹层组件layer</a>
                            </li>
                            <li><a class="J_menuItem" href="modal_window.html">模态窗口</a>
                            </li>
                            <li><a class="J_menuItem" href="sweetalert.html">SweetAlert</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">树形视图 <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li><a class="J_menuItem" href="jstree.html">jsTree</a>
                            </li>
                            <li><a class="J_menuItem" href="tree_view.html">Bootstrap Tree View</a>
                            </li>
                            <li><a class="J_menuItem" href="nestable_list.html">nestable</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="J_menuItem" href="toastr_notifications.html">Toastr通知</a>
                    </li>
                    <li><a class="J_menuItem" href="diff.html">文本对比</a>
                    </li>
                    <li><a class="J_menuItem" href="spinners.html">加载动画</a>
                    </li>
                    <li><a class="J_menuItem" href="widgets.html">小部件</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-table"></i> <span class="nav-label">表格</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a class="J_menuItem" href="table_basic.html">基本表格</a>
                    </li>
                    <li><a class="J_menuItem" href="table_data_tables.html">DataTables</a>
                    </li>
                    <li><a class="J_menuItem" href="table_jqgrid.html">jqGrid</a>
                    </li>
                    <li><a class="J_menuItem" href="table_foo_table.html">Foo Tables</a>
                    </li>
                    <li><a class="J_menuItem" href="table_bootstrap.html">Bootstrap Table
                            <span class="label label-danger pull-right">推荐</span></a>
                    </li>
                </ul>
            </li>
            <li class="line dk"></li>
            <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                <span class="ng-scope">分类</span>
            </li>
            <li>
                <a href="#"><i class="fa fa-picture-o"></i> <span class="nav-label">相册</span><span
                            class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a class="J_menuItem" href="basic_gallery.html">基本图库</a>
                    </li>
                    <li><a class="J_menuItem" href="carousel.html">图片切换</a>
                    </li>
                    <li><a class="J_menuItem" href="blueimp.html">Blueimp相册</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="J_menuItem" href="css_animation.html"><i class="fa fa-magic"></i> <span class="nav-label">CSS动画</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-cutlery"></i> <span class="nav-label">工具 </span><span
                            class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a class="J_menuItem" href="form_builder.html">表单构建器</a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</nav>
<!--左侧导航结束-->