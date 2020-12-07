@extends('layout')
 
@section('content') 
    <h2>詳細画面</h2>
    <p><a href="{{ route('task.index')}}" class="btn btn-outline-success">一覧画面</a></p>
 
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>案件名</th>
                <th>内容</th>
                <th>作成日時</th>
                <th>更新日時</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $task->id }}</td>
                <td>{{ $task->subject }}</td>
                <td>{{ $task->description }}</td>
                <td>{{ $task->created_at }}</td>
                <td>{{ $task->updated_at }}</td>
            </tr>
        </tbody>
    </table>
@endsection