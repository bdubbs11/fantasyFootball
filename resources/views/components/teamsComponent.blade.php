
<!-- in this component this is where i would want to pull all the 
teams information, whos team, team name, all the players, points for players
points for teams, teams win/loss, black screens -->


<div class="grid-container">
            <div class="grid-title"> <!-- Total Points -->
                <p>{{ $fantasy->rank }}. {{ $fantasy->yourName }}</p> <!-- the position/placement needs to be changed eventually -->
                <p> {{ $fantasy->teamName }}</p> 
                <p>Total Points: <b>{{ $fantasy->points }}</b></p>

            </div>
            <div class="grid-item">  <!-- QB -->
            <img src="pics/{{ str_replace(' ', '', strtolower($fantasy->qb1)) }}.png" class = "img" alt="{{$fantasy->qb1}}"> <!-- also need to do something about the imgs -->
                <p>Wildcard: </p>
                <p>Divisional: <!-- <span class="win">38</span> --> </p> <!-- gotta add a win class later -->
                <p>Confrence:</p>
                <p>Superbowl: </p>

                <h2>QB: {{ $fantasy->qb1 }}</h2>
            </div>
            <div class="grid-item"> <!-- QB -->
                <img src="pics/{{ str_replace(' ', '', strtolower($fantasy->qb2)) }}.png" class = "img" alt="{{$fantasy->qb2}}">
                <p>Wildcard: </p>
                <p>Divisional: </p>
                <p>Confrence:</p>
                <p>Superbowl: </p>

                <h2>QB: {{$fantasy->qb2}}</h2>

            </div>
            <div class="grid-item"> <!-- RB -->
                <img src="pics/{{ str_replace(' ', '', strtolower($fantasy->rb1)) }}.png" class = "img" alt="{{$fantasy->rb1}}">
                <p>Wildcard: </p>
                <p>Divisional: </p> <!-- <span class="win">18</span> -->
                <p>Confrence:</p>
                <p>Superbowl: </p>

                <h2>RB: {{$fantasy->rb1}}</h2>

            </div>
            <div class="grid-item"> <!-- WR out --> 
                <img src="pics/{{ str_replace(' ', '', strtolower($fantasy->wr1)) }}.png" class = "img" alt="{{$fantasy->wr1}}">
                <p>Wildcard: </p> <!-- <span class="loss">18</span> -->
                <p>Divisional: </p>
                <p>Confrence:</p>
                <p>Superbowl: </p>

                <h2>WR: {{$fantasy->wr1}}</h2>

            </div>
            <div class="grid-item"> <!-- TE -->
                <img src="pics/{{ str_replace(' ', '', strtolower($fantasy->te1)) }}.png" class = "img" alt="{{$fantasy->te1}}">
                <p>Wildcard: </p>
                <p>Divisional: </p>
                <p>Confrence:</p>
                <p>Superbowl: </p>

                <h2>TE: {{$fantasy->te1}}</h2>

            </div>
            <div class="grid-item"> <!-- FLEX  out-->
                <img src="pics/{{ str_replace(' ', '', strtolower($fantasy->flex1)) }}.png" class = "img" alt="{{$fantasy->flex1}}">
                <p>Wildcard: </p>
                <p>Divisional: </p>
                <p>Confrence:</p>
                <p>Superbowl: </p>

                <h2>FLEX: {{$fantasy->flex1}}</h2>

            </div>
            <div class="grid-item"> <!-- FLEX -->
                <img src="pics/{{ str_replace(' ', '', strtolower($fantasy->flex2)) }}.png" class = "img" alt="{{$fantasy->flex2}}">
                <p>Wildcard: </p>
                <p>Divisional: </p>
                <p>Confrence:</p>
                <p>Superbowl: </p>

                <h2>FLEX: {{$fantasy->flex2}}</h2>

            </div>
            <div class="grid-item"> <!-- FLEX out-->
                <img src="pics/{{ str_replace(' ', '', strtolower($fantasy->flex3)) }}.png" class = "img" alt="{{$fantasy->flex3}}">
                <p>Wildcard: </p>
                <p>Divisional: </p>
                <p>Confrence:</p>
                <p>Superbowl: </p>

                <h2>FLEX: {{$fantasy->flex3}}</h2>

            </div>
            <div class="grid-item"> <!-- FLEX -->
                <img src="pics/{{ str_replace(' ', '', strtolower($fantasy->flex4)) }}.png" class = "img" alt="{{$fantasy->flex4}}">
                <p>Wildcard: </p>
                <p>Divisional: </p>
                <p>Confrence:</p>
                <p>Superbowl: </p>

                <h2>FLEX: {{$fantasy->flex4}} </h2>

            </div>
            <div class="grid-item"> <!-- KICKER -->
                <img src="pics/{{ str_replace(' ', '', strtolower($fantasy->kicker1)) }}.png" class = "img" alt="{{$fantasy->kicker1}}">
                <p>Wildcard: </p>
                <p>Divisional: </p>
                <p>Confrence:</p>
                <p>Superbowl: </p>

                <h2>KICKER: {{$fantasy->kicker1}}</h2>

            </div>
            <div class="grid-item"> <!-- DEF -->
                <img src="pics/{{ str_replace(' ', '', strtolower($fantasy->defense1)) }}.png" class = "img" alt=" {{$fantasy->defense1}} def">
                <p>Wildcard: </p>
                <p>Divisional: </p>
                <p>Confrence:</p>
                <p>Superbowl: </p>

                <h2>DEF: {{$fantasy->defense1}} </h2>

            </div>
            <div class="grid-item"> <!-- SB -->
                <img src="pics/{{ str_replace(' ', '', strtolower($fantasy->sb1)) }}.png" class = "img" alt="{{$fantasy->sb1}}">
                <p>Wildcard: </p>
                <p>Divisional: </p>
                <p>Confrence:</p>
                <p>Superbowl: </p>

                <h2>SB: {{$fantasy->sb1}}</h2>

            </div>
        </div>





        

{{--       <!-- somehow this comments this whole section out -->
<div class="grid-container">
    <div class="grid-title"> <!-- Total Points -->
        <p>{{ $fantasy->rank }}. {{ $fantasy->yourName }}</p>
        <p>{{ $fantasy->teamName }}</p> 
        <p>Total Points: <b>{{ $fantasy->points }}</b></p>
    </div>

    @php
        $positions = ['qb1', 'qb2', 'rb1', 'wr1', 'te1', 'flex1', 'flex2', 'flex3', 'flex4', 'kicker1', 'defense1', 'sb1'];
        $positionsCap = ['QB', 'QB', 'RB1', 'WR', 'TE', 'FLEX', 'FLEX', 'FLEX', 'FLEX', 'KICKER', 'DEF', 'SB'];
    @endphp

    @foreach($positions as $index => $position)
        <div class="grid-item">
            <img src="pics/{{ str_replace(' ', '', strtolower($fantasy->$position)) }}.png" class="img" alt="{{ $fantasy->$position }}">
            <p>Wildcard: </p>
            <p>Divisional: </p>
            <p>Confrence:</p>
            <p>Superbowl: </p>
            <h2>{{ $positionsCap[$index] }}: {{ $fantasy->$position }}</h2>
        </div>
    @endforeach
</div>
--}}