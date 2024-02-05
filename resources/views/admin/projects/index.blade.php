@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            @foreach ($projects as $project)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">{{ $project->title }}</div>
                        <div class="card-body">{{ $project->description }}</div>
                        <a href="{{ route('admin.projects.show', $project->id) }}"><img src="{{ $project->image }}"
                                class="comics-img w-25" alt="{{ $project->title }}">
                        </a>
                        <div class="card-body">{{ $project->topic }}</div>
                    </div>
                    <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-primary">Mostra dettagli</a>
                    <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-info">Modifica</a>
                    <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST"
                        class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection