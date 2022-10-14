<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>REGISTRATION</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</head>

<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto');
</style>

<body>
    <main class="py-4 bg-surface-secondary">
        <div class="container-fluid">
            <div class="row g-6 mb-4 justify-center ">
                <div class="col-xl-6 col-sm-12 col-md-8 col-12">
                    <div class="card shadow border-0 mt-12">
                        <div class="card-body    ">
                            <h5 class="mt-3 text-lg text-center">REGISTRATION</h5>
                            <div class='flex items-center px-2 py-3 pl-4 '>
                                <div class="tab-content pl-6 " id="main_form">
                                    <div class="tab-pane active " role="tabpanel" id="step1">
                                        <form action="{{ url('/sendotp') }}" method="post">
                                            {{ csrf_field() }}
                                            <div class="row pl-4">
                                                <div class="col-md-11 ">
                                                    <div class="form-group">
                                                        <label>User Name </label>
                                                        <input
                                                            class=" border rounded w-full py-2 px-3 text-gray-700 leading-tight  focus:outline-none focus:shadow-outline "
                                                            id="username" type="text" name="username"
                                                            placeholder="Username">
                                                    </div>
                                                </div>

                                                <div class="col-md-11">
                                                    <div class="form-group">
                                                        <label>Email Address </label>
                                                        <input
                                                            class="border rounded w-full py-2 px-3 text-gray-700 leading-tight  focus:outline-none focus:shadow-outline"
                                                            type="email" name="email" placeholder="Email id">
                                                    </div>
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="form-group">
                                                        <label>Password </label>
                                                        <input
                                                            class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                            type="password" name="password" placeholder="Password">
                                                    </div>
                                                </div>

                                                <div class="col-md-11 mt-3 mb-6">
                                                    <button
                                                        class=" w-full next-step bg-blue-600 hover:bg-blue-700 text-white text-center  font-semi-bold py-2 px-3 rounded hover:no-underline focus:outline-none focus:shadow-outline"
                                                        type="submit">
                                                        Next </button>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
</body>

</html>
