<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>

  <!-- Bootstrap CSS (Opsional, jika Anda ingin menggunakan Bootstrap) -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .form-container {
      max-width: 400px;
      width: 100%;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 8px;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .form-group {
      margin-bottom: 1rem;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h1 class="mb-4">Register</h1>

    <form method="POST" action="{{ route('register') }}">
      @csrf

      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" required>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" required>
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" required>
      </div>

      <div class="form-group">
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation" class="form-control" required>
      </div>

      <button type="submit" class="btn btn-primary">Register</button>
    </form>
  </div>
  
  <!-- Bootstrap JS (Opsional, jika Anda menggunakan Bootstrap) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
