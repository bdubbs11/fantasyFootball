<div class="formDefense">
    @csrf
        <!-- Defensive Points -->
        <div class="defense">
            <p>Defensive Stats</p>

            <!-- Defensive stats -->
            <div class="row">
                <div class="col">
                    <label for="intd">Interception:</label>
                </div>
                <div class="col">
                    <input type="text" id="intd" name="intd" placeholder="1..." required>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="fumblesd">Fumbles recovered:</label>
                </div>
                <div class="col">
                    <input type="text" id="fumblesd" name="fumblesd" placeholder="1..." required>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="sacks">Sacks:</label>
                </div>
                <div class="col">
                    <input type="text" id="sacks" name="sacks" placeholder="2..." required>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="Safety">Safeties:</label>
                </div>
                <div class="col">
                    <input type="text" id="Safety" name="Safety" placeholder="0..." required>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="touchdown">Touchdowns:</label>
                </div>
                <div class="col">
                    <input type="text" id="touchdown" name="touchdown" placeholder="0..." required>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="pointsallow">How many points allowed:</label>
                </div>
                <div class="col">
                    <input type="text" id="pointsallow" name="pointsallow" placeholder="21..." required>
                </div>
            </div>
        </div>

</div>