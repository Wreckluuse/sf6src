<!DOCTYPE html>
<html>

<head>
    <script src=" https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js "></script>
    <script src="https://kit.fontawesome.com/cda086cfbf.js" crossorigin="anonymous"></script>
    <script src="script.js" type="text/javascript"></script>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div id="content-wrapper">
        <div id="logo">
            <h1 id="logo-content-1">SF6</h1>
            <h1 id="logo-content-2">Punish</h1>
            <h1 id="logo-content-3">Calculator</h1>
        </div>
        <div id="frame-calculator">
            <div class="move-container">
                <h3 id="move-header-1"></h3>
                <div class="move-image-container">
                    <img class="move-image" id="move-image-1" />
                </div>
                <h3 id="move-frames-1"></h3>
            </div>
            <div class="move-container">
                <h3 id="move-header-2"></h3>
                <div class="move-image-container">
                    <img class="move-image" id="move-image-2" />
                </div>
                <h3 id="move-frames-2"></h3>
            </div>
        </div>
        <div class="settings" id="settings-1">
            <div class="settings-form" id="settings-form-1">
                <select>
                    <option>Player 1</option> 
                    <option>Player 2</option>
                </select>
                <select class="character-select" id="character-1">
                    <option>Choose a character</option>
                    <option value="Blanka">Blanka</option>
                    <option value="Cammy">Cammy</option>
                    <option value="Chun-Li">Chun-Li</option>
                    <option value="Dee_Jay">Dee Jay</option>
                    <option value="Dhalsim">Dhalsim</option>
                    <option value="E.Honda">E. Honda</option>
                    <option value="Guile">Guile</option>
                    <option value="Jamie">Jamie</option>
                    <option value="JP">JP</option>
                    <option value="Juri">Juri</option>
                    <option value="Ken">Ken</option>
                    <option value="Kimberly">Kimberly</option>
                    <option value="Lily">Lily</option>
                    <option value="Luke">Luke</option>
                    <option value="Manon">Manon</option>
                    <option value="Marisa">Marisa</option>
                    <option value="Ryu">Ryu</option>
                    <option value="Zangief">Zangief</option>
                </select>
                <select class="move-select" id="move-select-1">
                </select>
                <div class="radio-container" id="radio-container-1">
                    <h4>Hit type</h4>
                    <div class="radio-group-item">
                        <label for="normal-hit-1">Normal</label>
                        <input type="radio" id="normal-hit-1" name="hit-type-1" value="normal">
                    </div>
                    <div class="radio-group-item">
                        <label for="counter-hit-1">Counter</label>
                        <input type="radio" id="counter-hit-1" name="hit-type-1" value="counter">
                    </div>
                    <div class="radio-group-item">
                        <label for="punish-counter-1">Punish Counter</label>
                        <input type="radio" id="punish-counter-1" name="hit-type-1" value="punish-counter">
                    </div>
                    <div class="radio-group-item">
                        <label for="block-1">Block</label>
                        <input type="radio" id="block-1" name="hit-type-1" value="blocked">
                    </div>
                </div>
                </div>
            </div>
            <!-- <div class="settings" id="settings-2"> -->
                <!-- <div class="settings-form" id="settings-form-2"> -->
                    <!-- <select class="character-select" id="character-2"> -->
                        <!-- <option>Choose a character</option> -->
                        <!-- <option value="Blanka">Blanka</option> -->
                        <!-- <option value="Cammy">Cammy</option> -->
                        <!-- <option value="Chun-Li">Chun-Li</option> -->
                        <!-- <option value="Dee_Jay">Dee Jay</option> -->
                        <!-- <option value="Dhalsim">Dhalsim</option> -->
                        <!-- <option value="E.Honda">E. Honda</option> -->
                        <!-- <option value="Guile">Guile</option> -->
                        <!-- <option value="Jamie">Jamie</option> -->
                        <!-- <option value="JP">JP</option> -->
                        <!-- <option value="Juri">Juri</option> -->
                        <!-- <option value="Ken">Ken</option> -->
                        <!-- <option value="Kimberly">Kimberly</option> -->
                        <!-- <option value="Lily">Lily</option> -->
                        <!-- <option value="Luke">Luke</option> -->
                        <!-- <option value="Manon">Manon</option> -->
                        <!-- <option value="Marisa">Marisa</option> -->
                        <!-- <option value="Ryu">Ryu</option> -->
                        <!-- <option value="Zangief">Zangief</option> -->
                    <!-- </select> -->
                    <!-- <select class="move-select" id="move-select-2"> -->
                    <!-- </select> -->
                    <!-- <div class="radio-container" id="radio-container-2"> -->
                        <!-- <h4>Hit type</h4> -->
                        <!-- <div class="radio-group-item"> -->
                            <!-- <label for="normal-hit-2">Normal</label> -->
                            <!-- <input checked="checked" type="radio" id="normal-hit-2" name="hit-type-2" value="normal"> -->
                        <!-- </div> -->
                        <!-- <div class="radio-group-item"> -->
                            <!-- <label for="counter-hit-2">Counter</label> -->
                            <!-- <input type="radio" id="counter-hit-2" name="hit-type-2" value="counter"> -->
                        <!-- </div> -->
                        <!-- <div class="radio-group-item"> -->
                            <!-- <label for="punish-counter-2">Punish Counter</label> -->
                            <!-- <input type="radio" id="punish-counter-2" name="hit-type-2" value="punish-counter"> -->
                        <!-- </div> -->
                        <!-- <div class="radio-group-item"> -->
                            <!-- <label for="block-2">Block</label> -->
                            <!-- <input type="radio" id="block-2" name="hit-type-2" value="blocked"> -->
                        <!-- </div> -->
                    <!-- </div> -->
                <!-- </div> -->
                <!-- </div> -->
            </div>
</body>

</html>