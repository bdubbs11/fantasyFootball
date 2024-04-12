<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Wilson Fantasy Football</title>
</head>
<body>

    <x-nav />

    <h1>Login</h1>


    <div class = "loginform">
        <form method="POST" action="/login">
            @csrf
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" value = "{{old('email')}}" required><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required><br>
            @error('password')
                <p class="wrong">The email or password is wrong</p> <!-- why aint this hoe working -->
            @enderror

            <button>Submit</button>

            <p>Not registered?  
                <a href="/createaccount"> 
                  Create an account 
              </a> 
          </p>           
        </form>
    </div>
</body>
    <x-footer/>
</html>