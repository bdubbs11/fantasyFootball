<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/updatescores.css') }}">
    <title>Wilson Fantasy Football</title>
</head>
<body>
    <!-- for this page it is a lot going on and its not exactly how i want it to be displayed
    it is hard to do it without javascript. as well as if i find a good enough api this page
    is also irrelevant. but nonetheless i would want to implement this if i had js to work with...'
    I would want to search for a player via search bar and this is connected to the database
    it comes back with a match and with that I already know what team what position
    and based off the position then i can only have those options display instead of showing them all
    and rthen at that point they would all just populate in the middle of the screen instead of how they are now 
    all in all im not fully happy with this page-->

    <x-nav />

    @php
        $offense = ['QB', 'RB', 'WR', 'TE'];
        $defense = ['DEF'];
        $specialteams = ['KICKER'];
        $selectedPosition = isset($_GET['selectedPosition']) ? $_GET['selectedPosition'] : '';
        $selectedPlayer = isset($_GET['selectedPlayer']) ? $_GET['selectedPlayer'] : '';
        $selectedTeam = isset($_GET['selectedTeam']) ? $_GET['selectedTeam'] : '';
    @endphp

    @if($selectedPlayer == '')
        <h1>Update Scores</h1>
    @else
        <h1>Update Scores for {{ $selectedPlayer }} - {{ $selectedPosition }} - {{ $selectedTeam }}</h1>
    @endif


<form action="/updatescores/submit" method ="post">
    @csrf
    <div class="autocomplete" style="width:600px;">
        <input id="myInput" type="text" name="searchablePlayers" placeholder="Search For Player..." onclick="toggleDropdown()" value=" {{ old('searchablePlayers') }}">
        <div id="playerDropdown" class="dropdown-content">
            @foreach ($players as $player)
                <a href="#"  onclick="selectPlayer('{{ $player->name }} - {{ $player->position }} - {{ $player->team }}')">{{ $player->name }} - {{ $player->position }} - {{ $player->team }}</a>
            @endforeach
        </div> <!-- I want to get the selected player posistion and then say ok display offense if guy is an offensive position -->
    </div>
    
    <div class="round">
        Round: <select name="round" id="team">  <!-- determines how far they made it how much points are worth -->
                <!-- what round -->
                <option value="" disabled selected>What round of playoffs</option>

                <option value="Wildcard">Wildcard</option> <!-- single-->
                <option value="Divisional">Divisional</option> <!-- double except for ravens and 49ers who are single -->
                <option value="Confrence">Confrence</option> <!-- triple except for ravens and 49ers who are double-->
                <option value="Superbowl">Superbowl</option> <!-- quadruple except for ravens and 49ers who are triple-->
            </select>

            <span>Did the team win?</span> <br>
            <input type="radio" id="teamwinyes" name="teamwin" value="winyes">
            <label for="teamwinyes"> Yes</label>
            <input type="radio" id="teamwinno" name="teamwin" value="winno">
            <label for="teamwinno"> No</label>
    </div>

    <!-- if the person updated is on offense display this -->
    <!-- @php 
        $selectedPosition = isset($_GET['selectedPosition']) ? $_GET['selectedPosition'] : '';
        $selectedPlayer = isset($_GET['selectedPlayer']) ? $_GET['selectedPlayer'] : '';
        $selectedTeam = isset($_GET['selectedTeam']) ? $_GET['selectedTeam'] : '';
    @endphp -->

    <!-- <p>Selected Position: {{ $selectedPosition }}</p>
<p>Selected Player: {{ $selectedPlayer }}</p>
<p>Selected Team: {{ $selectedTeam }}</p> -->

    @if(in_array($selectedPosition, $offense)) 

        <x-offense/>

    @elseif(in_array($selectedPosition, $defense))

      <!-- if the person updated is the def display this -->

      <x-defense/>


    @elseif(in_array($selectedPosition, $specialteams))
    <!-- if the person updated is a kicker display this -->

    <x-fieldgoals/>

    @else

    <h3>Please select a player so you can input their points</h3>

    @endif
    <!-- who won the superbowl -->
    <div class="sbwin">
        <span>Did they win the Superbowl?</span> <br>
        <input type="radio" id="sbteamwinyes" name="sbteamwin" value="sbwinyes">
        <label for="sbteamwinyes"> Yes</label>
        <input type="radio" id="sbteamwinno" name="sbteamwin" value="sbwinno">
        <label for="sbteamwinno"> No</label>

    </div>



    <div class="btnsubmit">
        <input type="submit" value="Submit">
    </div>

</form>

</body>
    <x-footer/>
</html>
<script>

function toggleDropdown() {
    var dropdown = document.getElementById("playerDropdown");
    dropdown.classList.toggle("show");
}

function selectPlayer(playerInfo) {
    document.getElementById("myInput").value = playerInfo;
    document.getElementById("playerDropdown").classList.remove("show");

    // player
    var player = playerInfo.split("-")[0].trim();
    //position
     var position = playerInfo.split("-")[1].trim();
     // team
     var team = playerInfo.split("-")[2].trim();
     window.location.href = window.location.pathname + '?selectedPlayer=' + player + '&selectedPosition=' + position + '&selectedTeam=' + team;


    //positionSelected(playerInfo.split("-")[1].trim())// gets the position
    // console.log(playerInfo.split("-")[1].trim()); // gets the position
    // return playerInfo;
}

// Hide dropdown when clicking outside of search bar and dropdown
document.addEventListener("click", function(event) {
    var dropdown = document.getElementById("playerDropdown");
    var input = document.getElementById("myInput");
    if (event.target !== input && !input.contains(event.target) && event.target !== dropdown && !dropdown.contains(event.target)) {
        dropdown.classList.remove("show");
    }
});


</script>