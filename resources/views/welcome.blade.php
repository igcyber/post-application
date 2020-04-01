@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h1>Recent Job</h1>
        <table class="table">
            <thead>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($jobs as $job)
                <tr>
                    <td>
                        <img src="{{ asset('img/avatar/man.jpg') }}" alt="Avatar Picture"
                        width="80">
                    </td>
                    <td>Position : {{$job->position}}
                        <br>
                        <i class="fa fa-clock-o"></i> {{ $job->type }}
                    </td>
                    <td><i class="fas fa-map-marker"></i> Address : {{ $job->address }}</td>
                    <td>
                        <i class="far fa-calendar-minus"></i> Date : {{ $job->created_at->diffForHumans() }}</td>
                    <td>
                        <a href="{{ route('jobs.show', [$job->id, $job->slug]) }}">
                            <button class="btn btn-info btn-sm">Info</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
