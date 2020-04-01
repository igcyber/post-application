@extends('front.master')

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-10">
    <table class="table table-striped table-responsive">
        <thead class="thead-light">
            <tr>
                <th scope="col">Judul</th>
                <th scope="col">Slug</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="col">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, pariatur!</td>
                <td scope="col">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, hic!</td>
                <td scope="col">
                    <a href="#" class="btn btn-info btn-sm">Lihat</a>
                </td>
            </tr>
        </tbody>
    </table>
    </div>
</div>
@endsection