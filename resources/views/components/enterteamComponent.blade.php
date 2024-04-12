<!-- what has to get repeated i made it into a php array -->
@php
    $positions = ['qb1', 'qb2', 'rb1', 'wr1', 'te1', 'flex1', 'flex2', 'flex3', 'flex4', 'kicker1', 'defense1', 'sb1'];
    $positionsCap = ['QB', 'QB', 'RB1', 'WR', 'TE', 'FLEX', 'FLEX', 'FLEX', 'FLEX', 'KICKER', 'DEF', 'SB'];

@endphp

<!-- to loop over and print out the form -->

@foreach($positions as $index => $pos)
<div class="form-row">
    <div class="form-column">
        <label for="{{ $pos }}">{{ $positionsCap[$index] }}</label> <!-- {{ $pos }} -->
        <input type="text" id="{{ $pos }}" name="{{ $pos }}" placeholder="Enter your player..." required >
        @if ($positionsCap[$index] == 'FLEX')
            <input type="text" name="{{ $pos }}_true_position" placeholder="Enter their actual position..." required>
        @endif
    </div>
    <!-- @props(['name' => 'qb1team']) -->
    <x-selectteamComponent :name="$pos.'team'"/>  <!-- can bring the input in here or something -->
</div>
@endforeach


