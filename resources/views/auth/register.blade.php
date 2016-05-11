{!! print_r($errors) !!}}
{{--<!DOCTYPE html>--}}
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>注册</title>

    <link href="{{asset('style/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('style/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('style/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('style/css/style.css')}}" rel="stylesheet">
    <script src="{{asset('style/js/jquery-2.1.1.js')}}"></script>
</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">
      
            <div class="col-md-6">
                <h2 class="font-bold">欢迎进入+</h2>

                <p>
                    完美的设计和精确的管理主题与超过50页的新的网络应用程序视图。
                </p>

                <p>
                    Lorem Ipsum只是印刷排版业虚拟文本 Lorem Ipsum自从16世纪以后一直是行业的标准虚拟文本。
                </p>

                <p>
                    当一个未知的打印机把厨房型和炒它做字体样本。
                </p>

                <p>
                    <small>它不仅存活了五个世纪，而且还跨越了电子排版，基本上保持不变。</small>
                </p>

            </div>
            <div class="col-md-6">
                <div class="ibox-content">
             <form class="m-t" role="form" action="" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name='name' placeholder="账号" required="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name='email' placeholder="邮箱" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name='password' placeholder="密码" required="">
                </div>
				 <div class="form-group">
                    <input type="password" class="form-control"name='password_confirmation' placeholder="确认密码" required="">
                </div>
                <div class="form-group">
                        <div class="checkbox i-checks"><label> <input type="checkbox"><i></i> 同意条款和政策 </label>
                    <div class="ibox-content">
                        <div class="text-center">
                            <button type="button"  data-toggle="modal" data-target="#myModal5">
                                阅读条款
                            </button>
                        </div>
                        <div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog"  aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title">模板标题</h4>
                                        <small class="font-bold">Lorem Ipsum只是印刷排版业虚拟文本。</small>
                                    </div>
                                    <div class="modal-body">
                                        <p><strong>Lorem Ipsum只是虚设</strong>印刷排版行业的文本。Lorem Ipsum一直是行业的标准虚拟文本自从16世纪，当一个未知的打印机把厨房型和炒它做字体样本。它不仅存活了五个世纪，而且还跨越了电子排版，基本上保持不变。</p>
                                        <p><strong>Lorem Ipsum只是虚设</strong>印刷排版行业的文本。Lorem存有一直是行业的标准虚拟文本自从16世纪，当未知
                                            带一个厨房打印机类型和炒它做字体样本。它不仅存活了五个世纪，而且还跨越了电子排版，剩余基本不变。</p>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-white" data-dismiss="modal">关闭</button>
                                        <button type="button" class="btn btn-primary">保存</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
            </div>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">注册</button>
                 {!! csrf_field() !!}
                <p class="text-muted text-center"><small>已经有一个账户?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="{{url('admin/login')}}">登录</a>
            </form>
                    <p class="m-t">
                        <small>我们的应用程序主要基于Bootstrap 3 &copy; 2014</small>
                    </p>
                </div>
            </div>
        </div>

        <hr/>
        <div class="row">
            <div class="col-md-6">
                Example Company版权所有
            </div>
            <div class="col-md-6 text-right">
               <small>© 2014-2015</small>
            </div>
        </div>
    </div>
</body>
<!-- Mainly scripts -->
<script src="{{asset('style/js/jquery-2.1.1.js')}}"></script>
<script src="{{asset('style/js/bootstrap.min.js')}}"></script>
<script src="{{asset('style/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{asset('style/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<!-- Custom and plugin javascript -->
<script src="{{asset('style/js/inspinia.js')}}"></script>
<script src="{{asset('style/js/plugins/pace/pace.min.js')}}"></script>

</html>
