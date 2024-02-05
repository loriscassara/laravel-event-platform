@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>{{ $project->title }}</h2>
        </div>
        <div class="row">
            <img class="w-25" src="{{ $project->image }}" alt="{{ $project->title }}">
        </div>
        <div class="row">
            <p>{{ $project->description }}</p>
            <a href="{{ route('admin.projects.index') }}" class="btn btn-primary mt-3">Indietro</a>

        </div>
    </div>
@endsection