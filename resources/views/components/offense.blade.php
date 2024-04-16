<div class="formOffense">
    @csrf
        <div class="offense"> <!-- should only have offense forms show up if the offensive position is selected -->
            <!-- passing yards / tds -->
            <!-- receiving yards / tds -->
            <!-- rushing yards / tds -->
                <div class="pass">
                    <p>Passing</p>
                    <!-- passing yards / tds -->
                    <div class="row">
                        <div class="col">
                            <label for="passyards">Yards:</label> <!-- pass yards -->
                        </div>
                        <div class="col">
                            <input type="text" id="passyards" name="passyards" placeholder="325..." required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="passtds">TDs:</label> <!-- pass tds -->
                        </div>
                        <div class="col">
                            <input type="text" id="passtds" name="passtds" placeholder="3..." required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="into">Ints Thrown:</label> <!-- ints -->
                        </div>
                        <div class="col">
                            <input type="text" id="intsO" name="intsO" placeholder="0..." required>
                        </div>                            
                    </div>
                </div>
        
                <div class="rec">
                    <p>Receiving</p>
                    <!-- receiving yards / tds -->
                    <div class="row">
                        <div class="col">
                            <label for="receptions">Receptions:</label>
                        </div>
                        <div class="col">
                            <input type="text" id="receptions" name="receptions" placeholder="5..." required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="receivingyards">Yards:</label>
                        </div>
                        <div class="col">
                            <input type="text" id="receivingyards" name="receivingyards" placeholder="120..." required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="receivingtds">TDs:</label>
                        </div>
                        <div class="col">
                            <input type="text" id="receivingtds" name="receivingtds" placeholder="1..." required>
                        </div>
                    </div>
                </div>
                
                <div class="rush">
                    <p>Rushing</p>
                    <!-- rushing yards / tds -->
                    <div class="row">
                        <div class="col">
                            <label for="rushingyards">Yards:</label>
                        </div>
                        <div class="col">
                            <input type="text" id="rushingyards" name="rushingyards" placeholder="120..." required> <!-- required -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="rushingtds">TDs:</label>
                        </div>
                        <div class="col">
                            <input type="text" id="rushingtds" name="rushingtds" placeholder="1..." required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="fumbleso">Fumbles Lost:</label>
                        </div>
                        <div class="col">
                            <input type="text" id="fumbleso" name="fumbleso" placeholder="0..." required>
                        </div>
                    </div>
                </div>  
        </div>
    </div>