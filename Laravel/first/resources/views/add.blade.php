<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colorful Registration Form</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"><div>
    <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</div>]
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="form-container">
                    <div class="form-header">
                        <h2><i class="fas fa-user-plus me-2"></i>Create Your Account</h2>
                        <p class="mb-0">Join our community today</p>
                    </div>
                    
                    <div class="form-body">
                        <form id="registrationForm">
                            <!-- Personal Information Section -->
                            <div class="form-section">
                                <h4 class="form-title"><i class="fas fa-user field-icon"></i>Personal Information</h4>
                                
                                <!-- Name Field -->
                                <div class="mb-3">
                                    <label for="name" class="form-label">Full Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
                                    </div>
                                </div>
                                
                                <!-- Email Field -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                                    </div>
                                </div>
                                
                                <!-- Gender Field -->
                                <div class="mb-3">
                                    <label class="form-label">Gender</label>
                                    <div>
                                        <div class="form-check form-check-inline gender-option">
                                            <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                            <label class="form-check-label" for="male">
                                                <i class="fas fa-mars me-1"></i> Male
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline gender-option">
                                            <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                            <label class="form-check-label" for="female">
                                                <i class="fas fa-venus me-1"></i> Female
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline gender-option">
                                            <input class="form-check-input" type="radio" name="gender" id="other" value="other">
                                            <label class="form-check-label" for="other">
                                                <i class="fas fa-transgender me-1"></i> Other
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Location Section -->
                            <div class="form-section">
                                <h4 class="form-title"><i class="fas fa-map-marker-alt field-icon"></i>Location</h4>
                                
                                <!-- City Field -->
                                <div class="mb-3">
                                    <label for="city" class="form-label">City</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-city"></i></span>
                                        <select class="form-select" id="city" name="city" required>
                                            <option value="" selected disabled>Select your city</option>
                                            <option value="new-york">New York</option>
                                            <option value="los-angeles">Los Angeles</option>
                                            <option value="chicago">Chicago</option>
                                            <option value="houston">Houston</option>
                                            <option value="phoenix">Phoenix</option>
                                            <option value="philadelphia">Philadelphia</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <!-- Address Field -->
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-home"></i></span>
                                        <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter your full address"></textarea>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Interests Section -->
                            <div class="form-section">
                                <h4 class="form-title"><i class="fas fa-heart field-icon"></i>Interests</h4>
                                
                                <!-- Hobby Field -->
                                <div class="mb-3">
                                    <label class="form-label">Hobbies</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-check hobby-option">
                                                <input class="form-check-input" type="checkbox" name="hobby" id="reading" value="reading">
                                                <label class="form-check-label" for="reading">
                                                    <i class="fas fa-book me-1"></i> Reading
                                                </label>
                                            </div>
                                            <div class="form-check hobby-option">
                                                <input class="form-check-input" type="checkbox" name="hobby" id="traveling" value="traveling">
                                                <label class="form-check-label" for="traveling">
                                                    <i class="fas fa-plane me-1"></i> Traveling
                                                </label>
                                            </div>
                                            <div class="form-check hobby-option">
                                                <input class="form-check-input" type="checkbox" name="hobby" id="cooking" value="cooking">
                                                <label class="form-check-label" for="cooking">
                                                    <i class="fas fa-utensils me-1"></i> Cooking
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check hobby-option">
                                                <input class="form-check-input" type="checkbox" name="hobby" id="gaming" value="gaming">
                                                <label class="form-check-label" for="gaming">
                                                    <i class="fas fa-gamepad me-1"></i> Gaming
                                                </label>
                                            </div>
                                            <div class="form-check hobby-option">
                                                <input class="form-check-input" type="checkbox" name="hobby" id="sports" value="sports">
                                                <label class="form-check-label" for="sports">
                                                    <i class="fas fa-running me-1"></i> Sports
                                                </label>
                                            </div>
                                            <div class="form-check hobby-option">
                                                <input class="form-check-input" type="checkbox" name="hobby" id="music" value="music">
                                                <label class="form-check-label" for="music">
                                                    <i class="fas fa-music me-1"></i> Music
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Security Section -->
                            <div class="form-section">
                                <h4 class="form-title"><i class="fas fa-lock field-icon"></i>Security</h4>
                                
                                <!-- Password Field -->
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Create a password" required>
                                        <span class="input-group-text password-toggle" id="togglePassword">
                                            <i class="fas fa-eye"></i>
                                        </span>
                                    </div>
                                </div>
                                
                                <!-- Confirm Password Field -->
                                <div class="mb-3">
                                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm your password" required>
                                        <span class="input-group-text password-toggle" id="toggleConfirmPassword">
                                            <i class="fas fa-eye"></i>
                                        </span>
                                    </div>
                                    <div id="passwordMatchMessage"></div>
                                </div>
                            </div>
                            
                            <!-- Submit Button -->
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-submit">
                                    <i class="fas fa-user-plus me-2"></i>Create Account
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Password visibility toggle
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const icon = this.querySelector('i');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
        
        document.getElementById('toggleConfirmPassword').addEventListener('click', function() {
            const confirmPasswordInput = document.getElementById('confirmPassword');
            const icon = this.querySelector('i');
            
            if (confirmPasswordInput.type === 'password') {
                confirmPasswordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                confirmPasswordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
        
        // Password match validation
        document.getElementById('confirmPassword').addEventListener('input', function() {
            const password = document.getElementById('password').value;
            const confirmPassword = this.value;
            const messageElement = document.getElementById('passwordMatchMessage');
            
            if (confirmPassword === '') {
                messageElement.innerHTML = '';
                messageElement.className = '';
            } else if (password === confirmPassword) {
                messageElement.innerHTML = '<i class="fas fa-check-circle me-1"></i>Passwords match!';
                messageElement.className = 'password-match';
            } else {
                messageElement.innerHTML = '<i class="fas fa-exclamation-circle me-1"></i>Passwords do not match!';
                messageElement.className = 'password-mismatch';
            }
        });
        
        // Form submission
        document.getElementById('registrationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            
            if (password !== confirmPassword) {
                alert('Please make sure your passwords match!');
                return;
            }
            
            // In a real application, you would submit the form data to a server here
            alert('Form submitted successfully!');
        });
    </script>
</body>
</html>