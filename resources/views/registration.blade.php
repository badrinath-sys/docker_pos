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


    * {
        margin: 0;
        padding: 0;
    }

    i {
        margin-right: 10px;
    }

    .d-flex {
        display: flex;
    }

    .justify-content-center {
        justify-content: center;
    }

    .align-items-center {
        align-items: center;
    }

    .signup-step-container {
        padding: 150px 0px;
        padding-bottom: 60px;
    }

    .wizard .nav-tabs {
        position: relative;
        margin-bottom: 0;
        border-bottom-color: transparent;
    }

    .wizard>div.wizard-inner {
        position: relative;
        margin-bottom: 50px;
        text-align: center;
    }

    .connecting-line {
        height: 2px;
        background: #e0e0e0;
        position: absolute;
        width: 65%;
        margin: 0 auto;
        left: 10px;
        right: 0;
        top: 15px;
        z-index: 1;
    }

    .wizard .nav-tabs>li.active>a,
    .wizard .nav-tabs>li.active>a:hover,
    .wizard .nav-tabs>li.active>a:focus {
        color: #555555;
        cursor: default;
        border: 0;
        border-bottom-color: transparent;
    }

    span.round-tab {
        width: 30px;
        height: 30px;
        line-height: 30px;
        display: inline-block;
        border-radius: 50%;
        background: #fff;
        z-index: 2;
        position: absolute;
        left: 0;
        text-align: center;
        font-size: 16px;
        color: #0e214b;
        font-weight: 500;
        border: 1px solid #ddd;
    }

    span.round-tab i {
        color: #555555;
    }

    .wizard li.active span.round-tab {
        background: #2E2EFF;
        color: #fff;
        border-color: #2E2EFF;
    }

    .wizard li.active span.round-tab i {
        color: #5bc0de;
    }

    .wizard .nav-tabs>li.active>a i {
        color: #2E2EFF;
    }

    .wizard .nav-tabs>li {
        width: 33%;
    }

    .wizard li:after {
        content: " ";
        position: absolute;
        left: 46%;
        opacity: 0;
        margin: 0 auto;
        bottom: 0px;
        border: 5px solid transparent;
        border-bottom-color: red;
        transition: 0.1s ease-in-out;
    }

    .wizard .nav-tabs>li a {
        width: 30px;
        height: 30px;
        margin: 20px auto;
        border-radius: 100%;
        padding: 0;
        background-color: transparent;
        position: relative;
        top: 0;
    }

    .wizard .nav-tabs>li a i {
        position: absolute;
        top: -15px;
        font-style: normal;
        font-weight: 400;
        white-space: nowrap;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 12px;
        font-weight: 700;
        color: #000;
    }

    .wizard .nav-tabs>li a:hover {
        background: transparent;
    }

    .wizard .tab-pane {
        position: relative;
        padding-top: 20px;
    }

    .wizard h3 {
        margin-top: 0;
    }

    @media (max-width: 767px) {
        .sign-content h3 {
            font-size: 40px;
        }

        .wizard .nav-tabs>li a i {
            display: none;
        }

        .signup-logo-header .navbar-toggle {
            margin: 0;
            margin-top: 8px;
        }

        .signup-logo-header .logo_area {
            margin-top: 0;
        }

        .signup-logo-header .header-flex {
            display: block;
        }
    }
</style>

<body>
    <main class="py-4 bg-surface-secondary">
        <div class="container-fluid">
            <div class="row g-6 mb-4 justify-center ">
                <div class="col-xl-6 col-sm-12 col-md-8 col-12">
                    <div class="card shadow border-0 mt-12">
                        <div class="card-body    ">
                            <h5 class="mt-3 text-lg">REGISTRATION</h5>
                            <div class='flex items-center px-2 py-3 pl-4 '>

                                <section class="signup-step-container -mt-32 ">
                                    <div class="container ">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-md-10">
                                                <div class="wizard">
                                                    <div class="wizard-inner">
                                                        <div class="connecting-line"></div>
                                                        <ul class="nav nav-tabs" role="tablist">
                                                            <li role="presentation" class="active">
                                                                <a href="#step1" data-toggle="tab"
                                                                    aria-controls="step1" role="tab"
                                                                    aria-expanded="true"><span class="round-tab">1
                                                                    </span> <i>Step 1</i></a>
                                                            </li>
                                                            <li role="presentation" class="disabled">
                                                                <a href="#step2" data-toggle="tab"
                                                                    aria-controls="step2" role="tab"
                                                                    aria-expanded="false"><span
                                                                        class="round-tab">2</span> <i>Step 2</i></a>
                                                            </li>
                                                            <li role="presentation" class="disabled">
                                                                <a href="#step3" data-toggle="tab"
                                                                    aria-controls="step3" role="tab"><span
                                                                        class="round-tab">3</span> <i>Step 3</i></a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <form role="form" action="index.html" class="login-box">
                                                        <div class="tab-content pl-6 " id="main_form">
                                                            <div class="tab-pane active " role="tabpanel"
                                                                id="step1">

                                                                <div class="row pl-4">
                                                                    <div class="col-md-11 ">
                                                                        <div class="form-group">
                                                                            <label>User Name </label>
                                                                            <input
                                                                                class=" border rounded w-full py-2 px-3 text-gray-700 leading-tight  focus:outline-none focus:shadow-outline "
                                                                                id="username" type="text"
                                                                                placeholder="Username">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-11">
                                                                        <div class="form-group">
                                                                            <label>Email Address </label>
                                                                            <input
                                                                                class="border rounded w-full py-2 px-3 text-gray-700 leading-tight  focus:outline-none focus:shadow-outline"
                                                                                type="email" name="name"
                                                                                placeholder="Email id">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-11">
                                                                        <div class="form-group">
                                                                            <label>Password </label>
                                                                            <input
                                                                                class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                                                type="password" name="password"
                                                                                placeholder="Password">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-11 mt-3">
                                                                        <button
                                                                            class=" w-full next-step bg-blue-600 hover:bg-blue-700 text-white text-center  font-semi-bold py-2 px-3 rounded focus:outline-none focus:shadow-outline"
                                                                            type="button">
                                                                            Next
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="tab-pane" role="tabpanel" id="step2">
                                                                <h5 class="mt-2 mb-3 text-xl text-center">OTP
                                                                    Verification</h5>
                                                                <div class="row ml-3">
                                                                    <div class="col-md-11 ">
                                                                        <div class="form-group">
                                                                            <div class="bg-green-100 shadow-outline text-teal-900 font-normal   px-4 py-3 rounded-lg relative"
                                                                                role="alert">
                                                                                We have sent a verification code to your
                                                                                email - emailid@gmail.com
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-11">
                                                                        <div class="form-group">

                                                                            <input
                                                                                class="border rounded w-full py-2 px-3 text-gray-700 leading-tight  focus:outline-none focus:shadow-outline"
                                                                                type="number" name="OTP"
                                                                                placeholder="Enter verification code">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-11 mt-2 ml-3">
                                                                    <button
                                                                        class="  w-full next-step bg-blue-600 hover:bg-blue-700 text-white text-center  font-semi-bold py-2 px-3 rounded focus:outline-none focus:shadow-outline"
                                                                        type="button">
                                                                        Next
                                                                    </button>
                                                                </div>
                                                            </div>

                                                            <div class="tab-pane" role="tabpanel" id="step3">
                                                                <div class="row pl-4">
                                                                    <div class="col-md-11 ">
                                                                        <div class="form-group">
                                                                            <label>Name </label>
                                                                            <input
                                                                                class=" border rounded w-full py-2 px-3 text-gray-700 leading-tight  focus:outline-none focus:shadow-outline "
                                                                                id="username" type="text"
                                                                                placeholder="Username">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-11">
                                                                        <div class="form-group">
                                                                            <label>Company Name </label>
                                                                            <input
                                                                                class="border rounded w-full py-2 px-3 text-gray-700 leading-tight  focus:outline-none focus:shadow-outline"
                                                                                type="text" name="name"
                                                                                placeholder="Name">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-11">
                                                                        <div class="form-group">
                                                                            <label>Company Type </label>
                                                                            <select id="company type"
                                                                                class=" py-2 px-3  border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  ">
                                                                                <option selected>Choose company type
                                                                                </option>
                                                                                <option value="1">Type 1</option>
                                                                                <option value="2">Type 2</option>
                                                                                <option value="3">Type 3</option>
                                                                                <option value="4">Type 4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-11 mt-3">
                                                                        <button
                                                                            class=" w-full next-step bg-blue-600 hover:bg-blue-700 text-white text-center  font-semi-bold py-2 px-3 rounded focus:outline-none focus:shadow-outline"
                                                                            type="button">
                                                                            Submit
                                                                        </button>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
</body>

<script>
    $(document).ready(function() {
        $('.nav-tabs > li a[title]').tooltip();


        $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {

            var target = $(e.target);

            if (target.parent().hasClass('disabled')) {
                return false;
            }
        });

        $(".next-step").click(function(e) {

            var active = $('.wizard .nav-tabs li.active');
            active.next().removeClass('disabled');
            nextTab(active);

        });

    });

    function nextTab(elem) {
        $(elem).next().find('a[data-toggle="tab"]').click();
    }



    $('.nav-tabs').on('click', 'li', function() {
        $('.nav-tabs li.active').removeClass('active');
        $(this).addClass('active');
    });
</script>

</html>
