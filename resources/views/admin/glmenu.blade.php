@extends('admin.base_content')
@section('content')
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>菜单管理</h5>
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

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>名称</th>
                            <th>URL</th>
                            <th>图标</th>
                            <th>右图标</th>
                            <th>父id</th>
                            <th>排名</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($menu as $y)
                        <tr>
                            <td>{{$y->mid}}</td>
                            <td>{{$y->menu_name}}</td>
                            <td>{{$y->url}}</td>
                            <td>{!! $y->tubiao !!}</td>
                            <td>{!! $y->youfubiao !!}</td>
                            <td>{{$y->mig=$y->fid}}</td>
                            <td>{{$y->px}}</td>
                            <td><a href="/admin/xgmenu/{{$y->mid}}">编辑</a>|删除</td>
                        </tr>
                        @endforeach
                        {{--<tr>--}}
                            {{--<td>2</td>--}}
                            {{--<td><span class="pie">226,134</span></td>--}}
                            {{--<td>Jacob</td>--}}
                            {{--<td class="text-warning"> <i class="fa fa-level-down"></i> -20% </td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                            {{--<td>3</td>--}}
                            {{--<td><span class="pie">0.52/1.561</span></td>--}}
                            {{--<td>Damien</td>--}}
                            {{--<td class="text-navy"> <i class="fa fa-level-up"></i> 26% </td>--}}
                        {{--</tr>--}}
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
@endsection('content')