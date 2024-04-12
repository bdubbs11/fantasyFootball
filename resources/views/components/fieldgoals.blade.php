<div class="formFieldgoals">
    @csrf
        <!-- Special Teams -->
        <div class="specialteams">
            <!-- Field goals - Make -->
            <div class="make">
                <p>Field Goals - Make</p>

                <div class="row">
                    <div class="col">
                        <label for="fgmake">How many FG's made:</label>
                    </div>
                    <div class="col">
                        <input type="text" id="fgmake" name="fgmake" placeholder="3..." required>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="fgdistancemake">Distances: </label>
                    </div>
                    <div class="col">
                        <input type="text" id="fgdistancemake" name="fgdistancemake" placeholder="25,55,33..." required>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="xpmake">How many XP's made:</label>
                    </div>
                    <div class="col">
                        <input type="text" id="xpmake" name="xpmake" placeholder="3" required>
                    </div>
                </div>
            </div>

            <!-- Field goals - Miss -->
            <div class="miss">
                <p>Field Goals - Miss</p>

                <div class="row">
                    <div class="col">
                        <label for="fgmiss">How many FG's missed:</label>
                    </div>
                    <div class="col">
                        <input type="text" id="fgmiss" name="fgmiss" placeholder="3..." required>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="fgdistancemiss">Distances: </label>
                    </div>
                    <div class="col">
                        <input type="text" id="fgdistancemiss" name="fgdistancemiss" placeholder="25,55,33..." required>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="xpmiss">How many XP's missed:</label>
                    </div>
                    <div class="col">
                        <input type="text" id="xpmiss" name="xpmiss" placeholder="0" required>
                    </div>
                </div>
            </div>
        </div>

</div>