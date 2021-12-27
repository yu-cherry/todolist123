@extends('layouts.master')
@section('content')


    <table class="table">
        <thead>

            <tr>
                <td>標題</td>
                <td>內容</td>
                <td>註解</td>
            </tr>

        </thead>



        <thead>
        @foreach($data as $row)
            <tr>
            <td>{{$row->title}}</td>
            <td>{{$row->content}}</td>
            <td>{{$row->remark}}</td>
                <td>
                <butoon class="btn btn-outline-success" onclick=get_edit_page({{$row->id}})>修改</butoon>
                <butoon class="btn btn-outline-danger" onclick=delete_data({{$row->id}})>刪除</butoon>
                </td>
            </tr>

        @endforeach
        </thead>
    </table>
    <script>
        function delete_data(id){
            window.location.href = "{{route('delete_data')}}"+"?id="+id;
        }
        function get_edit_page(id) {
            window.location.href = "{{route('get_edit_page')}}"+"?id="+id;
        }
    </script>

@endsection
