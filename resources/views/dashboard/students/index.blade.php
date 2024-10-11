@extends('layout.front.index')
@section('title')
    Dashboard - Student
@endsection
@section('breadcrumbs')
    @parent
    <li class="breadcrumb-item active text-light " aria-current="page">Student</li>
    <li class="breadcrumb-item active text-light" aria-current="page">index</li>
@endsection
@section('content')

<x-massege massege="success"/>
<x-massege massege="danger"/>
<x-massege massege="info"/>
<div class="alert alert-light m-2 p-1 d-grid gap-2">
    <a href="{{ route('students.create') }}" class=" btn  btn-outline-info ms-2">Add Student</a>

</div>
    <div class="table1 overflow-x-auto">
        <table class="table table-striped border border-warning rounded ">
            <h3 class="text-center text-light">Students</h3>
            <thead>
                <tr>
                    <th> {{ '#' }}</th>
                    <th>Name</th>
                    <th>LastName</th>
                    <th>ClassName</th>
                    <th>status</th>
                    <th>email</th>
                    <th>number</th>
                    <th>BirthDay</th>
                    <th colspan="2">Satting</th>

                </tr>
            </thead>
            <tbody>
                @forelse ($students as $student)
                    <tr>
                        <th scope="row">{{ $student->id }}</th>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->last_name }}</td>
                        <td>{{ $student->classroom->classname}}</td>
                        <td>{{ $student->status }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->number }}</td>
                        <td>{{ $student->birthday }}</td>
                        <td>
                            <a href="{{ route('students.edit',$student->id) }}" class="btn btn-info">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('students.destroy',$student->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <Button type="submit" class="btn btn-danger">
                                    Delete
                                </Button>
                            </form>
                        </td>
                    </tr>
                @empty
                @endforelse



            </tbody>
        </table>
        {{ $students->links() }}
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
