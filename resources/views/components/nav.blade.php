<nav>
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('rules') }}">Rules</a>
    <a href="{{ route('enterteam') }}">Enter Team</a>
    <a href="{{ route('updatescores') }}">Update Scores</a> 
    @auth 
        <a href="\logout" class="login">Logout</a>
        <span>Welcome to the site {{auth()->user()->name}}! You're currently in 0th place</span>
    @else
        <a href="\login" class="login">Login</a>
        <span>Welcome to the site guest!</span>
    @endauth
    
   
</nav>