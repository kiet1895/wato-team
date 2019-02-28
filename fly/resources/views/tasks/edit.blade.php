@extends('layouts.app')

@section('content')
<div class="container">
        <form method="POST" action="{{ route('tasks.update',[$tasks->id]) }}">
        {{ method_field('PUT') }}
        @csrf 
        {{-- <input type="hidden" name="id" value="{{$tasks->id}}"> --}}
        <input type="text" name="title" value="{{$tasks->title}}" >
        <input type="text" name="category" value="{{$tasks->category}}" >
        <input type="text" name="content" value="{{$tasks->content}}" >
        <input type="text" name="status" value="{{$tasks->status}}" >
        <button type="submit">update</button>
        </form>
</div>
@endsection
