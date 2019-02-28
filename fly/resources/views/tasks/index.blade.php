@extends('layouts.app')
@section('content')


<div class="container">
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>title</th>
                    <th>category</th>
                    <th>content</th>
                    <th>status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{{$task->title}}</td>
                    <td>{{$task->category}}</td>
                    <td>{{$task->content}}</td>
                    <td>{{$task->status}}</td>
                    <td>
                        <a href="{{ route('tasks.edit',$task) }}">edit</a>
                        <form action="{{ route('tasks.destroy',$task) }}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="delete">
                            <button type="submit">delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        <a href="{{ route('tasks.create') }}">
            add
        </a>
    </div>
</div>
@endsection
