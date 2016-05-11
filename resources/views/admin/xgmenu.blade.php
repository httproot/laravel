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

                            <div class="col-sm-10"><select class="form-control m-b" name="tubiao" >
                                    <option>1111</option>
                                    <option>option 2</option>
                                    <option selected>option 3</option>
                                    <option >option 4</option>
                                </select>

                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">右图标</label>

                            <div class="col-sm-10"><select class="form-control m-b" name="youfubiao" >
                                        <option>1111</option>
                                        <option>option 2</option>
                                        <option selected>option 3</option>
                                        <option >option 4</option>
                                    </select>
                            </div>
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