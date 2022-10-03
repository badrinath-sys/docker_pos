<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS</title>
    <meta name="" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.4.0/font/bootstrap-icons.min.css">
    <style>
        @import url(https://unpkg.com/@webpixels/css@1.1.5/dist/index.css);
    </style>
</head>

<body>

    <div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">

        <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg "
            style="z-index: 10" id="navbarVertical">

            <div class="container-fluid">
                <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0" href="#"> </a>

                <div class="collapse navbar-collapse" id="sidebarCollapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('admin/dashboard') }}">
                                <i class="bi bi-house"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('admin/product') }}">
                                <i class="bi bi-bar-chart"></i> Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('admin/pos') }}">
                                <i class="bi bi-cart2"></i> POS Management

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('admin/order') }}">
                                <i class="bi bi-bookmarks"></i> Orders
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('admin/customer') }}">
                                <i class="bi bi-people"></i> Customers
                            </a>
                        </li>
                        @if (Session('role') == 'Admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('admin/feedback') }}">
                                    <i class="bi bi-chat-dots"></i> Feedbacks
                                </a>
                            </li>
                        @endif
                    </ul>

                    <hr class="navbar-divider my-5 opacity-80">

                    <div class="mt-1"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('admin/account') }}">
                                <i class="bi bi-person-square"></i> Account
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('admin/logout') }}">
                                <i class="bi bi-box-arrow-left"></i> Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="h-screen flex-grow-1 overflow-y-lg-auto">

            <header class="bg-surface-primary border-bottom pt-6">
                <div class="container-fluid">
                    <div class="mb-npx">
                        <div class="row align-items-center">
                            <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                                <h1 class="h2 mb-6 ls-tight text-lg">Point of Sale Dashboard</h1>
                            </div>
                            <div class="col-sm-6 col-12 text-sm-end mb-4">

                                <div class="mx-n1">

                                    <button
                                        class=" border-2 border-solid border-blue-500  text-primary font-bold py-1 px-3 mx-1 rounded-full">

                                        {{ Session::get('role') }}

                                    </button>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </header>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        @section('container')
                            @yield('content')
                            @yield('scripts')
                        @show
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTAINER-->

    </div>
    </div>

</body>

</html>
