@extends('layout.front.index')
@section('title')
    Dashboard - Home
@endsection
@section('breadcrumbs')
    @parent
    <li class="breadcrumb-item active text-light " aria-current="page">School</li>
@endsection
@section('content')
    <div class="m-2">
        <div class="row">
            <div class="col-sm-6  text-center  ">
                <div class="card border border-warning rounded">
                    <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="20" fill="currentColor"
                            class="bi bi-building-fill" viewBox="0 0 12 21">
                            <path
                                d="M3 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h3v-3.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V16h3a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1zm1 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5M4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM7.5 5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zM4.5 8h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5" />
                        </svg>
                        <h5 class="d-inline card-title ">ClassRoom</h5>
                        <p class="card-text  text-center">View school classes
                            <hr>
                        </p>
                        <a href="{{ route('classrooms.index') }}" class="btn btn-warning">View</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6  text-center">
                <div class="card border border-warning rounded">
                    <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="30" fill="currentColor"
                            class="bi bi-person-fill" viewBox="0 0 16 21">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                        </svg>
                        <h5 class="d-inline card-title ">Student</h5>
                        <p class="card-text "> View Students
                            <hr>
                        </p>
                        <a href="{{ route('students.index') }}" class="btn btn-warning"> view</a>
                    </div>
                </div>
            </div>
        </div>
    </div>




    @forelse ($classrooms as $class)
        <div class="card text-center border border-warning rounded m-2">
            <div class="card-header">
                Class Name
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $class->classname }}</h5>
                <p class="card-text"></p>
                <a href="{{ route('classrooms.show', $class->id) }}" class="btn btn-warning">Show</a>
            </div>
            <div class="card-footer text-body-secondary">
                Student Count: {{ $class->students_count }}
            </div>
        </div>
    @empty
    @endforelse
@endsection

@push('styles')
@endpush

@push('scripts')
@endpush
