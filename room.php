 
<?php 
include("header.php");
$noRoom=1;
$noAdult=1;
$noChild=0;
if(isset($_POST["postRoom"]))
{
    $noRoom=$_POST["postRoom"];
    
   
}
if(isset($_POST["postAdult"]))
{
   $noAdult=$_POST["postAdult"];
}
if(isset($_POST["postChild"]))
{
     $noChild=$_POST["postChild"];
}
?>


<div id="roomCover">
    <?php include("navbar.php"); ?>
    <div id="bookHeading" class="text-center indexFont">
        <h1>Room &amp; Suites</h1>
        <h3>Warmth. Care. Peace.</h3>
    </div>

    <!--               ROOM BOOKING                 -->

    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <!--              calender               -->
                <div class="row">
                    <div class="col-xs-6">
                        <form class="form-group roomForm">
                            <label>Check In</label>
                            <input type="text" placeholder="DD/MM/YYYY" class="form-control roomDate">
                        </form>
                    </div>
                    <div class="col-xs-6">
                        <form class="form-group roomForm">
                            <label>Check Out</label>
                            <input type="text" placeholder="DD/MM/YYYY" class="form-control roomDate">
                        </form>
                    </div>
                </div>
            </div>
            

            <div class="col-md-5">
                <!--Rooms and Guest   -->
                <div class="row">
                    <div class="col-xs-6">
                        <div class="roomGuest">Rooms</div>

                        <div class="dropdown roomDrop">
                            <button class="btn btn-default dropdown-toggle hotelBtn" type="button" data-toggle="dropdown">
                                <?php echo $noRoom; ?> Room
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <form action="" method="post">
                                        <label>Rooms : </label>
                                        <input type="number" class="input-sm form-control text-center" name="postRoom">
                                    </form>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-xs-6">
                        <div class="roomGuest">Guest</div>
                        <div class="row">
                            <div class="col-xs-6">
                                
                                <div class="dropdown roomDrop">
                                    <button class="btn btn-default dropdown-toggle hotelBtn" type="button" data-toggle="dropdown">
                                        <?php echo $noAdult; ?> Adult
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <form class="form-group" action="" method="post">
                                                <label>Adult : </label>
                                                <input type="number" class="input-sm form-control text-center" name="postAdult">
                                            </form>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="col-xs-6">
                                <div class="dropdown roomDrop">
                                    <button class="btn btn-default dropdown-toggle hotelBtn" type="button" data-toggle="dropdown">
                                         <?php echo $noChild; ?> Child
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        
                                        <li>
                                            <form class="form-group" action="" method="post">
                                                <label>Child : </label>
                                                <input type="number" class="input-sm form-control text-center" name="postChild">
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
            <div class="col-md=2">
                <button class="btn btn-default btn-lg bookBtn">Check Availability</button>
            </div>

        </div>
    </div>
</div>

<!--                Booking caption                  -->
<div id="bookCaption">
    <div class="text-center indexFont">
        <h4>COMFORTABLE ROOMS &amp; SERVICES</h4>

        <h1>
            <p>Explore our refined accomodation options and</p>
            <p>find the perfect space for your</p>
            <p>stay.</p>

        </h1>
        <p>All rooms have a bathroom with bathtub and/or shower, cable television/radio, free WIFI</p>
        <p>and mini bar. In addition, all rooms are equipped with a Nespresso coffee machine. Most</p>
        <p>rooms are carpeted, some have parquet flooring.</p>
    </div>
    <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
            <div class="row">
                <div class="col-xs-6 hotelTime text-center" id="hotelTime">
                    <i class="fa-regular fa-clock fa-xl" style="color: #dc8409;"></i>
                    <span>Check IN : 3:00 PM</span>
                </div>
                <div class="col-xs-6 hotelTime text-center">
                    <i class="fa-regular fa-clock fa-xl" style="color: #dc8409;"></i>
                    <span>Check Out : 12:00 PM</span>
                </div>
            </div>
        </div>
    </div>
</div>
    <br>

<!--                         Hotel Rooms                  -->
<div id="bookRoom">
    <div class="row">

        <div class="col-md-6">   <!--         room1          -->
            <div class="row" >
                <img class="col-xs-10 col-xs-offset-1" src="image/doubleRoom.jpg">
                <a type="button" class="btn btn-default priceTag" href="doubleRoom.php">$3000</a>
            </div>

            <div class="bookInfo">
                <div class="indexFont">
                    <h3>Double Room</h3>
                    <p class="bookRoomTag">25m<sup>2</sup> / Partial Moutain View / 2 Guest</p>
                    <div>
                        <i class="fa-solid fa-users fa-lg bookIcon"></i><span>2 Guests</span>
                        <i class="fa-solid fa-bed fa-lg bookIcon"></i><span>2 Beds</span>
                        <i class="fa-solid fa-bath fa-lg bookIcon"></i><span>1 Bathroom</span>
                    </div>

                </div>
                <div class="bookRoomInfo">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                    <a href="doubleRoom.php" class="pull-right">Discover More &rarr;</a>
                </div>
            </div>
        </div>

        <div class="col-md-6"> <!--          room2           -->
            <div class="row" >
                <img class="col-xs-10 col-xs-offset-1" src="image/deluxRoom.jpg">
                <a type="button" class="btn btn-default priceTag" href="deluxRoom.php">$2000</a>
            </div>

            <div class="bookInfo">
                <div class="indexFont">
                    <h3>Delux Room</h3>
                    <p class="bookRoomTag">35m<sup>2</sup> / Town View / 2 Guest</p>
                    <div>
                        <i class="fa-solid fa-users fa-lg bookIcon"></i><span>2 Guests</span>
                        <i class="fa-solid fa-bed fa-lg bookIcon"></i><span>1 Beds</span>
                        <i class="fa-solid fa-bath fa-lg bookIcon"></i><span>1 Bathroom</span>
                    </div>

                </div>
                <div class="bookRoomInfo">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                    <a href="deluxRoom.php" class="pull-right">Discover More &rarr;</a>
                </div>
            </div>
        </div>


    </div>

    <div class="row">

        <div class="col-md-6">   <!--         room3          -->
            <div id="room3">
                <div class="row" >
                    <img class="col-xs-10 col-xs-offset-1" src="image/signatureRoom.jpg">
                    <a type="button" class="btn btn-default priceTag" href="Signature.php">$6000</a>
                </div>

                <div class="bookInfo">
                    <div class="indexFont">
                        <h3>Signature Room</h3>
                        <p class="bookRoomTag">65m<sup>2</sup> / Great Moutain View / 4 Guest</p>
                        <div>
                            <i class="fa-solid fa-users fa-lg bookIcon"></i><span>4 Guests</span>
                            <i class="fa-solid fa-bed fa-lg bookIcon"></i><span>2 Beds</span>
                            <i class="fa-solid fa-bath fa-lg bookIcon"></i><span>1 Bathroom</span>
                        </div>

                    </div>
                    <div class="bookRoomInfo">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                        <a href="Signature.php" class="pull-right">Discover More &rarr;</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6"> <!--          room4           -->
            <div class="row" >
                <img class="col-xs-10 col-xs-offset-1" src="image/prestigeRoom.jpg">
                <a type="button" class="btn btn-default priceTag" href="Prestige.php">$9000</a>
            </div>
            <div class="bookInfo">
                <div class="indexFont">
                    <h3>Prestige Room</h3>
                    <p class="bookRoomTag">250m<sup>2</sup> / Great Mountain View / 6 Guest</p>
                    <div>
                        <i class="fa-solid fa-users fa-lg bookIcon"></i><span>6 Guests</span>
                        <i class="fa-solid fa-bed fa-lg bookIcon"></i><span>3 Beds</span>
                        <i class="fa-solid fa-bath fa-lg bookIcon"></i><span>3 Bathroom</span>
                    </div>

                </div>
                <div class="bookRoomInfo">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                    <a href="Prestige.php" class="pull-right">Discover More &rarr;</a>
                </div>
            </div>
        </div>


    </div>
</div>
    
<!--                         Services of rooms                         -->
<div id="bookService">
    <div class="row">
        <div class="col-md-6">
            <div class="indexFont">
                <h4>COMFORTABLE STAY EXPERIANCE</h4>
                <h1>MOST POPULAR FACILITIES</h1>
            </div>
            <p id="aboutService">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
            <a href="#">More About Services &rarr;</a>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-xs-6 bookService indexFont">
                    <p><span>&#43;</span> High Quality Bed</p>
                    <p><span>&#43;</span> Flat TV Screen</p>
                    <p><span>&#43;</span> Bathrobes</p>
                    <p><span>&#43;</span> Bathroom With Geyser</p>
                    <p><span>&#43;</span> Furnished Balcony</p>
                    <p><span>&#43;</span> Free WiFi</p>
                </div>
                <div class="col-xs-6 bookService indexFont">
                    <p><span>&#43;</span> Air Conditioning</p>
                    <p><span>&#43;</span> Mini Bar</p>
                    <p><span>&#43;</span> Laundry</p>
                    <p><span>&#43;</span> Dining Table</p>
                    <p><span>&#43;</span> Safety Deposite Box</p>
                    <p><span>&#43;</span> 24/7 Security </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--                      comments of guest                       -->

<div id="bookCmmt">
    <div class="indexFont text-center">
        <p>"Everything here was great: the staff, the room</p>
        <p>layout, the property amenities with indoor pool, and</p>
        <p>the quality of the food. But the high point is the</p>
        <p>view from the mountains.”</p>
        <br>
        <p id="guestCmmt">Travis Scott - Random Dude</p>
        <div id="cmmtIcon">
            <i class="fa-solid fa-star fa-sm cmmtIcon" style="color: #edba02;"></i>
            <i class="fa-solid fa-star fa-sm cmmtIcon" style="color: #edba02;"></i>
            <i class="fa-solid fa-star fa-sm cmmtIcon" style="color: #edba02;"></i>
            <i class="fa-solid fa-star fa-sm cmmtIcon" style="color: #edba02;"></i>
            <i class="fa-solid fa-star fa-sm cmmtIcon" style="color: #edba02;"></i>
            
        </div>
    </div>
</div>
<?php include("footer.php"); ?>
