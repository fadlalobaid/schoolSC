@extends('layout.front.index')
@section('title')
    Dashboard - ClassRoom
@endsection
@section('breadcrumbs')
    @parent
    <li class="breadcrumb-item active text-light " aria-current="page">ClassRoom</li>
    <li class="breadcrumb-item active text-light" aria-current="page">index</li>
@endsection
@section('content')



<x-massege massege="success"/>
<x-massege massege="danger"/>
<x-massege massege="info"/>
  <form action="{{ URL::current() }}" method="get" class="d-flex justify-content m-2 ">
                <select name="status" id="" class="form-select me-2 " >
                    <option value="">ALL</option>
                    <option value="active" @selected(request('status')=='active')>active</option>
                    <option value="inactive" @selected(request('status')=='inactive')>inactive</option>
                </select>
                <button type="submit" class="btn btn-info">Filter</button>
            </form>
    <div class="table1 overflow-x-auto">
        <table class="table table-striped border border-warning rounded">
            <h3 class="text-center text-light">Classes

            </h3>
            <thead>
                <tr>
                    <th> {{ '#' }}</th>
                    <th>classname</th>
                    <th>students count</th>
                    <th>academic_level</th>
                    <th>status</th>
                    <th>Students</th>

                    <th colspan="2" class="text-center">Satting</th>

                </tr>
            </thead>
            <tbody>
                @forelse ($classrooms as $classroom)
                    <tr>
                        <th scope="row">{{ $classroom->id }}</th>
                        <td>{{ $classroom->classname }}</td>
                        <td>{{ $classroom->students_count }}</td>
                        <td>{{ $classroom->academic_level }}</td>
                        <td>{{ $classroom->status }}</td>


                            <td>
                                <a href="{{ route('classrooms.show',$classroom->id) }}" class="btn btn-warning">Show</a>
                            </td>


                        <td>
                            <a href="{{ route('classrooms.edit',$classroom->id) }}" class="btn btn-info">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('classrooms.destroy',$classroom->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <Button type="submit" class="btn btn-danger">
                                    Delete
                                </Button>
                            </form>
                        </td>
                    </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">
                        <b>
                            No-Date
                        </b>
                    </td>
                </tr>
                @endforelse



            </tbody>
        </table>
        {{ $classrooms->links() }}
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
