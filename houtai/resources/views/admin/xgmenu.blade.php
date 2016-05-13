@extends('admin.base_content')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>导航菜单修改</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">配置选项 1</a>
                            </li>
                            <li><a href="#">配置选项 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form method="post" class="form-horizontal" >
                        <div class="form-group"><label class="col-lg-2 control-label">ID</label>

                            <div class="col-lg-10"><p class="form-control-static">{!! $daid->mid !!}</p></div>
                        </div>
                        <input type="hidden" name="mid"value="{!! $daid->mid !!}" id="">
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">名称</label>

                            <div class="col-sm-10"><input type="text" class="form-control"name="menu_name" value="{!! $daid->menu_name !!}"></div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">url</label>

                            <div class="col-sm-10"><input type="text" class="form-control" name="url" value="{!! $daid->url !!}"></div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">图标</label>

                            <div class="col-sm-10">
                                <div style="float: left;margin-left: 10px;"><label> <input type="radio"  value='<i class="fa fa-diamond"></i>' <?php if($daid->tubiao=='<i class="fa fa-th-large"></i>'){echo 'checked=""';}?> id="tubiao" name="tubiao"> <i class="fa fa-th-large"></i> </label></div>
                                <div style="float: left;margin-left: 10px;"><label> <input type="radio" value='<i class="fa fa-diamond"></i>'<?php if($daid->tubiao=='<i class="fa fa-diamond"></i>'){echo 'checked=""';}?>  id="tubiao" name="tubiao"> <i class="fa fa-diamond"></i></label></div>
                                <div style="float: left;margin-left: 10px;"><label> <input type="radio" value='<i class="fa fa-bar-chart-o"></i>' <?php if($daid->tubiao=='<i class="fa fa-bar-chart-o"></i>'){echo 'checked=""';}?> id="tubiao" name="tubiao"> <i class="fa fa-bar-chart-o"></i></label></div>
                                <div style="float: left;margin-left: 10px;"><label> <input type="radio" value='<i class="fa fa-envelope"></i>' <?php if($daid->tubiao=='<i class="fa fa-envelope"></i>'){echo 'checked=""';}?> id="tubiao" name="tubiao"> <i class="fa fa-envelope"></i></label></div>
                                <div style="float: left;margin-left: 10px;"><label> <input type="radio" value='<i class="fa fa-pie-chart"></i>' <?php if($daid->tubiao=='<i class="fa fa-pie-chart"></i>'){echo 'checked=""';}?> id="tubiao" name="tubiao"> <i class="fa fa-pie-chart"></i></label></div>
                                <div style="float: left;margin-left: 10px;"><label> <input type="radio" value='<i class="fa fa-flask"></i>' <?php if($daid->tubiao=='<i class="fa fa-flask"></i>'){echo 'checked=""';}?> id="tubiao" name="tubiao"> <i class="fa fa-flask"></i></label></div>
                                <div style="float: left;margin-left: 10px;"><label> <input type="radio" value='<i class="fa fa-edit"></i>' <?php if($daid->tubiao=='<i class="fa fa-edit"></i>'){echo 'checked=""';}?> id="tubiao" name="tubiao"> <i class="fa fa-edit"></i></label></div>
                                <div style="float: left;margin-left: 10px;"><label> <input type="radio" value='<i class="fa fa-desktop"></i>' <?php if($daid->tubiao=='<i class="fa fa-desktop"></i>'){echo 'checked=""';}?> id="tubiao" name="tubiao"> <i class="fa fa-desktop"></i></label></div>
                                <div style="float: left;margin-left: 10px;"><label> <input type="radio" value='<i class="fa fa-files-o"></i>' <?php if($daid->tubiao=='<i class="fa fa-files-o"></i>'){echo 'checked=""';}?> id="tubiao" name="tubiao"> <i class="fa fa-files-o"></i></label></div>
                                <div style="float: left;margin-left: 10px;"><label> <input type="radio" value='<i class="fa fa-globe"></i>' <?php if($daid->tubiao=='<i class="fa fa-globe"></i>'){echo 'checked=""';}?> id="tubiao" name="tubiao"> <i class="fa fa-globe"></i></label></div>
                                <div style="float: left;margin-left: 10px;"><label> <input type="radio" value='<i class="fa fa-laptop"></i>' <?php if($daid->tubiao=='<i class="fa fa-laptop"></i>'){echo 'checked=""';}?> id="tubiao" name="tubiao"> <i class="fa fa-laptop"></i></label></div>
                                <div style="float: left;margin-left: 10px;"><label> <input type="radio" value='<i class="fa fa-table"></i>' <?php if($daid->tubiao=='<i class="fa fa-table"></i>'){echo 'checked=""';}?> id="tubiao" name="tubiao"> <i class="fa fa-table"></i></label></div>
                                <div style="float: left;margin-left: 10px;"><label> <input type="radio" value='<i class="fa fa-shopping-cart"></i>' <?php if($daid->tubiao=='<i class="fa fa-shopping-cart"></i>'){echo 'checked=""';}?> id="tubiao" name="tubiao"> <i class="fa fa-shopping-cart"></i></label></div>
                                <div style="float: left;margin-left: 10px;"><label> <input type="radio" value='<i class="fa fa-picture-o"></i>' <?php if($daid->tubiao=='<i class="fa fa-picture-o"></i>'){echo 'checked=""';}?> id="tubiao" name="tubiao"> <i class="fa fa-picture-o"></i></label></div>
                                <div style="float: left;margin-left: 10px;"><label> <input type="radio" value='<i class="fa fa-sitemap"></i>' <?php if($daid->tubiao=='<i class="fa fa-sitemap"></i>'){echo 'checked=""';}?> id="tubiao" name="tubiao"> <i class="fa fa-sitemap"></i></label></div>
                                <div style="float: left;margin-left: 10px;"><label> <input type="radio" value='<i class="fa fa-magic"></i>' <?php if($daid->tubiao=='<i class="fa fa-magic"></i>'){echo 'checked=""';}?> id="tubiao" name="tubiao"> <i class="fa fa-magic"></i></label></div>
                                <div style="float: left;margin-left: 10px;"><label> <input type="radio" value='<i class="fa fa-star"></i>' <?php if($daid->tubiao=='<i class="fa fa-star"></i>'){echo 'checked=""';}?> id="tubiao" name="tubiao"> <i class="fa fa-star"></i></label></div>
                                <div style="float: left;margin-left: 10px;"><label> <input type="radio" value='<i class="fa fa-database"></i>' <?php if($daid->tubiao=='<i class="fa fa-database"></i>'){echo 'checked=""';}?> id="tubiao" name="tubiao"> <i class="fa fa-database"></i></label></div>

                                {{--<div style="float: left;margin-left: 10px;"><label> <input type="radio" value='111111111' id="tubiao" name="optionsRadios"> 1111111</label></div>--}}

                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">右图标</label>

                            <div class="col-sm-10"><input type="text" name="youfubiao" class="form-control"value="{!! $daid->youfubiao !!}"></div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">父id</label>

                            <div class="col-sm-10"><input type="text" name="fid" class="form-control"value="{!! $daid->fid !!}"></div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">排名</label>

                            <div class="col-sm-10"><input type="text" name="px" class="form-control"value="{!! $daid->px !!}"></div>
                        </div>
                        {!! csrf_field() !!}
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-white" type="submit">取消</button>
                                <button class="btn btn-primary" type="submit">保存</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection