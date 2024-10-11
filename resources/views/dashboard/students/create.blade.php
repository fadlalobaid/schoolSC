@extends('layout.front.index')
@section('title')
Dashboard - Student -Create
@endsection
@section('breadcrumbs')
@parent
<li class="breadcrumb-item active text-light" aria-current="page"> <a href="{{ route('students.index') }}" class="link-underline-warning text-light">Student</a></li>
<li class="breadcrumb-item active text-light" aria-current="page">Create</li>
@endsection
@section('content')
<div class="alert alert-light m-2 p-1 d-grid gap-2">
    <a href="{{ route('students.index') }}" class=" btn  btn-outline-info ms-2">Student</a>

</div>


<div class="card mx-2 mx-md-2 shadow-5-strong bg-body-tertiary" style="
        margin-top: 10px;
        width: 99%;
        backdrop-filter: blur(30px);
        ">
    <div class="card-body py-5 px-md-5">

        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <h2 class="fw-bold mb-5">Add Student</h2>
                <form action="{{ route('students.store') }}" method="POST">
                    @csrf
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <div data-mdb-input-init class="form-outline">
                                <x-form.input type="text" name="name" class="form-control" placeholder="First Name" />
                            </div>
                        </div>


                        <div class="col-md-6 mb-3">
                            <div data-mdb-input-init class="form-outline">
                                <x-form.input type="text" name="last_name" class="form-control"  placeholder="Last Name" />
                            </div>
                        </div>

                    </div>

                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-3">
                        <x-form.input type="email" name="email" class="form-control" placeholder="Email address" />

                    </div>


                    <div data-mdb-input-init class="form-outline mb-3">
                        <x-form.input type="number" name="number" class="form-control" placeholder="Number Phone" />

                    </div>
                    {{-- date --}}
                    <div data-mdb-input-init class="form-outline mb-3">
                        <x-form.input type="date" name="birthday" class="form-control" placeholder="BirthDay" />

                    </div>


                    <div>
                        <x-form.radio name="status" :options="[
                                'active' => 'active',
                                'inactive' => 'inactive',
                            ]" checked="active" />

                    </div>
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-info btn-block ms-2">
                        ADD
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
