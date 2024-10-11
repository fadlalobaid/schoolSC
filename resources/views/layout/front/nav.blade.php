
<nav   class="navbar navbar-expand-lg bg-body-tertiary border border-warning rounded m-2">

    <div class="container-fluid">
        <a class="navbar-brand" href="#">
       
            School</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        School
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('classrooms.index') }}">ClassRoom</a></li>
                        <li><a class="dropdown-item" href="{{ route('students.index') }}">Students</a></li>

                    </ul>
                </li>

            </ul>
             <a href="{{ route('login') }}" class="btn btn-info mx-2">Login</a>
            <form action="{{ route('logout') }}" method="post" >
                @csrf
                 <button class="btn btn-outline-info" type="submit">Logout</button>
            </form>



        </div>
    </div>
</nav>
