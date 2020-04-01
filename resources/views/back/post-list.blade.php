@extends('back.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List All Post</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Judul</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Content</th>
                            <th scope="col">Created By (Email)</th>
                            <th scope="col">Created By (Name)</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($posts as $post)
                            <tr>
                            <th scope="row"> {{$post->title}} </th>
                            <td>{{$post->slug}}</td>
                            <td>{{$post->content}}</td>
                            <td>{{$post->user->email}}</td>
                            <td>{{$post->user->name}}</td>
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
