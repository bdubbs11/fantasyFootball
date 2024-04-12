@props(['name' => ''])

<div class="form-column">
            <label for="{{ $name }}">Team:</label>
            <select name="{{ $name }}" id="{{ $name }}">  <!-- <?php /*{{ teamqb1 }} */ ?> -->
                <!-- <option value="" selected>Select Team</option> -->
                <option value="" disabled selected>Select Team</option>
                <!-- AFC -->
                <option value="Ravens">Ravens</option>
                <option value="Bills">Bills</option>
                <option value="Chiefs">Chiefs</option>
                <option value="Texans">Texans</option>
                <option value="Browns">Browns</option>
                <option value="Dolphins">Dolphins</option>
                <option value="Steelers">Steelers</option>
                <!-- NFC -->
                <option value="49ers">49ers</option>
                <option value="Cowboys">Cowboys</option>
                <option value="Lions">Lions</option>
                <option value="Buccaneers">Buccaneers</option>
                <option value="Eagles">Eagles</option>
                <option value="Rams">Rams</option>
                <option value="Packers">Packers</option>
            </select>
        </div>

        