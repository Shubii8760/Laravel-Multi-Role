<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sports Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/style/circle.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

</head>

<body>
    <form action="{{ route('register.store') }}" id="verificationForm" method="post" enctype="multipart/form-data">
        @csrf
        <section class="h-100 bg-dark">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col">
                        <div class="card card-registration my-4">
                            <div class="row g-0">
                                <div class="col-xl-6 d-none d-xl-block">
                                    <img src="{{ asset('assets/reg.jpg') }}" alt="Sample photo" class="img-fluid"
                                        style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;width:100%;" />
                                </div>
                                <div class="col-xl-6">
                                    <div class="card-body p-md-5 text-black">
                                        <h3 class="mb-5 text-uppercase d-flex justify-content-center"
                                            style="font-family: cursive; font-size: 35px; font-weight: 400; font-weight: bold;">
                                            registration form
                                        </h3>

                                        <section id="register">
                                            {{-- <div class="upload mb-3">
                                                <img class="rounded-circle" src="{{ asset('assets/pic.jpg') }}"
                                                    width=100 height=100 alt="">
                                                <div class="round">
                                                    <input type="file" name="image">
                                                    <i class="fa fa-camera" style="color:#fff;"></i>
                                                </div>
                                            </div> --}}

                                            <div class="row">
                                                <div class="col-md-10 mb-4">
                                                    <div class="form-outline">
                                                        <input type="text" id="name"
                                                            class="form-control form-control-lg" name="name" />
                                                        <label class="form-label" for="name"
                                                            style="font-family: cursive; font-weight: bold;">First
                                                            name</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-10 mb-4">
                                                    <div class="form-outline">
                                                        <input type="text" id="email"
                                                            class="form-control form-control-lg" name="email" />
                                                        <label class="form-label" for="email"
                                                            style="font-family: cursive; font-weight: bold;">Email</label>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-10 mb-4">
                                                    <div class="form-outline ">
                                                        <input type="password" id="password"
                                                            class="form-control form-control-lg" name="password" />
                                                        <label class="form-label" for="password"
                                                            style="font-family: cursive; font-weight: bold;">Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" class="btn btn-primary btn-lg"
                                                style="font-family: cursive;">Submit</button>
                                        </div>

                                        {{-- <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4  mx-auto">
                                            <a href="{{ route('home.page') }}" class="btn btn-secondary btn-lg"
                                                style="font-family: cursive;">
                                                <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
                                        </div> --}}

                                        {{-- <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <a href="{{ route('login.view') }}" class="text-decoration-none"
                                                style="font-family: cursive;">Already
                                                have an
                                                account? Log In</a>
                                            {{-- fw-bold --}}
                                        {{-- </div> --}} --}}

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>

    {{-- toastr js  --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    </script>
    <script>
        @if (session('success'))
            toastr.success("{{ session('success') }}")
        @endif
        @if (session('error'))
            toastr.error("{{ session('error') }}")
        @endif
        @if (session('warning'))
            toastr.warning("{{ session('warning') }}")
        @endif
        @if (session('info'))
            toastr.info("{{ session('info') }}")
        @endif
    </script>

</body>

</html>