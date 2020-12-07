@extends('layout')
 
@section('content')
    <h2>新規作成画面</h2>
    <p><a href="{{ route('task.index')}}" class="btn btn-outline-success">一覧画面</a></p>
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    <form action="{{ route('task.store')}}" method="POST">
        @csrf
        <input type="hidden" name="completed" value="1">
        <div class="form-group">
            <label>案件名</label>
            <input type="text" name="subject" value="{{old('subject')}}" class="form-control">
        </div>
        <div class="form-group">
            <label>内容</label>
            <textarea name="description" rows="3" class="form-control">{{old('description')}}</textarea>
        </div>
        <input type="submit" value="登録" class="btn btn-primary">
    </form>
@endsection