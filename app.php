<?php
    class Application{
        function getArrayFromRequest(){
            $thearray = array(  0=>'The minimum age for visitors renting a car in Barbados is 21 years. Car rental companies typically require between 2 and 5 years driving experience. Drivers over 70 years of age require a medical certificate.',
                                1=>'Bring your drivers license with you. You need this to be issued a local driving permit.',
                                2=>'Hired cars can be easily recognized by the \'H\' on their license plate.',
                                3=>'Wear a seat belt',
                                4=>'Remember that in Barbados we drive on the left side of the road. The vast majority of vehicles are right hand drive.',
                                5=>'Wearing of seatbelts is compulsory in Barbados for both drivers and passengers. Children under 5 years of age must use an appropriate child seat, which can be rented from local car rental companies.',
                                6=>'Speed limits are posted in kilometers/hr rather than miles/hr. 1 kilometre = 0.62 miles. Typical Barbados speed limits are: city areas - 40 km/h, rural areas - 60 km/h, major highways - 80 km/h. Always check the signs to be sure you\'re not exceeding the limit.',
                                7=>'Always park in well-lit areas and avoid leaving valuables in your car.',
                                8=>'In Barbados the honk of a car horn is often used as \'hello\' to a friend or \'thanks\' for giving way. When a driver flashes their lights at you it generally means that they are giving way to you',
                                9=>'Local rush hours are 7:00 - 8:30am & 4:30 - 5:30pm. Plan your travel times accordingly.',
                                10=>'There is no Blood Alcohol Concentration limit in Barbados. Obviously excessive drinking then driving is not wise! If you plan on drinking have a designated driver or take a taxi instead.',
                                11=>'Roundabouts can be a bit confusing at first. Approach cautiously and follow the signs & road markings carefully At roundabouts always give way to vehicles on your right.',
                                12=>'Check if your car rental company offers or includes GPS units in their vehicles. Barbados has an excellent system in place that will be very useful especially if it\'s your first visit to the island. Maps are available from car rental companies, hotels and many locations across the island.',
                                13=>'In the unfortunate event of an accident, call your car rental company immediately. Do not admit any liability. The emergency services numbers are: Police 211, Ambulance 511, Fire Service 311.');
            return $thearray;
        }
    }
    
	//session_start();
    
    //$_SESSION['user_id']= (int)1;
    
   // $db = new mysqli('fdb7.biz.nf', '1990406_drive', 'drivesafe123db', '1990406_drive', 3306);
?>