@extends('admin.base_content')
@section('content')
    <h2>菜单管理<h2>
            {{--{{print_r($menu)}}--}}

    <table border="1">
    <tr >
        <td>id</td>
        <td>名称</td>
        <td>URL</td>
        <td>图标</td>
        <td>右图标</td>
        <td>父id</td>
        <td>排名</td>
        <td>操作</td>
    </tr>
    @foreach($menu as $y)
    <tr>
        <td>{{$y->mid}}</td>
        <td>{{$y->menu_name}}</td>
        <td>{{$y->url}}</td>
        <td>{!! $y->tubiao !!}</td>
        <td>{!! $y->youfubiao !!}</td>
        <td>{{$y->mig=$y->fid}}</td>
        <td>{{$y->px}}</td>
        <td>编辑|删除</td>
    </tr>
        @endforeach
</table>
@endsection('content')