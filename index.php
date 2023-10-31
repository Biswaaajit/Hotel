<!--http://localhost:8888/-->

<?php 
include("header.php");
?>
<div id="indexImg">
    <?php 
    include("navbar.php"); 
    ?>
    <div class="row">
        <div class="col-md-6 col-md-offset-3 indexCoverPara">
            <h4 class="text-center">Boutique Resort Offers Queenlike Stay</h4>
            <h2 class="text-center ">
                <p>BOUTIQUE RESORT IN </p>
                <P>QUEEN OF HILLS</P>
                <p>DARJEELING</p>
            </h2>
        </div>
    </div>

</div>
<!--                         Comment part of place                         -->

<div class="row" id="comment">
    <div class="col-md-8 col-md-offset-2 text-center">
        <h5 class="indexFont">Culture Meet Modern Luxury</h5>
        <p class="indexFont">CozyStay in Queen Of Hills known for its richness in culture and natural heritage and the most famous toy train that has been declared a UN heritage. </p>
    </div>
</div>

<!--                 Carousel of index             -->
<div id="carouselContainer">
    <div class="carousel slide" id="pic" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#pic" data-slide-to="0" class="active"></li>
            <li data-target="#pic" data-slide-to="1"></li>
            <li data-target="#pic" data-slide-to="2"></li>
            <li data-target="#pic" data-slide-to="3"></li>
        </ul>

        <div class="carousel-inner">
            <div class="item active">
                <img src="image/d1.jpg">
            </div>
            <div class="item">
                <img src="image/d2.jpg">
            </div>
            <div class="item">
                <img src="image/d3.jpg">
            </div>
            <div class="item">
                <img src="image/d4.jpg">
            </div>
        </div>
        <a class="left carousel-control" data-target="#pic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" data-target="#pic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>

<!--                     Hotel Essentials and services                          -->

<div class="container">
    <div class="row" id="service">
        <div class="col-md-6">
            <h5>Discover the Services</h5>
            <p id="service_heading">The Essentials</p>
            <div class="row">
                <br>

                <div class="col-xs-6">

                    <div class="row">

                        <div class="col-xs-2"><i class="fa-solid fa-wifi fa-2xl" style="color: #dc8409;"></i></div>
                        <div class="col-xs-10">
                            <h4 class="indexFont">Wifi &amp; Internet</h4>
                            <p>Enjoy free top speed internet through out your stay with us.</p>
                        </div>

                    </div>

                </div>

                <div class="col-xs-6">

                    <div class="row">
                        <div class="col-xs-2"><i class="fa-solid fa-car fa-2xl" style="color: #dc8409;"></i></div>
                        <div class="col-xs-10">
                            <h4 class="indexFont">Pick Up Services</h4>
                            <p>Pick up and dropping off Service from railway station or bus stand.</p>
                        </div>
                    </div>

                </div>

                <div class="col-xs-6">

                    <div class="row">
                        <div class="col-xs-2"><i class="fa-solid fa-bell-concierge fa-2xl" style="color: #dc8409;"></i></div>
                        <div class="col-xs-10">
                            <h4 class="indexFont">Housekeeper Services</h4>
                            <p>We have staffs available 24/7 for your needs through out your stay.</p>
                        </div>
                    </div>

                </div>

                <div class="col-xs-6">

                    <div class="row">
                        <div class="col-xs-2"><i class="fa-solid fa-jug-detergent fa-2xl" style="color: #dc8409;"></i></div>
                        <div class="col-xs-10">
                            <h4 class="indexFont">Laundry Services </h4>
                            <p>We provide laundry services free of cost to our guests.</p>
                        </div>
                    </div>

                </div>

                <div class="col-xs-6">

                    <div class="row">
                        <div class="col-xs-2"><i class="fa-solid fa-utensils fa-2xl" style="color: #dc8409;"></i></div>
                        <div class="col-xs-10">
                            <h4 class="indexFont">Food Service</h4>
                            <p>We provide breakfast, dinner and snacks service in our cafeteria or in room.</p>
                        </div>
                    </div>

                </div>

                <div class="col-xs-6">

                    <div class="row">
                        <div class="col-xs-2"><i class="fa-solid fa-person-swimming fa-2xl" style="color: #dc8409;"></i></div>
                        <div class="col-xs-10">
                            <h4 class="indexFont">Swimming Pool</h4>
                            <p>We have temperature controlled swimming pool with beautiful scenic view around it.</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <!--               image of essentials and services            -->

        <div class="col-md-6">
            <div class="row">
                <img class="col-xs-6 col-md-6" src="image/table1.jfif">
                <img class="col-xs-6 col-md-6" src="image/Mountain%20pools.jfif">
            </div>
        </div>
    </div>
</div>


<!--                      Hotel rooms             -->

<div id="hotelRoom">
    <div id="indexAcco">
        <p id="roomTag">Enjoy World class Stay Experience</p>
        <div class="row" >
            <div class="col-xs-6">
                <p id="roomHeading">The Accomodation</p>
            </div>
            <div class="col-xs-6">
                <a type="button" class="btn btn-warning pull-right btn-lg" href="room.php">Discover All Suites</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="row roomBorder" id="indexDelux">
                <img class="col-md-10 col-md-offset-1" src="image/delux.jfif">
            </div>
            <div class="roomContent">
                <h4 class="text-center indexFont">Deluxe Room</h4>
                <p class="roomInfo">35m<sup>2</sup> / 2Guest / 1Bed / 1Bathroom</p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row roomBorder" id="indexDouble">
                <img class="col-md-10 col-md-offset-1" src="image/Double%20(%20Modern%20).jfif">
            </div>
            <div class="roomContent">
                <h4 class="text-center indexFont">Double Room</h4>
                <p class="roomInfo">25m<sup>2</sup> / 2Guest / 2Bed / 1Bathroom</p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus</p>
            </div>
        </div>
        <div class="col-md-4" id="editRoom">
            <div class="row roomBorder">
                <img class="col-md-10 col-md-offset-1" src="image/prestige.jfif">
            </div>
            <div id="prestige">
                <h4 class="text-center indexFont">Prestige Room</h4>
                <p class="roomInfo">200m<sup>2</sup> / 6Guest / 3Bed / 3Bathroom</p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus</p>
            </div>
        </div>
    </div>
</div>

<!--               Local Activities and events                     -->

<div id="hotelEvent">
    <div class="text-center indexFont" id="eventHeading">
        <h5>Local Activities &amp; Events</h5>
        <h1>
            <p>IMMERSE YOURSELF IN A DIVERSE</p>
            <p>MOUNTAIN RESORT LIFE</p>
        </h1>
    </div>
    <div id="hotelActivity">
        <div class="row">
            <div class="col-md-4">
                <div class="row">
                    <img class="col-md-10 col-md-offset-1" src="image/spa.jfif">
                </div>
                <div class="aboutAct">
                    <h3 class="text-center indexFont">Spa &amp; Wellness</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus</p>
                    <a href="#" class="pull-right">Discover More &rarr;</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <img class="col-md-10 col-md-offset-1" src="image/summer.jfif">
                </div>
                <div class="aboutAct">
                    <h3 class="text-center indexFont">Summer Week</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus</p>
                    <a href="#" class="pull-right">Discover More &rarr;</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <img class="col-md-10 col-md-offset-1" src="image/restaurant.jfif">
                </div>
                <div class="aboutAct">
                    <h3 class="text-center indexFont">5-Star Restaurant</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus</p>
                    <a href="#" class="pull-right">Discover More &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--                      Booking hotel                         -->

<div id="hotelBooking" class="text-center indexFont">
    <h5>Book Your Stay Now</h5>
    <h2>
        <p>Escape to the beautiful mountains where dreams comes true.</p>
        <p>Immerse yourself in the restorative qualities of nature</p>
        <p>far from the disturbance of</p>
        <p>everyday life.</p>
    </h2>
    <a type="button" class="btn btn-warning btn-lg" href="room.php">Check Availability</a>
</div>

<?php include("footer.php"); ?>

