@extends('back.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List All Comments</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">User Name</th>
                            <th scope="col">Comment</th>
                            <th scope="col">Post Title</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($comments as $comment)
                            <tr>
                            <th scope="row"> {{$comment->name}} </th>
                            <td>{{$comment->comment}}</td>
                            <td>{{$comment->post->title}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
