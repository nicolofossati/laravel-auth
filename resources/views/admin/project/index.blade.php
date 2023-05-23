@extends('layouts.admin')

@section('content')

<a href="{{route('admin.projects.create')}}">
    <button type="button" class="btn btn-outline-secondary">
        <i class="fa-solid fa-square-plus"></i> NEW PROJECT  <!-- READ -->
    </button>
</a>

<table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Title</th>
        <th scope="col">Category</th>
        <th scope="col">ACTION</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)
            @csrf
            <tr>
                <th scope="row">{{$project->id}}</th>
                <td>{{$project->title}}</td>
                <td>{{$project->category}}</td>
                <td>
                    <a href="{{route('admin.projects.show', $project->slug)}}">
                        <button type="button" class="btn btn-outline-secondary">
                            <i class="fa-solid fa-eye"></i>  <!-- READ -->
                        </button>
                    </a>
                    <a href="">
                        <button type="button" class="btn btn-outline-primary">
                            <i class="fa-solid fa-pencil"></i>   <!-- EDIT -->
                        </button>
                    </a>
                    <button type="button" class="btn btn-outline-danger">
                        <i class="fa-solid fa-trash"></i>  <!-- DELETE -->
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection