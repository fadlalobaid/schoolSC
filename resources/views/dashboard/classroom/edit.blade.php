@extends('layout.front.index')
@section('title')
    Dashboard - Clssroom - Edit
@endsection
@section('breadcrumbs')
    @parent
    <li class="breadcrumb-item active  text-light" aria-current="page">Classroom</li>
    <li class="breadcrumb-item active text-light " aria-current="page">Edit</li>
@endsection
@section('content')



    <div class="alert alert-light m-2 p-1 d-grid gap-2">
        <a href="{{ route('classrooms.index') }}" class=" btn  btn-outline-info ms-2">ClassRoom</a>

    </div>
    <div class="card mx-2 mx-md-2 shadow-5-strong bg-body-tertiary"
        style="
        margin-top: 10px;
        width: 99%;
        backdrop-filter: blur(30px);
        ">
        <div class="card-body py-5 px-md-5">

            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-5">Add Student</h2>
                    <div class="alert alert-info">
                        <h4 >
                            id:
                        {{ $classrooms->id}}</h4>
                    </div>
                    <form action="{{ route('classrooms.update',$classrooms->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <!-- 2 column grid layout with text inputs for the first and last names -->

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div data-mdb-input-init class="form-outline">

                                    <x-form.input type="text" name="classname" class="form-control" placeholder="class Name" value="{{ $classrooms->classname}} "/>
                                </div>
                            </div>


                            <div class="col-md-6 mb-3">
                                <div data-mdb-input-init class="form-outline">
                                    <x-form.input type="text" name="academic_level" class="form-control"
                                        placeholder="Academic Level"
                                        value="{{ $classrooms->academic_level}} "
                                        />


                                </div>
                            </div>
                        </div>







                        <div>
                            <x-form.radio name="status" :options="[
                                'active' => 'active',
                                'inactive' => 'inactive',
                            ]" checked="active" />

                        </div>
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-info btn-block ms-2">
                          Save Edit
                        </button>


                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- Section: Design Block -->
@endsection

@push('styles')
    <style>


    </style>
@endpush

@push('scripts')
@endpush
