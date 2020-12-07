@extends('layout')
 
@section('content') 
    <h2>編集画面</h2>
    <p><a href="{{ route('task.index')}}" class="btn btn-outline-success">一覧画面</a></p>
 
    @if ($message = Session::get('success'))
        <p>{{ $message }}</p>
    @endif
 
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
 
    <form action="{{ route('task.update',$task->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>案件名</label>
            <input type="text" name="subject" value="{{ $task->subject }}" class="form-control">
        </div>
        <div class="form-group">
            <label>内容</label>
            <textarea name="description" rows="3" class="form-control">{{ $task->description }}</textarea>
        </div>
        <input type="hidden" name="completed" value="{{ $task->completed }}">
        <input type="hidden" name="complete_date" value="{{ $task->complete_date }}">
        <input type="submit" value="編集する" class="btn btn-primary">
    </form>
@endsection