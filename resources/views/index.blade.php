<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ secure_asset('css/index.css') }}">
    <title>Wilson Fantasy Football</title>
</head>
<body>
    <x-nav />
    <!-- IF I HAVE NOT DONE ALREADY CHANGE ALL FORMS TO 
        TO METHOD = "POST"  -->
    <h1>NFL Fantasy Football Playoffs</h1>

        <!-- gotta add person name and team name as well as gotta add the picture to each person -->
        <!-- team 1 -->
        <!-- last thing i want to add to the home page is blacking out a box -->

        <!-- this is temporary just to display at least 3 teams -->
        @foreach($fantasyTeams as $fantasy)
            <x-teamsComponent :fantasy="$fantasy"/> <!-- hahhaha need to pass the fantasyteams shit into the component mwhahahah-->
        @endforeach

        <!-- what it most likely will be  -->
        <!-- for how many users/teams are in the teams are how many teams will display -->
        <!-- <?php /* @foreach ($users as $user)
            <p>This is user {{ $user->id }}</p> 
        @endforeach */ ?>-->

        @if(session()->has('success'))
        <div class ="success">
            <p>
                {{ session('success') }}
            </p>
        </div>
        <script>
            // Wait for 3 seconds and then hide the success message
            setTimeout(function() {
                document.querySelector('.success').style.display = 'none';
            }, 3000);
        </script>
        @endif

</body>

    <x-footer/>
</html>
