<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng Ký - Trang Sức XYZ</title>
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      background-color: #f8f9fa;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .signup-container {
      background-color: #ffffff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
      border-radius: 10px;
      width: 50%;
      text-align: center;
    }

    .signup-container h2 {
      color: #007bff;
    }

    .signup-form {
      margin-top: 20px;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ced4da;
      border-radius: 5px;
      box-sizing: border-box;
    }

    .form-group button {
      background-color: #007bff;
      color: #ffffff;
      border: none;
      padding: 10px 15px;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .form-group button:hover {
      background-color: #0056b3;
    }

    .login-link {
      margin-top: 15px;
    }

    .login-link a {
      text-decoration: none;
      color: #007bff;
      font-weight: bold;
    }

    .login-link a:hover {
      text-decoration: underline;
    }

    /* Styling for social login buttons (fake buttons) */
    .social-buttons {
      display: flex;
      justify-content: space-between;
      margin-top: 15px;
    }

    .social-buttons button {
      width: 48%;
      background-color: #3b5998; /* Facebook color */
      color: #ffffff;
    }

    .social-buttons button.google {
      background-color: #db4a39; /* Google color */
    }
    .form-group {
  margin-bottom: 15px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}

.form-group label {
  font-weight: bold;
  margin-bottom: 5px;
}

.form-group input,
.form-group textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ced4da;
  border-radius: 5px;
  box-sizing: border-box;
  margin-bottom: 10px; /* Thêm margin-bottom để tạo khoảng cách giữa label và input */
} 
  </style>
</head>
<body>
  <div class="signup-container">
    <h2>Đăng Ký Tài Khoản</h2>
    <form class="signup-form">
      <div class="form-group">
        <label for="fullname">Tên đăng nhập:</label>
        <input type="text" id="fullname" name="fullname" required placeholder="VD: khanhhoangtran123">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required placeholder="VD: tranhuong@gmail.com">
      </div>
      <div class="form-group">
        <label for="phone">Số điện thoại:</label>
        <input type="tel" id="phone" name="phone" required placeholder="VD: 0377865746">
      </div>
      <div class="form-group">
        <label for="address">Địa chỉ:</label>
        <textarea name="address" id="" cols="103" rows="4" required></textarea>
      </div>
      <div class="form-group">
        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password" required placeholder="VD: hoang1234">
      </div>
      <div class="form-group">
        <button type="submit">Đăng Ký</button>
      </div>
    </form>
    <div class="login-link">
      <p>Đã có tài khoản? <a href="dangnhap.html">Đăng nhập ngay</a></p>
    </div>
    
    <!-- Social login buttons (fake buttons) -->
    <div class="social-buttons">
      <button class="facebook">Đăng nhập bằng Facebook</button>
      <button class="google">Đăng nhập bằng Google</button>
    </div>
  </div>
</body>
</html>
