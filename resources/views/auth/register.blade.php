<!DOCTYPE html>
<html>

<head>

    <title>Register Warga</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>

<body>

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-5">

            <div class="card">

                <div class="card-header">

                    <h4>Register Warga</h4>

                </div>

                <div class="card-body">

                    <form
                        action="{{ route('register.store') }}"
                        method="POST">

                        @csrf

                        <div class="mb-3">

                            <label>Nama</label>

                            <input
                                type="text"
                                name="name"
                                class="form-control">

                        </div>

                        <div class="mb-3">

                            <label>Email</label>

                            <input
                                type="email"
                                name="email"
                                class="form-control">

                        </div>

                        <div class="mb-3">

                            <label>Password</label>

                            <input
                                type="password"
                                name="password"
                                class="form-control">

                        </div>

                        <div class="mb-3">

                            <label>Konfirmasi Password</label>

                            <input
                                type="password"
                                name="password_confirmation"
                                class="form-control">

                        </div>

                        <button
                            class="btn btn-success w-100">

                            Register

                        </button>

                    </form>

                    <hr>

                    <a
                        href="{{ route('login') }}"
                        class="btn btn-primary w-100">

                        Login

                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>