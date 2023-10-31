<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="collapsed navbar-toggle" data-toggle="collapse" data-target="#nevi">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Sojourn</a>
        </div>

        <div class="collapse navbar-collapse" id="nevi">

            <ul class="nav navbar-nav">
                <li id="#active" ><a style="color:white;">HOME</a></li>

                <li class="dropdown">
                    <!--             Stay Dropdown                 -->

                    <a class="dropdown-toggle" data-toggle="dropdown" href="" style="color:white;">STAY
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="deluxRoom.php">Deluxe Room</a></li>
                        <li><a href="Prestige.php">Prestige Room</a></li>
                        <li><a href="doubleRoom.php">Double Room</a></li>
                        <li><a href="Signature.php">Signature Room</a></li>
                        
                    </ul>

                </li>

                <li class="dropdown">
                    <!--                    Pages Dropdown                   -->
                    <a class="dropdown-toggle" data-toggle="dropdown" style="color:white;">PAGES
                        <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a href="About.php">About</a></li>
                        <li><a href="Service.php">Services</a></li>
                    </ul>
                </li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <button class=" btn navbar-btn indexBtn" onclick="window.location.href='room.php'"><span id="indexBtn">BOOK NOW</span></button>
            </ul>
        </div>

    </div>
</nav>
