<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Registration Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #1a2a6c 0%, #b21f1f 50%, #fdbb2d 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 500px;
            padding: 40px;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }
        
        .container::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.2) 0%, rgba(255,255,255,0) 70%);
            transform: rotate(30deg);
            z-index: -1;
        }
        
        .container:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4);
        }
        
        .form-header {
            text-align: center;
            margin-bottom: 30px;
            position: relative;
        }
        
        h1 {
            color: #2c3e50;
            font-weight: 700;
            font-size: 32px;
            margin-bottom: 10px;
            position: relative;
            display: inline-block;
        }
        
        h1::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(to right, #3498db, #8e44ad);
            border-radius: 2px;
        }
        
        .form-group {
            margin-bottom: 25px;
            position: relative;
        }
        
        .input-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #7f8c8d;
            font-size: 18px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #34495e;
            transition: all 0.3s ease;
        }
        
        input, select {
            width: 100%;
            padding: 14px 14px 14px 45px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.3s ease;
            background-color: #f9f9f9;
        }
        
        input:focus, select:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
            background-color: #fff;
        }
        
        input:hover, select:hover {
            border-color: #bdc3c7;
        }
        
        .password-container {
            position: relative;
        }
        
        .toggle-password {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #7f8c8d;
            font-size: 18px;
            transition: color 0.3s;
        }
        
        .toggle-password:hover {
            color: #3498db;
        }
        
        .btn {
            background: linear-gradient(to right, #3498db, #8e44ad);
            color: white;
            border: none;
            padding: 16px 30px;
            font-size: 18px;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            font-weight: 600;
            letter-spacing: 1px;
            transition: all 0.4s ease;
            box-shadow: 0 4px 15px rgba(52, 152, 219, 0.4);
            position: relative;
            overflow: hidden;
        }
        
        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, rgba(255,255,255,0.2), transparent);
            transition: all 0.4s;
        }
        
        .btn:hover {
            background: linear-gradient(to right, #2980b9, #9b59b6);
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(52, 152, 219, 0.6);
        }
        
        .btn:hover::before {
            left: 100%;
        }
        
        .btn:active {
            transform: translateY(0);
        }
        
        .success-message {
            background: linear-gradient(to right, #2ecc71, #27ae60);
            color: white;
            padding: 20px;
            border-radius: 8px;
            margin-top: 25px;
            text-align: center;
            font-weight: 500;
            display: none;
            box-shadow: 0 5px 15px rgba(46, 204, 113, 0.4);
            animation: fadeIn 0.5s ease;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .form-footer {
            text-align: center;
            margin-top: 25px;
            color: #7f8c8d;
            font-size: 14px;
        }
        
        .form-footer a {
            color: #3498db;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s;
        }
        
        .form-footer a:hover {
            color: #2980b9;
            text-decoration: underline;
        }
        
        @media (max-width: 600px) {
            .container {
                padding: 30px 20px;
            }
            
            h1 {
                font-size: 28px;
            }
            
            .btn {
                padding: 14px 25px;
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-header">
            <h1>Create Your Account</h1>
            <p>Join our professional community today</p>
        </div>
        
        <form method="POST" action="">
            <div class="form-group">
                <i class="fas fa-user input-icon"></i>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required placeholder="Enter your username">
            </div>
            
            <div class="form-group">
                <i class="fas fa-lock input-icon"></i>
                <label for="password">Password</label>
                <div class="password-container">
                    <input type="password" id="password" name="password" required placeholder="Create a strong password">
                    <i class="fas fa-eye toggle-password" onclick="togglePassword('password')"></i>
                </div>
            </div>
            
            <div class="form-group">
                <i class="fas fa-lock input-icon"></i>
                <label for="confirmpassword">Confirm Password</label>
                <div class="password-container">
                    <input type="password" id="confirmpassword" name="confirmpassword" required placeholder="Confirm your password">
                    <i class="fas fa-eye toggle-password" onclick="togglePassword('confirmpassword')"></i>
                </div>
            </div>
            
            <div class="form-group">
                <i class="fas fa-venus-mars input-icon"></i>
                <label for="gender">Gender</label>
                <select id="gender" name="gender" required>
                    <option value="" disabled selected>Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            
            <div class="form-group">
                <i class="fas fa-phone input-icon"></i>
                <label for="telephone">Telephone</label>
                <input type="tel" id="telephone" name="telephone" required placeholder="Enter your phone number">
            </div>
            
            <div class="form-group">
                <i class="fas fa-envelope input-icon"></i>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required placeholder="Enter your email address">
            </div>
            
            <button type="submit" class="btn">Register Now <i class="fas fa-arrow-right" style="margin-left: 10px;"></i></button>
        </form>
        
        <div class="form-footer">
            Already have an account? <a href="#">Sign in</a>
        </div>
        
        <div class="success-message" id="successMessage">
            <i class="fas fa-check-circle" style="font-size: 24px; margin-right: 10px;"></i>
            Registration successful! Welcome to our platform.
        </div>
    </div>
    
    <?php
    include("connection.php");
    error_reporting(0);
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Username = $_POST["username"];
        $Password = $_POST["password"];
        $confirmpassword = $_POST["confirmpassword"];
        $Gender = $_POST["gender"];
        $Telephone = $_POST["telephone"];
        $Email = $_POST["email"];
        
        // Basic validation
        if ($Password !== $confirmpassword) {
            echo "<script>alert('Passwords do not match!');</script>";
            exit;
        }
        
        // Sanitize inputs (basic example - consider more robust sanitization)
        $Username = mysqli_real_escape_string($conn, $Username);
        $Password = mysqli_real_escape_string($conn, $Password);
        $confirmpassword = mysqli_real_escape_string($conn, $confirmpassword);
        $Gender = mysqli_real_escape_string($conn, $Gender);
        $Telephone = mysqli_real_escape_string($conn, $Telephone);
        $Email = mysqli_real_escape_string($conn, $Email);
        
        $query = "INSERT INTO records_info (username, password, confirmpassword, gender, telephone, email) 
                 VALUES ('$Username', '$Password', '$confirmpassword', '$Gender', '$Telephone', '$Email')";
        
        $data = mysqli_query($conn, $query);
        
        if ($data) {
            echo "<script>document.getElementById('successMessage').style.display = 'block';</script>";
        } else {
            echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
        }
    }
    ?>
    
    <script>
        function togglePassword(inputId) {
            const passwordInput = document.getElementById(inputId);
            const toggleIcon = passwordInput.nextElementSibling;
            
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleIcon.classList.remove("fa-eye");
                toggleIcon.classList.add("fa-eye-slash");
            } else {
                passwordInput.type = "password";
                toggleIcon.classList.remove("fa-eye-slash");
                toggleIcon.classList.add("fa-eye");
            }
        }
    </script>
</body>
</html>