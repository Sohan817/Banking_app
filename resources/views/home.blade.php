@extends('layouts.app')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <div class="container text-center">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Banking System</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Status</a>
                        </li>
                        <li class="nav-item mx-3">
                            <button class="btn btn-primary">Diposit</button>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-primary">Withdraw</button>
                        </li>

                    </ul>

                </div>
                <div class="d-flex">
                    <button class="btn btn-outline-success" type="submit">Balence:0.00</button>
                    <ul>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                {{ Auth::user()->name }}
                                <a href="/logout">Logout</a>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    </div>

    <div class="container text-center">
        <div style="font-size:clamp(0rem, 1rem + 7vw, 15rem)">
            Banking System
        </div>
    </div>
@endsection
