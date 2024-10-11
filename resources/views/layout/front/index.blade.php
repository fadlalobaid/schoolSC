<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
@stack('styles')
<style>

</style>
    </head>


<body style="background:repeating-radial-gradient(#d7ce1f, #0f0720) ">
    <div class="contant">
        <h1 class="h1 text-center text-secondary">School Management System</h1>
        {{--  ----------- navbar----------------  --}}
        @include('layout.front.nav')

        {{--  ----------- navbar----------------  --}}

        {{--  ---------------breadcrumb-------------  --}}
        <div class="breadcrumb m-2 ">
            <nav aria-label="breadcrumb mt-2">
                <ol class="breadcrumb">
                    @section('breadcrumbs')
                        <li class="breadcrumb-item text-light"><a href="/" class="link-underline-warning text-light">Home</a></li>
                    @show
                </ol>
            </nav>
        </div>
        {{--  ---------------breadcrumb-------------  --}}

        {{--  ------------main------------  --}}
        <div class="section">
            @yield('content')
        </div>
        {{--  ------------main------------  --}}
        {{--    --}}
        <div class="alert alert-light border border-secondary rounded  m-2 p-1">

  <label class="text-black">A small school system using <b>Laravel</b>  The system contains classes and students,</label>
  <p class="text-end mb-1">Developed by: Fadl Al-Obaid</p>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    @stack('scripts')
</body>

</html>
