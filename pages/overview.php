<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Overview | Team AUV, IIT Kharagpur</title>
        <meta name="description" content="Overview | AUV Team, IIT Kharagpur" />
        <meta name="keywords" content="Overview, Mechanical, Software, Electrical, AUV, Autonomous, Underwater, Vehicle, Team, IIT, IIT Kharagpur, Kharagpur"/>
        <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="../resources/favicon.ico" type="image/x-icon"> 
        
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../css/component.css" />

        <script src="../js/modernizr.custom.js"></script>
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/func.js"></script>

    </head>
    <body>
        <?php include_once('navbar.php');
        ?>
        <script type="text/javascript">
            changeActive(1);
        </script>
        <div class = "container" style="margin-top:70px;">
            <h1 style="text-align:center;">OVERVIEW</h1>
            <div class="row">
                <!-- <div class="col-md-1"></div> -->
                <div class="col-md-2">
                    <ul class="nav nav-pills nav-stacked" style="position: fixed; width: 10%;">
                        <li class="active"><a href="#mechanical">Mechanical</a></li>
                        <li><a href="#electrical">Electrical</a></li>
                        <li><a href="#software">Software</a></li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <div id ="mechanical" class="well well-lg">
                        <h1>MECHANICAL</h1>
                        <p>
                            The body of the AUV is designed to implement a differential motion based control with two heave and two surge 
                            thrusters. The vehicle consists of a Main Hull, IMU enclosure and 4 Thrusters all mounted onto an Aluminium 
                            Frame. The Main Hull will have a diameter of 26 cm, and it will house the various electronic components and 
                            battery. The thrusters are placed so as to provide maximum control. All the thrusters have been accommodated 
                            as close as possible to the corresponding planes of center of gravity so as to minimize the unbalanced roll, 
                            pitch and yaw moments generated due to thrusters. The frame is made up of L cross section bars. The frame is 
                            implemented to provide rigidity and strength, and also to provide protection to the main hull in case the AUV 
                            collides with a wall in the arena. Enough clearance has been provided between the end cap and the sway thruster in 
                            order to accommodate water tight connectors to be attached to end cap.
                        </p>
                        <br>
                        <h3>AUV CAD Model</h3>
                        <img src="../resources/overview_mech1.png" class="img-rounded" width="500">
                        <h3>Exploded View</h3>
                        <img src="../resources/overview_mech2.png" class="img-rounded" width="500">
                        <h2>Torpedo and Dropper Design</h2>
                        <p>
                            The design of the torpedo is made such that the CG(center of gravity) and the CB(center of buoyancy) coincides 
                            latitudinally ,to achieve stable equilibrium. The fin area and its distance from the CG of the torpedo is 
                            chosen such that it has the maximum stabilizing effect. Moreover drag analysis of the designed torpedo has 
                            been done using ANSYS FLUENT to achieve a streamlined design.
                        <h3>Torpedo</h3>
                        <img src="../resources/overview_mech3.png" class="img-rounded" width="500">
                        <h3>Fluent Analysis</h3>
                        <img src="../resources/overview_mech4.png" class="img-rounded" width="500">
                        </p>
                    </div>
                    <div id="electrical">
                        <div class="well well-lg">
                            <h1>ELECTRICAL</h1>
                            <p>
                                <ul>
                                    <li><h3>Sensors</h3></li>
                                    <dl class="dl-horizontal">
                                        <dt>Depth</dt>
                                        <dd>Paroscientific, Inc. Digiquartz® Pressure Instrumentation Series 8WD Intelligent Depth Sensor</dd>
                                        <dt>Velocity</dt>
                                        <dd>LinkQuest ‘s NavQuest 600 Micro DVL</dd>
                                        <dt>IMU</dt>
                                        <dd>Xsens Motion Technologies MT9-B Moisture sensor</dd>
                                    </dl>
                                    <p>
                                        <strong>Inertial Measurement Unit:</strong> An IMU with 9 output data (3 axis gyroscopic value, 3 Axis accelerometer, 
                                        and 3 Axis magnetometer data) will be used to get feedback in the form of Heading, Acceleration and 
                                        Euler angles.<br><br>
                                        <strong>Doppler Velocity Log(DVL):</strong> If required for better accuracy and performance Kraken will be using DVL. DVL 
                                        uses four Sonars to measure the velocity of AUV in water. By integrating the velocity information, DVL
                                         will also give the XYZ co-ordinate information with respect to its initial Point. The DVL also gives
                                          roll, pitch and yaw values. <br><br>
                                        <strong>Depth Sensor:</strong> Depth sensor is a piezoelectric pressure transducer which will provide depth data from 
                                        water surface.  <br><br>
                                        <strong>Camera:</strong> Our AUV is equipped with two cameras, one forward facing and a second one facing down. They 
                                        provide us with 8-bit color image.<br><br>
                                    </p>
                                    <li><h3>Embedded Systems</h3></li>
                                    <ul>
                                        <li>
                                            ATmega16, USB-ISS  Multifunction USB Communications Module, ADAM 4024
                                        </li>
                                    </ul> 
                                    <br>   
                                    <p>
                                        The embedded system is used mostly for sensing and actuating the mechanisms. ATmega16 is used to 
                                        interface a current sensor. The status of moisture sensor is also monitored via it. It also connects 
                                        to a LCD screen which displays the current value and the status of moisture sensor.<br> 
                                        To communicate with the outside word such as to communication with mechanisms LED-LDR circuit is 
                                        used. One more ATmega16 monitors the LDR and on receiving the specified code actuated the desired 
                                        mechanisms.
                                    </p>
                                    <li><h3>Vision</h3></li>
                                    <dl class="dl-horizontal">
                                        <dt>Forward</dt>
                                        <dd>Logitech HD C310 camera</dd>
                                        <dt>Bottom</dt>
                                        <dd>Microsoft LifeCam HD 3000</dd>
                                    </dl>
                                    <p>
                                        Kraken is powered with two cameras. Front vision is acquired via Logitech HD C310 camera and Bottom 
                                        vision is captured via Microsoft LifeCam HD 3000. Currently the front and bottom camera is mounted 
                                        inside the main hull but soon we are going to mount the cameras outside the hull. We also will be 
                                        shifting to stereo camera for the front vision so as we can get an estimate of an object from the 
                                        vehicle.
                                    </p>
                                    <li><h3>Power Distribution</h3></li>
                                    <ul>
                                        <li>4 X Lithium Ion (11.1, 3000mAh)</li>
                                        <li>1 X Lithium Ion (24V, 9000mAh)</li>
                                        <br>
                                        <p>
                                            Kraken is powered by 4 Lithium ion battery (11.1V, 3000mAh) and 1 Lithium Ion Battery 
                                            (24V, 9000mAh). 4 Lithium Ion battery powers the thrusters. This path is completely 
                                            independent of sensors to reduce any unwanted noise.<br>
                                            The other battery is connects to the power converters which powers the motherboard. This 
                                            battery also powers sensors after passing through a DC-DC converter.<br>
                                            Both of the batteries have monitoring system which does coulomb counting and makes the 
                                            system to shut down when it runs low. 
                                        </p>
                                    </ul>
                                    <li><h3>Propulsion</h3></li>
                                    <ul>
                                        <li>4 X Seabotix BTD 150</li>
                                        <li>4 X Technadyne</li>
                                    </ul>
                                    <li><h3>Motherboard</h3></li>
                                    <ul>
                                        <li>Intel D425K Mini ITX Mother Board</li>
                                    </ul>
                                </ul>
                            </p>
                        </div>
                    </div>
                    <div id="software">
                        <div class="well well-lg">
                            <h1>SOFTWARE</h1>
                            <p>
                            Held since 2006, SAUC-E challenges the next generation of engineers to design and build an autonomous underwater vehicle (AUV) capable of performing realistic missions.  The event is designed to encourage students to think about underwater technology and related applications while fostering innovation and technology. The event is being organized by  NATO Undersea Research Centre.
                            </p>
                            <img src="../resources/sauce_arena.jpg" width="500">
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="well">
                        <h1>ABOUT US</h1>
                        The IIT Kharagpur Autonomous Underwater Vehicle Team (iKAT) is a student group working in the field of autonomous underwater robotics. We design and build Autonomous Underwater Vehicles for research and competitive purposes.
                    </div>
                    <a class="twitter-timeline" href="https://twitter.com/IITKGPAUV" data-widget-id="439755179924021248">
                        <small><strong>TWEETS BY @IITKGPAUV</strong></small>
                    </a>
                    <script>
                        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
                    </script>

                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </body>
    <script>
    $('body').on('hidden.bs.modal', '.modal', function () {
        $(this).removeData('bs.modal');
    });
    </script>
    <script>
        $('li').click(function() {
        if ( ! $(this).hasClass('active')) {
        $('li.active').removeClass('active');
        $(this).addClass('active');
        // Do more stuff here
        }
        });

    </script>
</html>