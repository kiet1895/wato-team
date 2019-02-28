@extends('layouts.app')

@section('content')
<div class="container">
        <form method="POST" action="{{ route('tasks.store') }}">
            @csrf
        <input type="text" name="title" placeholder="title" >
        <input type="text" name="category" placeholder="category" >
        <input type="text" name="content" placeholder="content" >
        <input type="text" name="status" placeholder="status" >
        <button type="submit">create</button>
        </form>
</div>
@endsection
