@include('landing-page.header')

<body>

<div class="signup-card text-center" data-aos="fade-up">
    <h2>Sign Up</h2>
    <p class="text-light opacity-75 mb-4">Create your account and start adopting!</p>

    <form method="POST" action="{{ route('signup.submit') }}">
        @csrf
        <input type="text" name="name" class="form-control" placeholder="Full Name" required>
        <input type="email" name="email" class="form-control" placeholder="Email Address" required>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>

        <button type="submit" class="btn btn-primary mb-4">Sign Up</button>
    </form>

    <p class="mb-3 opacity-75">Or sign up with</p>
    <div class="d-flex gap-3 justify-content-center">
        <a href="#" class="btn btn-light social-btn"><i class="bi bi-google"></i> Google</a>
        <a href="#" class="btn btn-light social-btn"><i class="bi bi-facebook"></i> Facebook</a>
    </div>

    <p class="mt-4 opacity-75">Already have an account? <a href="{{ route('signin') }}" class="text-link fw-bold">Sign In</a></p>
</div>

</body>
</html>