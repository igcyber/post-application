@extends('front.master')

@section('content')
<div class="row">
    <div class="col-12">

        <table class="table table-striped table-bordered table-responsive-lg">
        <thead class="thead-light">
        </thead>
        <tbody>
            <tr>
            <td class="post-col d-lg-flex justify-content-lg-between">
                <div><span class="font-weight-bold">Post Title: </span>{{$post->title}}</div>
                <div><span class="font-weight-bold">Posted: </span>{{$post->created_at}}</div>
            </td>
            </tr>
            <tr>
            <td>
                {{$post->content}}
            </td>
            </tr>
        </tbody>
        </table>
    </div>
    <div class="col-md-12">
        <hr>
        <ul class="list-group">
            @foreach($post->comments as $comment)
                <li class="list-group-item mb-2">
                    {{$comment->name}} : <br>
                    {{$comment->comment}}
                </li>
            @endforeach
        </ul>
        <hr>
    </div>
    <div class="col-md-12">
        <form class="mb-3">
            <div class="form-group">
            <label for="comment">Reply to this post:</label>
            <div class="form-group mr-2 mb-3 mb-md-2">
              <input type="email" class="form-control" placeholder="Your Name (Must Be Filled In)" id="email" required>
            </div>
            <div class="form-group mr-2 mb-3 mb-md-2">
              <input type="email" class="form-control" placeholder="Your Email (Optional)" id="email">
            </div>
            <div class="form-group mr-2">
              <input type="password" class="form-control" id="password" placeholder="Your Password (Optional)">
            </div>
            <textarea class="form-control" id="comment" rows="3" placeholder="Write your comment here." required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
    </div>

</div>

@endsection