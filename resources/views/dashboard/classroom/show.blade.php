@extends('layout.front.index')
@section('title')
    Dashboard - ClassRoom - Show
@endsection
@section('breadcrumbs')
    @parent
    <li class="breadcrumb-item active text-light " aria-current="page"><a href="{{ route('classrooms.index') }}" class="link-underline-warning text-light"> ClassRoom</a> </li>
    <li class="breadcrumb-item active text-light" aria-current="page">Show</li>
    <li class="breadcrumb-item active text-light" aria-current="page">{{ $classroom->classname}}</li>
@endsection
@section('content')

    <div class="alert alert-light m-2 p-1 d-grid gap-2">
        <a href="{{ route('classrooms.index') }}" class=" btn  btn-outline-info ms-2">ClassRoom</a>

    </div>


    <div class="table1 overflow-x-auto">
        <table class="table table-striped border border-warning rounded">
            <thead>
                <tr>
                    <th> {{ '#' }}</th>
                    <th>name</th>
                    <th>last_name</th>
                    <th>className</th>
                    <th>status</th>
                    <th>email</th>
                    <th>number</th>
                    <th>birth_date</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($classroom->students as $student)
                    <tr>
                        <th scope="row">{{ $student->id }}</th>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->last_name }}</td>
                        <td>{{ $student->classroom->classname}}</td>
                        <td>{{ $student->status }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->number }}</td>
                        <td>{{ $student->birth_date }}</td>
                    </tr>
                @empty
                @endforelse



            </tbody>
        </table>

    </div>
@endsection

@push('styles')
    <style>
        .table1 {
            background-color: rgb(135, 129, 121) !important;
            border-radius: 15px !important;
            margin: 7px !important;

        }
    </style>
@endpush

@push('scripts')
@endpush
