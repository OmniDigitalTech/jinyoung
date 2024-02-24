@extends('website::layouts.master')

@section('content')
    <section class="container p-5">
        <form>
            <div class="section-header">
                <h2>Jinyoung Management</h2>
            </div>

            <!-- Email input -->
            <div class="form-outline pt-0 pb-3 p-5">
                <label class="form-label" for="form2Example1">Email address</label>
                <input type="email" id="form2Example1" class="form-control" />
            </div>

            <!-- Password input -->
            <div class="form-outline pt-0 p-5">
                <label class="form-label" for="form2Example2">Password</label>
                <input type="password" id="form2Example2" class="form-control" />
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4 text-center">
                <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="form2Example34" checked />
                        <label class="form-check-label" for="form2Example34"> Remember me </label>
                    </div>
                    <div class="form-check">
                        <a class="text-decoration-none" href="#!">Forgot password?</a>
                    </div>
                </div>
            </div>
            <!-- Submit button -->
            <div class="text-center">
                <button data-mdb-ripple-init type="button" class="btn btn-primary btn-block mb-4">Sign in</button>
            </div>


            <!-- Register buttons -->
            <div class="text-center">
                <p>Not a member? <a class="text-decoration-none" href="#!">Register</a></p>
                <p>or sign up with:</p>
                <button  data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                </button>

                <button  data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                    <i class="fab fa-google"></i>
                </button>

                <button  data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                </button>

                <button  data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                    <i class="fab fa-github"></i>
                </button>
            </div>
        </form>
    </section>
@endsection
