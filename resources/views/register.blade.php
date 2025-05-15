<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Your Application</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --beige: #F8EEDF;
            --burgundy: #6D2323;
            --light-burgundy: #8d4343;
        }
        
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .login-container {
            margin-top: 80px;
            margin-bottom: 80px;
        }
        
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(50, 50, 93, 0.1), 0 5px 15px rgba(0, 0, 0, 0.07);
            overflow: hidden;
        }
        
        .card-header {
            background-color: white;
            border-bottom: none;
            padding-top: 30px;
            padding-bottom: 20px;
        }
        
        .card-title {
            color: var(--burgundy);
            font-weight: 700;
            font-size: 28px;
            margin-bottom: 0;
        }
        
        .brand-logo {
            width: 60px;
            height: 60px;
            background-color: var(--beige);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }
        
        .brand-logo i {
            color: var(--burgundy);
            font-size: 28px;
        }
        
        .card-body {
            padding: 40px;
        }
        
        .form-label {
            color: #495057;
            font-weight: 500;
        }
        
        .form-control {
            border-radius: 8px;
            padding: 12px 15px;
            border: 1px solid #ced4da;
            transition: all 0.3s;
        }
        
        .form-control:focus {
            border-color: var(--light-burgundy);
            box-shadow: 0 0 0 0.2rem rgba(109, 35, 35, 0.15);
        }
        
        .input-group-text {
            border-radius: 8px;
            border: 1px solid #ced4da;
            background-color: white;
        }
        
        .btn-primary {
            background-color: var(--burgundy);
            border: none;
            border-radius: 8px;
            padding: 12px 15px;
            font-weight: 600;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 6px rgba(109, 35, 35, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
            transition: all 0.2s;
        }
        
        .btn-primary:hover, .btn-primary:focus {
            background-color: var(--light-burgundy);
            transform: translateY(-1px);
            box-shadow: 0 7px 14px rgba(109, 35, 35, 0.1), 0 3px 6px rgba(0, 0, 0, 0.08);
        }
        
        .btn-primary:active {
            transform: translateY(1px);
            box-shadow: 0 3px 10px rgba(109, 35, 35, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);
        }
        
        .form-check-input:checked {
            background-color: var(--burgundy);
            border-color: var(--burgundy);
        }
        
        .form-check-input:focus {
            border-color: var(--light-burgundy);
            box-shadow: 0 0 0 0.2rem rgba(109, 35, 35, 0.15);
        }
        
        .register-link {
            color: var(--burgundy);
            font-weight: 600;
            text-decoration: none;
            transition: all 0.2s;
        }
        
        .register-link:hover {
            color: var(--light-burgundy);
            text-decoration: underline;
        }
        
        .form-text {
            color: #6c757d;
        }
        
        .divider {
            display: flex;
            align-items: center;
            margin: 20px 0;
        }
        
        .divider-line {
            flex-grow: 1;
            height: 1px;
            background-color: #e9ecef;
        }
        
        .divider-text {
            padding: 0 15px;
            color: #adb5bd;
        }
        
        .social-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 15px;
        }
        
        .social-button {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 18px;
            transition: all 0.3s;
        }
        
        .social-button:hover {
            transform: translateY(-3px);
        }
        
        .google {
            background-color: #DB4437;
        }
        
        .facebook {
            background-color: #4267B2;
        }
        
        .twitter {
            background-color: #1DA1F2;
        }
        
        .card-footer {
            background-color: white;
            border-top: none;
            text-align: center;
            padding-bottom: 30px;
        }
        
        .forgot-password {
            color: #6c757d;
            text-decoration: none;
            transition: all 0.2s;
        }
        
        .forgot-password:hover {
            color: var(--burgundy);
            text-decoration: underline;
        }
        
        /* Animation effects */
        .card {
            animation: fadeIn 0.5s ease-out;
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Error state styling */
        .form-control.is-invalid {
            border-color: #dc3545;
            background-image: none;
        }
        
        .invalid-feedback {
            font-size: 80%;
            color: #dc3545;
            margin-top: 4px;
        }
    </style>
</head>
<body>
    <div class="container login-container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <!-- Login Card -->
                <div class="card mb-4">
                    <div class="card-header text-center">
                        <div class="brand-logo">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        <h4 class="card-title">Register to Your new Account</h4>
                        <p class="text-muted">Enter your credentials to access your account</p>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register')}}">
                            @csrf

                            
                            <!-- Email Address -->
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-envelope" style="color: #6D2323;"></i>
                                    </span>
                                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username') }}" placeholder="Masukan NIP/NIS" required autofocus>
                                    @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            
                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-lock" style="color: #6D2323;"></i>
                                    </span>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Enter your password" required>
                                    <span class="input-group-text cursor-pointer" onclick="togglePassword()">
                                        <i class="fas fa-eye" id="toggleIcon"></i>
                                    </span>
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            
                          
                            
                            <!-- Login Button -->
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-sign-in-alt me-2"></i> Register
                                </button>
                            </div>
                        </form>
                        
                        <!-- Divider -->
                        <div class="divider">
                            <div class="divider-line"></div>
                            <div class="divider-text">OR</div>
                            <div class="divider-line"></div>
                        </div>
                        
                       
                    <div class="card-footer">
                        <p>Do you have an account? <a href="{{ url('/') }}" class="register-link">Login Now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('toggleIcon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }
    </script>
</body>
</html>