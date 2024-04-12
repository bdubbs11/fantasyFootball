<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/createaccount.css') }}">
    <title>Wilson Fantasy Football</title>
</head>
<body>

    <x-nav />

<h1>Create an Account</h1>

<div class="create">
    <form method="POST" action="/createaccount">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" value = "{{old('name')}}" required><br>
        @error('name')
            <p class="wrong">{{ $message }}</p>
        @enderror
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email"  value = "{{old('email')}}"required><br>
        @error('email')
            <p class="wrong">{{ $message }}</p>
        @enderror
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required><br>
        @error('password')
            <p class="wrong">{{ $message }}</p>
        @enderror

        <button>Submit</button>

        <p>
            Already have an account? <a href="/login"> 
                Login
          </a> 
      </p>           
    </form>
</div>


    
</body>
    <x-footer/>
</html>