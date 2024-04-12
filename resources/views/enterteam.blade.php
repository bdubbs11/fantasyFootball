<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/enterteams.css') }}">
    <title>Wilson Fantasy Football</title>
</head>
<body>

    <x-nav />

    <h1>Enter Team</h1>

    <form action="/enterteam/submit" method= 'post'>
        @csrf
        <div class="form-row">
            <div class="form-column">
                <label for="yname">Your Name:</label>
                <input type="text" id="yname" name="yname" placeholder="Jane Doe" required >
            </div>
            <div class="form-column">
                <label for="tname">Team Name:</label>
                <input type="text" id="tname" name="tname" placeholder="In It To Win It" required>
            </div>
        </div>

        <x-enterteamComponent/> <!-- I need to fix for the flex players to have actual positions and then if that posistion
                                 is already filled give them the position flex... -->

        <input type="submit" value="Submit">
    </form>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    
</body>
    <x-footer/>
</html>