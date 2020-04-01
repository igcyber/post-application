@extends('front.master')

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-10">
    <table class="table table-striped table-responsive">
        <thead class="thead-light">
            <tr>
                <th scope="col">Judul</th>
                <th scope="col">Content</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        @foreach($posts as $post)
        <tbody>
            <tr>
                <td scope="col">{{$post->title}}</td>
                <td scope="col">{{$post->content}}</td>
                <td scope="col">
                    <a href="{{ route('post.show', [$post->id, $post->slug]) }}">
                        <button class="btn btn-info btn-sm">Info</button>
                    </a>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
    </div>
</div>
@endsection