<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>@yield('title')</title>
    <style>
        body {
            border: 1px solid black;
            margin: 10px;
            padding: 20px;
        }
        .navbar-brand .sidebar-custom .nav-link {
            color: black !important;
        }
        .navbar-custom {
            background-color: #ff9800; /* Orange color */
        }

    </style>
</head>
<body>

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
            <a class="navbar-brand" href="#">Employer Form Submission Management</a>

            <div class="navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    @auth('employers')
                        <!-- Display employer info when logged in as employer -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="employerDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ auth('employers')->user()->email }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="employerDropdown">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </div>
                        </li>
                    @endauth

                    @auth('employees')
                        <!-- Display employee info when logged in as employee -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="employeeDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ auth('employees')->user()->email }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="employeeDropdown">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </div>
                        </li>
                    @endauth
                </ul>
            </div>
        </nav>

        @yield('content')
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous" defer></script>
</body>
</html>
