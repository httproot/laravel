<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="logo-element">
                    Kernel
                </div>
            </li>
            {{--{{print_r($menu)}}--}}


            @foreach($menu as $v)
                @if($v->fid==0)
                    @if($v->mid==1)
                        <li class="active">
                        @else
                        <li class="">
                    @endif
                    <a href="{{$v->url }}">{!!$v->tubiao!!}<span class="nav-label">{{$v->menu_name}}</span> <span class="fa arrow"></span><span class="label label-primary pull-right">{!! $v->youfubiao !!}</span></a>
                    <ul class="nav nav-second-level collapse">

                        @foreach($menue as $c)
                           {{--2 {{print_r($v->mid)}}--}}
                            @if($c->fid==$v->mid)
                                <li class=""><a href="{{$c->url }}">{!! $c->menu_name !!}<span class="label label-primary pull-right">{!! $c->youfubiao !!}</span></a></li>
                                @endif
                        @endforeach

                    </ul>
                </li>
                @endif
            @endforeach



                        {{--@foreach($menu as $menu)--}}
                            {{--@if($menu->fid==0)--}}
                                {{--<li>11</li>--}}
                            {{--@else--}}
                                {{--<li class="active"><a href="">首页 这个</a></li>--}}
                                {{--<li class=""><a href="">首页 v.2</a></li>--}}
                                {{--<li><a href="">首页 v.3</a></li>--}}
                                {{--<li><a href="">首页 v.4</a></li>--}}
                                {{--<li><a href="">首页 v.5 <span class="label label-primary pull-right">NEW</span></a></li>--}}
                            {{--@endif--}}
                        {{--@endforeach--}}
            {{--<li>--}}
                {{--<a href="layouts.html"><i class="fa fa-diamond"></i> <span class="nav-label">布局</span></a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">图表</span><span class="fa arrow"></span></a>--}}
                {{--<ul class="nav nav-second-level collapse">--}}
                    {{--<li><a href="graph_flot.html">Flot Charts</a></li>--}}
                    {{--<li><a href="graph_morris.html">Morris.js Charts</a></li>--}}
                    {{--<li><a href="graph_rickshaw.html">Rickshaw Charts</a></li>--}}
                    {{--<li><a href="graph_chartjs.html">Chart.js</a></li>--}}
                    {{--<li><a href="graph_chartist.html">Chartist</a></li>--}}
                    {{--<li><a href="c3.html">c3 charts</a></li>--}}
                    {{--<li><a href="graph_peity.html">Peity Charts</a></li>--}}
                    {{--<li><a href="graph_sparkline.html">Sparkline Charts</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">邮箱 </span><span class="label label-warning pull-right">16/24</span></a>--}}
                {{--<ul class="nav nav-second-level collapse">--}}
                    {{--<li><a href="mailbox.html">收件箱</a></li>--}}
                    {{--<li><a href="mail_detail.html">邮件详情</a></li>--}}
                    {{--<li><a href="mail_compose.html">发送邮件</a></li>--}}
                    {{--<li><a href="email_template.html">邮件模板</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="metrics.html"><i class="fa fa-pie-chart"></i> <span class="nav-label">指标</span>  </a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="widgets.html"><i class="fa fa-flask"></i> <span class="nav-label">组件</span></a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#"><i class="fa fa-edit"></i> <span class="nav-label">表单</span><span class="fa arrow"></span></a>--}}
                {{--<ul class="nav nav-second-level collapse">--}}
                    {{--<li><a href="form_basic.html">基本表单</a></li>--}}
                    {{--<li><a href="form_advanced.html">高级插件</a></li>--}}
                    {{--<li><a href="form_wizard.html">分步引导</a></li>--}}
                    {{--<li><a href="form_file_upload.html">文件上传</a></li>--}}
                    {{--<li><a href="form_editors.html">富文本编辑</a></li>--}}
                    {{--<li><a href="form_markdown.html">Markdown</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">APP视图</span>  <span class="pull-right label label-primary">SPECIAL</span></a>--}}
                {{--<ul class="nav nav-second-level collapse">--}}
                    {{--<li><a href="contacts.html">联系方式</a></li>--}}
                    {{--<li><a href="profile.html">个人信息</a></li>--}}
                    {{--<li><a href="profile_2.html">个人信息 v.2</a></li>--}}
                    {{--<li><a href="contacts_2.html">联系方式 v.2</a></li>--}}
                    {{--<li><a href="projects.html">项目列表</a></li>--}}
                    {{--<li><a href="project_detail.html">项目详情</a></li>--}}
                    {{--<li><a href="teams_board.html">团队面板</a></li>--}}
                    {{--<li><a href="social_feed.html">订阅</a></li>--}}
                    {{--<li><a href="clients.html">客户信息</a></li>--}}
                    {{--<li><a href="full_height.html">Outlook</a></li>--}}
                    {{--<li><a href="vote_list.html">投票</a></li>--}}
                    {{--<li><a href="file_manager.html">文件管理</a></li>--}}
                    {{--<li><a href="calendar.html">日历</a></li>--}}
                    {{--<li><a href="issue_tracker.html">Issue</a></li>--}}
                    {{--<li><a href="blog.html">博客</a></li>--}}
                    {{--<li><a href="article.html">文章</a></li>--}}
                    {{--<li><a href="faq.html">FAQ</a></li>--}}
                    {{--<li><a href="timeline.html">时间轴</a></li>--}}
                    {{--<li><a href="pin_board.html">Pin board</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">其他</span><span class="fa arrow"></span></a>--}}
                {{--<ul class="nav nav-second-level collapse">--}}
                    {{--<li><a href="search_results.html">搜索结果</a></li>--}}
                    {{--<li><a href="lockscreen.html">锁屏</a></li>--}}
                    {{--<li><a href="invoice.html">发票</a></li>--}}
                    {{--<li><a href="login.html">登录</a></li>--}}
                    {{--<li><a href="login_two_columns.html">登录 v.2</a></li>--}}
                    {{--<li><a href="forgot_password.html">忘记密码</a></li>--}}
                    {{--<li><a href="register.html">注册</a></li>--}}
                    {{--<li><a href="404.html">404</a></li>--}}
                    {{--<li><a href="500.html">500</a></li>--}}
                    {{--<li><a href="empty_page.html">空白页面</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#"><i class="fa fa-globe"></i> <span class="nav-label">杂七杂八</span><span class="label label-info pull-right">NEW</span></a>--}}
                {{--<ul class="nav nav-second-level collapse">--}}
                    {{--<li><a href="toastr_notifications.html">通知</a></li>--}}
                    {{--<li><a href="nestable_list.html">嵌套列表</a></li>--}}
                    {{--<li><a href="agile_board.html">TO-DO LIST</a></li>--}}
                    {{--<li><a href="timeline_2.html">时间轴 v.2</a></li>--}}
                    {{--<li><a href="diff.html">文件对比</a></li>--}}
                    {{--<li><a href="i18support.html">国际化</a></li>--}}
                    {{--<li><a href="sweetalert.html">弹出框</a></li>--}}
                    {{--<li><a href="idle_timer.html">计时器</a></li>--}}
                    {{--<li><a href="truncate.html">截断...</a></li>--}}
                    {{--<li><a href="spinners.html">菊花</a></li>--}}
                    {{--<li><a href="tinycon.html">favicon</a></li>--}}
                    {{--<li><a href="google_maps.html">谷歌地图</a></li>--}}
                    {{--<li><a href="code_editor.html">代码</a></li>--}}
                    {{--<li><a href="modal_window.html">模态对话框</a></li>--}}
                    {{--<li><a href="clipboard.html">剪贴板</a></li>--}}
                    {{--<li><a href="forum_main.html">论坛</a></li>--}}
                    {{--<li><a href="validation.html">JS验证</a></li>--}}
                    {{--<li><a href="tree_view.html">树</a></li>--}}
                    {{--<li><a href="loading_buttons.html">加载按钮</a></li>--}}
                    {{--<li><a href="chat_view.html">聊天</a></li>--}}
                    {{--<li><a href="masonry.html">瀑布流</a></li>--}}
                    {{--<li><a href="tour.html">教程</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#"><i class="fa fa-flask"></i> <span class="nav-label">UI</span><span class="fa arrow"></span></a>--}}
                {{--<ul class="nav nav-second-level collapse">--}}
                    {{--<li><a href="typography.html">段落</a></li>--}}
                    {{--<li><a href="icons.html">Icons</a></li>--}}
                    {{--<li><a href="draggable_panels.html">拖拽面板</a></li> <li><a href="resizeable_panels.html">调整大小面板</a></li>--}}
                    {{--<li><a href="buttons.html">按钮</a></li>--}}
                    {{--<li><a href="video.html">视频</a></li>--}}
                    {{--<li><a href="tabs_panels.html">面板</a></li>--}}
                    {{--<li><a href="tabs.html">Tabs</a></li>--}}
                    {{--<li><a href="notifications.html">通知 & Tooltips</a></li>--}}
                    {{--<li><a href="badges_labels.html">徽章, Labels, 进度条</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}

            {{--<li>--}}
                {{--<a href="grid_options.html"><i class="fa fa-laptop"></i> <span class="nav-label">网格</span></a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#"><i class="fa fa-table"></i> <span class="nav-label">表格</span><span class="fa arrow"></span></a>--}}
                {{--<ul class="nav nav-second-level collapse">--}}
                    {{--<li><a href="table_basic.html">静态表格</a></li>--}}
                    {{--<li><a href="table_data_tables.html">动态表格</a></li>--}}
                    {{--<li><a href="table_foo_table.html">高级表格</a></li>--}}
                    {{--<li><a href="jq_grid.html">jqGrid</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#"><i class="fa fa-shopping-cart"></i> <span class="nav-label">电子商务</span><span class="fa arrow"></span></a>--}}
                {{--<ul class="nav nav-second-level collapse">--}}
                    {{--<li><a href="ecommerce_products_grid.html">产品-网格</a></li>--}}
                    {{--<li><a href="ecommerce_product_list.html">产品-列表</a></li>--}}
                    {{--<li><a href="ecommerce_product.html">产品-编辑</a></li>--}}
                    {{--<li><a href="ecommerce_product_detail.html">产品-详情</a></li>--}}
                    {{--<li><a href="ecommerce-cart.html">购物车</a></li>--}}
                    {{--<li><a href="ecommerce-orders.html">订单</a></li>--}}
                    {{--<li><a href="ecommerce_payments.html">信用卡</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#"><i class="fa fa-picture-o"></i> <span class="nav-label">画廊</span><span class="fa arrow"></span></a>--}}
                {{--<ul class="nav nav-second-level collapse">--}}
                    {{--<li><a href="basic_gallery.html">灯箱</a></li>--}}
                    {{--<li><a href="slick_carousel.html">旋转木马</a></li>--}}
                    {{--<li><a href="carousel.html">Bootstrap 轮播</a></li>--}}

                {{--</ul>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">菜单 </span><span class="fa arrow"></span></a>--}}
                {{--<ul class="nav nav-second-level collapse">--}}
                    {{--<li>--}}
                        {{--<a href="#">三级菜单 <span class="fa arrow"></span></a>--}}
                        {{--<ul class="nav nav-third-level">--}}
                            {{--<li>--}}
                                {{--<a href="#">三级菜单标题</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#">三级菜单标题</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#">三级菜单标题</a>--}}
                            {{--</li>--}}

                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a href="#">二级菜单标题</a></li>--}}
                    {{--<li>--}}
                        {{--<a href="#">二级菜单标题</a></li>--}}
                    {{--<li>--}}
                        {{--<a href="#">二级菜单标题</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="css_animation.html"><i class="fa fa-magic"></i> <span class="nav-label">CSS动画 </span><span class="label label-info pull-right">62</span></a>--}}
            {{--</li>--}}
            {{--<li class="landing_link">--}}
                {{--<a target="_blank" href="landing.html"><i class="fa fa-star"></i> <span class="nav-label">着陆页</span> <span class="label label-warning pull-right">NEW</span></a>--}}
            {{--</li>--}}
            {{--<li class="special_link">--}}
                {{--<a href="package.html"><i class="fa fa-database"></i> <span class="nav-label">框架</span></a>--}}
            {{--</li>--}}
        </ul>

    </div>
</nav>