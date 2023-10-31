<?php 
include("header.php");
?>

<div id="signCover">
    <?php include("navbar.php"); ?>
</div>
<div id="doubleInfo">
    <div class="row">
        <div class="col-md-4 col-md-offset-1">
            <div class="IndexFont">
                <h1>Signature Room</h1>
                <p id="doublePara">65m<sup>2</sup> / Great Mountain View / 4 Guest</p>
                <div id="doubleIcons">
                    <i class="fa-solid fa-users fa-lg doubleIcon"></i><span>4 Guest</span>
                    <i class="fa-solid fa-bed fa-lg doubleIcon"></i><span>2 Bed</span>
                    <i class="fa-solid fa-bath fa-lg doubleIcon"></i><span>1 Bathroom</span>
                </div>
            </div>
            <div class="doubleAbout">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>
            </div>
            
            <div id="doubleAmen" class="indexFont">
               <h3>Family-friendly Amenities</h3>
                <div class="row" id="amenInfo">
                    
                    <div class="col-xs-4">
                        <div class="row">
                            <div class="col-xs-10 col-xs-offset-1 doubleAmen">
                                <div class="row">
                                    <i class="fa-solid fa-person-swimming fa-2xl col-xs-4 amenIcon"></i>
                                    <p class="col-xs-8">Kids Swimming Pool</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xs-4">
                        <div class="row">
                            <div class="col-xs-10 col-xs-offset-1 doubleAmen">
                                <div class="row">
                                    <i class="fa-solid fa-bed fa-2xl col-xs-4 amenIcon"></i>
                                    <p class="col-xs-8">Extra Bed/Baby Crib</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xs-4">
                        <div class="row">
                            <div class="col-xs-10 col-xs-offset-1 doubleAmen" id="doubleWash">
                                <div class="row">
                                    <i class="fa-solid fa-soap fa-2xl amenIcon col-xs-4"></i>
                                    <p class="col-xs-8">Washing Machine</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        
        
        <!--                            Booking Portion                    -->
        
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-10 col-md-offset-1" id="doubleBook">
                    
                    <div class="row">
                        
                        <div class="col-xs-8 col-xs-offset-2"> <!--    top Portion       -->
                            <div class="row">
                                <p class="col-xs-6 indexFont" id="DoubleStyle2">RESERVE</p>
                                <div class="col-xs-6">
                                    <p id="doubleStyle3"><span id="doubleStyle">From </span><span style="font-weight: 700">&#36;6000</span>/night</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xs-8 col-xs-offset-2 doubleBook"> <!--      Check In        -->
                            <div class="row doubleCal">
                                <p class="col-xs-6">Check In:</p>
                                <form class="col-xs-6 doubleForm">
                                    <input type="text" placeholder="DD/MM/YYYY" class="form-control roomDate text-center">
                                </form>
                            </div>
                        </div>
                        
                        <div class="col-xs-8 col-xs-offset-2 doubleBook"> <!--      Check Out        -->
                            <div class="row doubleCal">
                                <p class="col-xs-6">Check Out:</p>
                                <form class="col-xs-6 doubleForm">
                                    <input type="text" placeholder="DD/MM/YYYY" class="form-control roomDate text-center">
                                </form>
                            </div>
                        </div>
                        
                        <div class="col-xs-8 col-xs-offset-2 doubleBook"> <!--     Rooms      -->
                            <div class="dropdown">
                                <button class="doubleBtn  dropdown-toggle" data-toggle="dropdown">
                                    Rooms
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <form class="form-inline">
                                            <div class="form-group">
                                                <label for="doubleroomNum">Room</label>
                                                <input id="doubleroomNum" type="number" class="doubleInput text-center">
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-xs-8 col-xs-offset-2" id="doubleGuest"> <!--    Guest Info    -->
                            <div class="row">
                                <div class="col-xs-6 doubleGuest">  <!--   Adult  -->
                                    <div class="dropdown">
                                        <button class="doubleBtn  dropdown-toggle" data-toggle="dropdown">
                                            Adult
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <form>
                                                    <input type="number" class="form-control text-center">
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="col-xs-6  doubleGuest">  <!--   child  -->
                                    <div class="dropdown">
                                        <button class="doubleBtn  dropdown-toggle" data-toggle="dropdown">
                                            Child
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <form>
                                                    <input type="number" class="form-control text-center">
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xs-6 col-xs-offset-3"> <!--  booking   -->
                            <button id="doubleBookBtn">Book Your Stay</button>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<!--                Room Amenities                 -->

<div id="roomAmen" class="indexFont">
    <div class="row">
        <div class="col-md-6">
            <h3>Room Amenities</h3>
            <div class="row">
                <div class="col-xs-6">
                    <div class="row">
                        
                        <div class="ramenIcon">
                            <i class="fa-solid fa-wifi fa-xl ramenIcon1 col-xs-4" style="color: #dc8409;"></i>
                            <p class="col-xs-8">Wifi &amp; Internet</p>
                        </div>
                        
                        <div class="ramenIcon">
                            <div class="col-xs-4"><i class="fa-solid fa-shoe-prints fa-rotate-270 fa-xl  ramenIcon1" style="color: #dc8409;"></i></div>
                            <p class="col-xs-8">Slippers</p>
                        </div>
                        
                        <div class="ramenIcon">
                            <i class="fa-solid fa-pump-soap fa-xl col-xs-4  ramenIcon1" style="color: #dc8409;"></i>
                            <p class="col-xs-8">Shampoo</p>
                        </div>
                        
                        <div class="ramenIcon">
                            <i class="fa-solid fa-paw fa-xl col-xs-4 ramenIcon1" style="color: #dc8409;"></i>
                            <p class="col-xs-8">Pet Friendly</p>
                        </div>
                        
                    </div>
                </div>
                
                <div class="col-xs-6">
                    <div class="row">
                        
                        <div class="ramenIcon">
                            <i class="fa-solid fa-tv fa-xl col-xs-4 ramenIcon1" style="color: #dc8409;"></i>
                            <p class="col-xs-8">Cable TV</p>
                        </div>
                        
                        <div class="ramenIcon">
                            <i class="fa-solid fa-champagne-glasses fa-xl col-xs-4 ramenIcon1" style="color: #dc8409;"></i>
                            <p class="col-xs-8">Welcome Drinks</p>
                        </div>
                        
                        <div class="ramenIcon">
                            <i class="fa-solid fa-mug-saucer fa-xl col-xs-4 ramenIcon1" style="color: #dc8409;"></i>
                            <p class="col-xs-8">Espresso Machine</p>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 indexFont" id="doubleInc"> <!--     what is included part      -->
            
            <h3>What’s included in this suite?</h3>
            <ul>
                <li><span>Private balcony</span></li>
                <li><span>140x200 cm Elite bed</span></li>
                <li><span>TV-UHD screen for watching mountaineering films</span></li>
                <li><span>Service station with Lavazza coffee machine, kettle and tea</span></li>
                <li><span>Bathroom with rain shower</span></li>
                <li><span>Comfortable terry towels and bathrobes</span></li>
            </ul>
        
        </div>
        
    </div>
</div>

<?php include("footer.php"); ?>