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
                <butoon class="btn btn-outline-success">修改</butoon>
                <butoon class="btn btn-outline-danger" onclick="">刪除</butoon>
                </td>
            </tr>

        @endforeach
        </thead>
    </table>

@endsection
