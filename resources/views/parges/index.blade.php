@extends('layouts.master')
@section('content')


    <table>
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
            </tr>


        @endforeach
        </thead>
    </table>

@endsection
