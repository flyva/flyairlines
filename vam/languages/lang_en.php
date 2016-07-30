<?php
	// NavBar options
	define ('ABOUT' , 'About ');
	define ('PILOTS' , 'Pilot Roster');
	define ('FLEET' , 'Fleet');
	define ('ROUTES' , 'Routes');
	define ('STAFF' , 'Staff');
	define ('RULES' , 'Rules');
	define ('SCHOOL' , 'School');
	define ('REGISTER' , 'Register');
	define ('FORUM' , 'Forum');
	define ('LANGUAGES' , 'Language');
	define ('LANGUAGE_ES' , 'Español');
	define ('LANGUAGE_EN' , 'English');
	define ('LANGUAGE_CS' , 'Čeština');
	define ('LANGUAGE_FR' , 'Français'); 
	// NavBar options user logged
	define ('MENU' , 'Pilot Actions');
	define ('STATS' , 'Statistics');
	define ('ADMIN' , 'Administration');
	// Pilot Roster
	define ('PILOT_ROSTER' , 'Pilot Roster');
	define ('CALLSIGN' , 'Callsign');
	define ('NAME' , 'Name');
	define ('HUB' , 'Hub');
	define ('LOCATION' , 'Location');
	define ('HOURS' , 'Hours');
	define ('RANK' , 'Rank');
	define ('COUNTRY' , 'Country');
	define ('STATUS' , 'Status');
	define ('IVAOID' , 'IVAO ID');
	define ('VATSIMID' , 'VATSIM ID');
	// Fleet list
	define ('FLEET_VA' , 'FLEET');
	define ('FLEET_VA_LOC' , 'FLEET AT ');
	define ('FLEET_VA_TYPE' , 'FLEET TYPE ');
	define ('REGISTRY' , 'Tail Number');
	define ('TYPE' , 'Type');
	define ('LOCATION_PLANE' , 'Location');
	define ('STATUS_PLANE' , 'Status');
	define ('HOURS_PLANE' , 'Hours');
	define ('NAME_PLANE' , 'Name');
	define ('BOOKED_PLANE' , 'Booked');
	define ('PLANE_FREE' , 'Free');
	define ('PLANE_MAINTENANCE' , 'In maintenance');
	define ('PLANE_BOOKED' , 'Booked');
	define ('INFO_PLANE' , 'Info');
	// Routes list
	define ('ROUTES_VA' , 'Routes');
	define ('FLIGHT_VA' , 'Flight');
	define ('DEPARTURE' , 'Departure');
	define ('ARRIVAL' , 'Arrival');
	define ('DEPARTURE_TIME' , 'Departure Time');
	define ('ARRIVAL_TIME' , 'Arrival Time');
	define ('ROUTE_PLANE' , 'Plane Type');
	// Pilot Register form
	define ('REGISTER_FORM' , 'REGISTER');
	define ('PILOT_NAME_REG_FORM' , 'Name:');
	define ('PILOT_LASTNAME_REG_FORM' , 'Last Name:');
	define ('PILOT_BIRTHDATE_REG_FORM' , 'Birth Date:');
	define ('PILOT_IVAOID_REG_FORM' , 'IVAO ID:');
	define ('PILOT_VATSIMID_REG_FORM' , 'VATSIM ID:');
	define ('PILOT_COUNTRY_REG_FORM' , 'Country:');
	define ('PILOT_LANGUAGE_REG_FORM' , 'Language:');
	define ('PILOT_CITY_REG_FORM' , 'City:');
	define ('PILOT_HUB_REG_FORM' , 'Hub:');
	define ('PILOT_EMAIL_REG_FORM' , 'Email:');
	define ('PILOT_PASSWORD_REG_FORM' , 'Password:');
	define ('PILOT_CONFIRMPASSWORD_FORM' , 'Confirm Password:');
	define ('PILOT_COMMENTS_REG_FORM' , 'Comments:');
	define ('BUTTONSUBMIT_REG_FORM' , 'Register');
	define ('PILOT_NAME_PLACEHOLER_REG_FORM' , 'Enter Name');
	define ('PILOT_LASTNAME_PLACEHOLER_REG_FORM' , 'Enter Last Name');
	define ('PILOT_BIRTHDATE_PLACEHOLER_REG_FORM' , 'Enter Birth Date');
	define ('PILOT_IVAOID_PLACEHOLER_REG_FORM' , 'Enter IVAO ID');
	define ('PILOT_VATSIMID_PLACEHOLER_REG_FORM' , 'Enter VATSIM ID');
	define ('PILOT_CITY_PLACEHOLER_REG_FORM' , 'Enter City');
	define ('PILOT_EMAIL_PLACEHOLER_REG_FORM' , 'Enter Email');
	define ('PILOT_PASSWORD_PLACEHOLER_REG_FORM' , 'Enter Password');
	define ('PILOT_COMMENTS_PLACEHOLER_REG_FORM' , 'Enter Comments');
	define ('READ_RULES' , 'I have read, and agree the VA rules');
	// Pilot Register Succesfull Page (index.php?page=pilot_insert)
	define ('REGISTER_SUCCESSFUL' , 'Register successful');
	define ('REGISTER_SUCCESSFUL_MSG' , 'We have received your application and we will process it within 24 hours!
You will receive a new email once we have validated your application. (Make sure your email client allows mail from admin@virtualairlinesmanager.net - if you do not receive any email, please check your spam folder)');
	define ('REGISTER_CAPTCHA_MSG' , 'Captcha incorrect, please try again');
	define ('REGISTER_WRONG' , 'Wrong registration');
	define ('REGISTER_WRONG_MSG' , 'There is a pilot with the email you are trying to use.');
	define ('REGISTER_CLOSED_MSG' , 'Currently there is no vacancy in our company. Stay tuned for new recruitment process.');
	// Password Recover
	define ('FORGOT_PASSWORD' , 'FORGOT PASSWORD');
	define ('PILOT_CALLSIGN_PASSWORD_FORM' , 'Callsign:');
	define ('PILOT_CALLSIGN_PLACEHOLDER_PASSWORD_FORM' , 'Enter Callsign');
	define ('PILOT_EMAIL_PASSWORD_FORM' , 'Email:');
	define ('PILOT_EMAIL_PLACEHOLDER_PASSWORD_FORM' , 'Enter Email');
	define ('BUTTONSUBMIT_PASSWORD_FORM' , 'Reset Password');
	define ('PASSWORD_RESET_WRONG' , 'Reset Password');
	define ('PASSWORD_RESET_WRONG_MSG' , 'Incorrect callsign or email address');
	define ('PASSWORD_RESET_OK' , 'Reset Password');
	define ('PASSWORD_RESET_OK_MSG' , 'The new password is sent to your email address.');
	// Home Page (index.php)
	define ('WELCOME_VA' , 'WELCOME TO ');
	define ('FLIGHT_NETWORKS' , 'FLIGHT NETWORKS');
	define ('TWEETS' , 'TWEETS');
	// Home Page LAST FLIGTS grid
	define ('LATEST_FLIGHTS_VA' , 'LATEST FLIGHTS');
	define ('LF_CALLSIG' , 'Callsign');
	define ('LF_PILOT' , 'Pilot');
	define ('LF_DEPARTURE' , 'Departure');
	define ('LF_ARRIVAL' , 'Arrival');
	define ('LF_FLIGHTDATE' , 'Date');
	define ('LF_FLIGHTTIME' , 'Flight Time');
	// Home Page STATICS grid
	define ('STATISTICS_VA' , 'STATISTICS');
	define ('ST_NUMPILOTS' , 'Pilots');
	define ('ST_NUMPLANES' , 'Aircraft in fleet');
	define ('ST_NUMROUTES' , 'Routes');
	define ('ST_NUMFLIGHTS' , 'Flights total');
	define ('ST_NUMCHARTER' , 'Flights Charter');
	define ('ST_NUMREGULAR' , 'Flights Regular');
	define ('ST_PERREGULAR' , '% Flights Regular');
	// Home Page NEWEST PILOTS grid
	define ('NEWEST_PILOTS_VA' , 'NEWEST PILOTS');
	define ('NEWPILOT' , 'Pilot');
	define ('NEWJOINED' , 'Joined');
	// Home Page NOTAMS grid
	define ('NOTAMS_VA' , 'NOTAMS');
	define ('NOTAM_NAME' , 'NOTAM');
	define ('NOTAM_DATE' , 'Date');
	// Home Page FUTURE EVENTS grid
	define ('FUTURE_EVENTS' , 'FUTURE EVENTS');
	define ('EVENT_NAME' , 'Event');
	define ('EVENT_DATE' , 'Date');
	// NOTAM table
	define ('NOTAM' , 'NOTAM');
	define ('NOTAM_NAME_PANEL' , 'NOTAM Name');
	define ('NOTAM_CREATE_DATE' , 'NOTAM Creation Date');
	define ('NOTAM_PUBLISH_DATE' , 'NOTAM Publish Date');
	define ('NOTAM_TEXT' , 'NOTAM Text');
	// EVENT table
	define ('EVENT' , 'EVENT');
	define ('EVENT_NAME_PANEL' , 'Event Name');
	define ('EVENT_CREATE_DATE' , 'Event Creation Date');
	define ('EVENT_PUBLISH_DATE' , 'Event Publish Date');
	define ('EVENT_TEXT' , 'Event Text');
	// Pilot page
	define ('PILOT_PROFILE' , 'PROFILE');
	define ('PILOT_STATICS' , 'PERSONAL STATICS');
	define ('PILOT_CERTIFICATIONS' , 'PILOT CERTIFICATIONS');
	define ('PILOT_NAME' , 'Name:');
	define ('PILOT_CALLSIGN' , 'Callsign:');
	define ('PILOT_COUNTRY' , 'Country:');
	define ('PILOT_CITY' , 'City:');
	define ('PILOT_HUB' , 'Hub:');
	define ('PILOT_LOCATION' , 'Location:');
	define ('PILOT_RANK' , 'Rank:');
	define ('PILOT_SALARY' , 'Salary per hour:');
	define ('PILOT_MONEY' , 'Money:');
	define ('PILOT_REGISTERDATE' , 'Register date:');
	define ('PILOT_FLIGHTS' , 'Total flights:');
	define ('PILOT_HOURS' , 'Total hours:');
	define ('PILOT_FLIGHTSREGULAR' , 'Regular flights:');
	define ('PILOT_FLIGHTSCHARTER' , 'Charter flights:');
	define ('PILOT_DISTANCE' , 'Distance:');
	define ('PILOT_PERFLIGHTREGULAR' , '% Regular flights:');
	define ('PILOT_MANUALREPORT' , 'Manual reports:');
	define ('PILOT_FSKEEPERREPORT' , 'FS Keeper reports:');
	define ('PILOT_FSACARSREPORT' , 'FS Acars reports:');
	define ('PILOT_VAMACARSREPORT' , 'VAM Acars reports:');
	define ('PILOT_FLIGTH_MAP' , 'MAP LAST 10 FLIGHTS');
	define ('PILOT_FLIGTHS' , 'FLIGHTS');
	define ('PILOT_FLIGTHS_DEP' , 'Departure');
	define ('PILOT_FLIGTHS_ARR' , 'Arrival');
	define ('PILOT_FLIGTHS_DATE' , 'Date');
	define ('PILOT_FLIGTHS_DUR' , 'Duration');
	define ('PILOT_FLIGTHS_DIST' , 'Distance');
	define ('PILOT_FLIGTHS_TYPE' , 'Type');
	define ('PILOT_FLIGTHS_VALI' , 'Validation');
	define ('PILOT_FLIGTHS_DETAILS' , 'Details');
	// FSACARS LOG page
	define ('FSACARS_TRACK' , 'FLIGHT TRACK');
	define ('FSACARS_PARAMETER' , 'Parameter');
	define ('FSACARS_VALUE' , 'Value');
	define ('FSACARS_DEPARTURE' , 'Departure:');
	define ('FSACARS_ARRIVAL' , 'Arrival:');
	define ('FSACARS_FLIGHTYPE' , 'Flight type:');
	define ('FSACARS_FLIGHT_CHARTER' , 'Charter');
	define ('FSACARS_FLIGHT_REGULAR' , 'Regular');
	define ('FSACARS_STATUS_VALIDATED' , 'Validated');
	define ('FSACARS_STATUS_NOVALIDATED' , 'Pending Validation');
	define ('FSACARS_STATUS_REJECTED' , 'Rejected');
	define ('FSACARS_STATUS' , 'Status:');
	define ('FSACARS_DATE' , 'Date:');
	define ('FSACARS_DURATION' , 'Duration:');
	define ('FSACARS_PLANETYPE' , 'Aircraft type:');
	define ('FSACARS_FUEL' , 'Fuel:');
	define ('FSACARS_DISTANCE' , 'Distance:');
	define ('FSACARS_TOUCHDOWN' , 'Landing rate:');
	define ('FSACARS_LOG' , 'Log:');
	// FSKEEPER LOG page
	define ('FSKEEPER_TRACK' , 'FLIGHT TRACK');
	define ('FSKEEPER_PILOT' , 'Pilot:');
	define ('FSKEEPER_AIRCRAFT' , 'Aircraft:');
	define ('FSKEEPER_DISTANCE' , 'Distance:');
	define ('FSKEEPER_DEPARTURE' , 'Departure:');
	define ('FSKEEPER_ARRIVAL' , 'Arrival:');
	define ('FSKEEPER_TIME' , 'Time:');
	define ('FSKEEPER_DEPARTURE_SID' , 'SID:');
	define ('FSKEEPER_DEPARTURE_RWY' , 'Departure Rwy:');
	define ('FSKEEPER_DEPARTURE_TRANS' , 'Departure TA:');
	define ('FSKEEPER_ARRIVAL_SID' , 'STAR:');
	define ('FSKEEPER_ARRIVAL_RWY' , 'Arrival Rwy:');
	define ('FSKEEPER_ARRIVAL_TRANS' , 'Arrival TA:');
	define ('FSKEEPER_ZFW' , 'ZFW:');
	define ('FSKEEPER_BFUEL' , 'Block Fuel:');
	define ('FSKEEPER_FFUEL' , 'Flight Fuel:');
	define ('FSKEEPER_VALIDATED' , 'Validated:');
	define ('FSKEEPER_TYPE' , 'Type:');
	define ('FSKEEPER_REGISTRY' , 'Tail Number:');
	define ('FSKEEPER_FLIGHT_CHARTER' , 'Charter');
	define ('FSKEEPER_FLIGHT_REGULAR' , 'Regular');
	define ('FSKEEPER_STATUS_VALIDATED' , 'Validated');
	define ('FSKEEPER_STATUS_NOVALIDATED' , 'Pending validation');
	define ('FSKEEPER_STATUS_REJECTED' , 'Rejected');
	define ('FSKEEPER_PASSENGERS' , 'Passengers:');
	define ('FSKEEPER_CARGO' , 'Cargo:');
	define ('FSKEEPER_ALTERNATE' , 'Alternate airport:');
	define ('FSKEEPER_LANDVS' , 'Landing VS:');
	define ('FSKEEPER_LANDIAS' , 'Landing IAS:');
	define ('FSKEEPER_SCORE' , 'Flight Score:');
	define ('FSKEEPER_LANDING_ANALYSIS' , 'LANDING ANALYSIS');
	define ('FSKEEPER_ROUTE' , 'ROUTE');
	define ('FSKEEPER_CRITIQUE' , 'FSKEEPER CRITIQUE');
	define ('FSKEEPER_MAPS' , 'MAPS');

	// Pilot options
	define ('PILOT_ACTIONS' , 'ACTIONS');
	define ('OPTION_MAIL' , 'Internal mail');
	define ('OPTION_ROUTE_RESERVE' , 'Book route');
	define ('OPTION_CHANGE_LOCATION' , 'Change location');
	define ('OPTION_BANK' , 'My finances');
	define ('OPTION_MANUAL_PIREP' , 'Manual Pirep');
	define ('OPTION_PROFILE' , 'Change profile');
	define ('OPTION_STATS' , 'My stats');
	define ('OPTION_VA_PARAMETER' , 'VA Parameters');
	define ('OPTION_DOWNLOADS' , 'Downloads');
	// VA Parameters
	define ('VA_PARAMETERS' , 'VA PARAMETERS');
	define ('PARAMETER' , 'Parameter');
	define ('VALUE' , 'Value');
	define ('COST_SHORT_JUMP' , 'Cost short change location:');
	define ('COST_MEDIUM_JUMP' , 'Cost medium change location:');
	define ('COST_LONG_JUMP' , 'Cost long change location:');
	define ('PLANE_STATUS_MAINTENANCE' , 'Aircraft enter in maintenance at % status:');
	define ('LANDING_RATE_CRASH' , 'Landing rate considered as crash:');
	define ('STATUS_LOST_1' , 'Aircraft status lost when landing rate between 0 ft/min and -');
	define ('STATUS_LOST_2' , 'Aircraft status lost when landing rate between -');
	define ('AND_STRING' , ' and -');
	define ('MINIMUN_AIRCRAFT_WEAR' , 'Aircraft status lost in every flight:');
	define ('AIRCRAFT_MAINTENANCE_DURATION' , 'Aircraft maintenance duration:');
	define ('AIRCRAFT_REPARATION_DURATION' , 'Aircraft reparation duration after crash:');
	define ('PENALTY_IN_CRASH' , 'Economic penalty in case of crash:');
	define ('SALARY_PER_HOUR_FOR_YOUR_RANK' , 'Salary per hour based on your rank:');
	define ('SALARY_REDUCTION_CHARTER' , 'Salary reduction for charter flights:');
	define ('DAYS' , ' days');
	// My Bank
	define ('FINANCIAL_TRANSACTIONS' , 'FINANCIAL TRANSACTIONS');
	define ('BANK_DATE' , 'Date');
	define ('BANK_AMOUNT' , 'Amount');
	define ('BANK_REASON' , 'Change Location / Flight');
	define ('BANK_TOTAL_MONEY' , 'Total money: ');
	// Book a route
	define ('AVAILABLE_ROUTES' , 'AVAILABLE ROUTES');
	define ('ROUTES_BOOKED' , 'CURRENT AIRCRAFT & ROUTE BOOKED');
	define ('AVAILABLE_AIRCRAFT' , 'AVAILABLE AIRCRAFTS');
	define ('BOOK_ROUTE_FLIGHT' , 'Flight');
	define ('BOOK_ROUTE_DEPARTURE' , 'Departure');
	define ('BOOK_ROUTE_ARRIVAL' , 'Arrival');
	define ('BOOK_ROUTE_ALTERNATIVE' , 'Alternative');
	define ('BOOK_ROUTE_TIME_DEP' , 'Time Dep.');
	define ('BOOK_ROUTE_TIME_ARR' , 'Time Arr.');
	define ('BOOK_ROUTE_INFORMATION' , 'Information');
	define ('BOOK_ROUTE_ARICRAFT_TYPE' , 'Aircraft type');
	define ('BOOK_ROUTE_ARICRAFT_REG' , 'Tail Number');
	define ('BOOK_ROUTE_ARICRAFT_STATUS' , 'Aircraft status');
	define ('BOOK_ROUTE_ARICRAFT_BOOK' , 'Aircraft Book');
	define ('BOOK_ROUTE_ARICRAFT_BOOK_MSG' , 'Aircraft Booked');
	define ('BOOK_ROUTE_CANCEL_BTN' , ' Cancel booking');
	define ('BOOK_ROUTE_CANCEL' , ' Cancel');
	define ('BOOK_ROUTE_CONFIRM' , 'Booking successful. The booking will be cancelled automatically in 24 hours.');
	define ('BOOK_ROUTE_CONFIRMATION' , 'CONFIRMATION');
	// Change Location
	define ('LOCATION_CHANGE' , 'LOCATION CHANGE');
	define ('LOCATION_CHANGE_LOCATION' , 'Location:');
	define ('LOCATION_CHANGE_BTN' , 'Change');
	// Manual Pirep
	define ('MANUAL_PIREP' , 'MANUAL PIREP');
	define ('MANUAL_PIREP_DATE' , 'Date:');
	define ('MANUAL_PIREP_DATE_PH' , 'Enter Date');
	define ('MANUAL_PIREP_DEP' , 'Departure:');
	define ('MANUAL_PIREP_DEP_PH' , 'Enter Departure');
	define ('MANUAL_PIREP_ARR' , 'Arrival:');
	define ('MANUAL_PIREP_ARR_PH' , 'Enter Arrival');
	define ('MANUAL_PIREP_TIME' , 'Flight time:');
	define ('MANUAL_PIREP_TIME_PH' , 'Enter Flight time');
	define ('MANUAL_PIREP_DISTANCE' , 'Distance:');
	define ('MANUAL_PIREP_DISTANCE_PH' , 'Enter Distance');
	define ('MANUAL_PIREP_FUEL' , 'Fuel:');
	define ('MANUAL_PIREP_FUEL_PH' , 'Enter Fuel');
	define ('MANUAL_PIREP_AIRCRAFT' , 'Aircraft:');
	define ('MANUAL_PIREP_COMMENT' , 'Comments:');
	define ('MANUAL_PIREP_COMMENT_PH' , 'Enter Comments');
	define ('MANUAL_PIREP_FLIGHT_TYPE' , 'Flight Type:');
	define ('MANUAL_PIREP_REG' , 'Regular');
	define ('MANUAL_PIREP_CHARTER' , 'Charter');
	define ('MANUAL_PIREP_SUBMIT_BTN' , 'Submit');
	define ('MANUAL_PIREP_EDIT_BTN' , 'Edit');
	define ('MANUAL_PIREP_CANCEL_BTN' , 'Cancel');
	define ('MANUAL_PIREP_CONFIRM_BTN' , 'Confirm');
	// Flights done by a plane plane_info_public.php
	define ('AIRCRAFT_FLIGHTS' , 'FLIGHTS FOR AIRCRAFT WITH TAIL NUMBER ');
	define ('AIRCRAFT_FLIGHTS_DATE' , 'Date');
	define ('AIRCRAFT_FLIGHTS_PILOT' , 'Pilot');
	define ('AIRCRAFT_FLIGHTS_CALLSIGN' , 'Callsign');
	define ('AIRCRAFT_FLIGHTS_FLIGHT' , 'Flight');
	define ('AIRCRAFT_FLIGHTS_DEP' , 'Departure');
	define ('AIRCRAFT_FLIGHTS_ARR' , 'Arrival');
	define ('AIRCRAFT_FLIGHTS_DISTANCE' , 'Distance');
	define ('AIRCRAFT_FLIGHTS_FUEL' , 'Fuel');
	// Change location jump_request.php
	define ('CHANGE_LOCATION' , 'CHANGE LOCATION');
	define ('CHANGE_LOCATION_ICAO' , 'Airport (ICAO): ');
	define ('CHANGE_LOCATION_SUBMIT_BTN' , 'Change');
	// MY PROFILE myprofile.php
	define ('MY_PROFILE' , 'MY PROFILE');
	define ('MY_PROFILE_UPDATE_BTN' , 'Update');
	define ('MY_PROFILE_UPDATED' , 'Your profile has been updated');
	// INTERNAL MAIL mails.php
	define ('MAILS' , 'INTERNAL MAIL');
	define ('MAILS_NEW' , 'NEW MESSAGE');
	define ('MAILS_REPLY' , 'REPLY MESSAGE');
	define ('MAILS_DATE' , 'Date');
	define ('MAILS_FROM' , 'From');
	define ('MAILS_SUBJECT' , 'Subject');
	define ('MAILS_SUBJECT_PH' , 'Enter the subject');
	define ('MAILS_ACTIONS' , 'Actions');
	define ('MAILS_NEW_MESSAGE_LNK' , ' New message');
	define ('MAILS_NEW_TO' , 'To');
	define ('MAILS_MESSAGE' , 'Message');
	define ('MAILS_MESSAGE_PH' , 'Enter Message');
	define ('MAILS_SEND_BTN' , 'Send');
	// STATISTICS
	define ('STATISTICS' , 'STATISTICS');
	define ('STATISTICS_PERCENTAGE_REG_VS_CHARTER' , 'PERCENTAGE CHARTER VS REGULAR');
	define ('STATISTICS_PERCENTAGE_BY_REPORT_TYPE' , 'PERCENTAGE BY REPORT TYPE');
	define ('STATISTICS_PERCENTAGE_BY_AIRCRAFT_TYPE' , 'PERCENTAGE BY AIRCRAFT TYPE');
	define ('STATISTICS_NUMBER_FLIGTH_CURRENT_MONTH' , 'NUMBER FLIGHTS PER DAY IN CURRENT MONTH');
	define ('STATISTICS_TOP5_HOUR' , 'TOP 5 PILOTS BY HOURS');
	define ('STATISTICS_TOP5_FLIGTH' , 'TOP 5 PILOTS BY FLIGHTS');
	define ('STATISTICS_TOP5_LANDING' , 'TOP 5 LANDINGS');
	define ('STATISTICS_TOP5_ROUTES' , 'TOP 5 ROUTES');
	define ('STATISTICS_CALLSIGN' , 'Callsign');
	define ('STATISTICS_PILOT' , 'Pilot');
	define ('STATISTICS_HOURS' , 'Hours');
	define ('STATISTICS_FLIGHTS' , 'Flights');
	define ('STATISTICS_TOUCH' , 'Touch (ft/min)');
	define ('STATISTICS_ROUTE' , 'Route');
	// strings used index pilot
	define ('INDEX_PILOT_MANUAL' , 'Manual');
	define ('INDEX_PILOT_KEEPER' , 'FS Kepper');
	define ('INDEX_PILOT_FSACARS' , 'FS ACARS');
	define ('INDEX_PILOT_REGULAR' , 'Regular');
	define ('INDEX_PILOT_CHARTER' , 'Charter');
	define ('INDEX_PILOT_COMMENT' , 'Comment');
	// User not recognized
	define ('INDEX_NO_USER' , 'Session closed. User or password not valid');
	// Administration options
	define ('ADM_PARA' , 'VA parameters');
	define ('ADM_HUB_MGR' , 'Hub manager');
	define ('ADM_FLEET_TYPE_MGR' , 'Fleet type');
	define ('ADM_FLEET_MGR' , 'Fleet manager');
	define ('ADM_PILOT_RANK_MGR' , 'Rank manager');
	define ('ADM_PILOT_MGR' , 'Pilot manager');
	define ('ADM_ROUTE_MGR' , 'Route manager');
	define ('ADM_ROUTE_FLEET_MGR' , 'Route assignation');
	define ('ADM_USER_TYPE_MGR' , 'User type');
	define ('ADM_JUMP_MGR' , 'Jump validator');
	define ('ADM_FLIGHT_MGR' , 'Flight validator');
	define ('ADM_NOTAM_MGR' , 'Notams manager');
	define ('ADM_EVENT_MGR' , 'Event manager');
	define ('ADM_EMAIL_MGR' , 'Email manager');
	define ('ADM_LANGUAGES_MGR' , 'Lang. manager');
	define ('ADM_ACARS_MGR' , 'ACARS Parameters');
	define ('ADM_NEW_MODULE_MGR' , 'New module');
	// Validate flights
	define ('VALIDATE_FLIGHTS' , 'FLIGHTS VALIDATION');
	define ('VALIDATE_CALLSIGN' , 'Callsign');
	define ('VALIDATE_DEPARTURE' , 'Departure');
	define ('VALIDATE_ARRIVAL' , 'Arrival');
	define ('VALIDATE_DATE' , 'Date');
	define ('VALIDATE_DURATION' , 'Duration');
	define ('VALIDATE_DISTANCE' , 'Distance');
	define ('VALIDATE_TYPE' , 'Type');
	define ('VALIDATE_LOG' , 'Log');
	define ('VALIDATE_REGULAR' , 'Regular');
	define ('VALIDATE_CHARTER' , 'Charter');
	define ('VALIDATE_ACTION' , 'Action');
	define ('VALIDATE_FLIGHT_REGULAR' , 'Regular Flight  ');
	define ('VALIDATE_FLIGHT_CHARTER' , 'Charter Flight  ');
	// Validate jumps
	define ('VALIDATE_JUMPS' , 'JUMPS VALIDATION');
	define ('VALIDATE_JUMP_CALLSIGN' , 'Callsign');
	define ('VALIDATE_JUMP_DEPARTURE' , 'Departure');
	define ('VALIDATE_JUMP_ARRIVAL' , 'Arrival');
	define ('VALIDATE_JUMP_DATE' , 'Date');
	define ('VALIDATE_JUMP_JUMP1' , 'Jump type 1');
	define ('VALIDATE_JUMP_JUMP2' , 'Jump type 2');
	define ('VALIDATE_JUMP_JUMP3' , 'Jump type 3');
	define ('VALIDATE_JUMP' , 'Jump ');
	// VAM ACARS
	define ('VAMACARS_SIMACARS' , 'SIMACARS REPORT');
	define ('VAMACARS_FLITGH_DETAILS' , 'FLITGH DETAILS');
	define ('VAMACARS_LANDANALYSIS' , 'LANDING ANALYSIS');
	define ('VAMACARS_ROUTE' , 'ROUTE');
	define ('VAMACARS_REMARKS' , 'REMARKS');
	define ('VAMACARS_DETAILS' , 'DETAILS');
	define ('VAMACARS_STATUS_VALIDATION' , 'Validation');
	define ('VAMACARS_STATUS_VALIDATED' , 'Validated');
	define ('VAMACARS_STATUS_REJECTED' , 'Rejected');
	define ('VAMACARS_STATUS_NOVALIDATED' , 'Pending Validation');
	define ('VAMACARS_TYPE' , 'Type');
	define ('VAMACARS_FLIGHT_CHARTER' , 'Charter');
	define ('VAMACARS_FLIGHT_REGULAR' , 'Regular');
	define ('VAMACARS_REGISTRY' , 'Tail Number');
	define ('VAMACARS_ZFW' , 'ZFW');
	define ('VAMACARS_BFUEL' , 'Block Fuel');
	define ('VAMACARS_FFUEL' , 'Flight Fuel');
	define ('VAMACARS_PASSENGERS' , 'Passengers');
	define ('VAMACARS_CARGO' , 'Cargo');
	define ('VAMACARS_ALTERNATE1' , 'Alternate');
	define ('VAMACARS_WEIGHTUNIT' , 'Weight Unit');
	define ('VAMACARS_DATE' , 'DATE');
	define ('VAMACARS_DEPARTURE' , 'Departure');
	define ('VAMACARS_ARRIVAL' , 'Arrival');
	define ('VAMACARS_DURATION' , 'Duration');
	define ('VAMACARS_DISTANCE' , 'DISTANCE');
	define ('VAMACARS_DEP_TIME' , 'Departure Time');
	define ('VAMACARS_CRUISE_SPEED' , 'Cruise Speed');
	define ('VAMACARS_FLIGHT_LEVEL' , 'Flight Level');
	define ('VAMACARS_FLIGHT_TYPE' , 'Flight Type');
	define ('VAMACARS_AIRCRAFT_TYPE' , 'Aircraft Type');
	define ('VAMACARS_COMMENTS' , 'Pilot Comments');
	define ('VAMACARS_NETWORK' , 'Network');
	define ('VAMACARS_DATEDETAIL' , 'Date');
	define ('VAMACARS_FUELCONSUMED' , 'FUEL CONSUMED');
	define ('VAMACARS_LANDING_PITCH' , 'Landing Pitch');
	define ('VAMACARS_LANDING_BANK' , 'Landing Bank');
	define ('VAMACARS_LANDING_FLAPS' , 'Landing Flaps');
	define ('VAMACARS_LANDING_FORCEG' , 'Landing Force G');
	define ('VAMACARS_LANDING_NAV' , 'Navigation Lights');
	define ('VAMACARS_LANDING_LDG' , 'Landing Lights');
	define ('VAMACARS_LANDING_STR' , 'Strobe Lights');
	define ('VAMACARS_LANDING_BEA' , 'Beacon Lights');
	define ('VAMACARS_IAS' , 'IAS');
	define ('VAMACARS_GS' , 'GS');
	define ('VAMACARS_ALTITUDE' , 'ALTITUDE');
	define ('VAMACARS_FUEL_USED' , 'FUEL CONSUMED');
	define ('VAMACARS_OAT' , 'OAT');
	define ('VAMACARS_FLIGHTSTATUS' , 'FLIGHT STATUS');
	define ('VAMACARS_VAM_MAP' , 'FLIGHT MAP');
	define ('VAMACARS_EVENTS' , 'EVENT');
	define ('VAMACARS_MAIN_EVENTS' , 'MAIN EVENTS');
	define ('VAMACARS_ACARS_DATA' , 'ACARS DATA');
	define ('VAMACARS_HEADING' , 'HEADING');
	define ('VAMACARS_FLIGHT_STATUS' , 'FLIGHT STATUS');
	define ('VAMACARS_CRITICAL_EVENTS' , 'CRITICAL EVENTS');
	define ('VAMACARS_VAM_CHART' , 'ALTITUDE CHART');	
	// Downloads
	define ('DOWNLOADS' , 'DOWNLOADS');
	define ('DOWNLOAD_NAME' , 'NAME');
	define ('DOWNLOAD_LINK' , 'LINK');
	// VAM 2.3 BEGIN
	define ('VAMACARS_VALIDATION_COMMENTS' , 'VALIDATION COMMENTS');
	define ('VAMACARS_VALIDATION_COMMENT' , 'COMMENT');
	define ('VAMACARS_FLIGHT_RATING' , 'Flight Rating');
	define ('VAMACARS_CRASH' , 'Crashed');
	define ('VAMACARS_VALIDATOR_COMMENTS' , 'Validator Comments');
	define ('VAMACARS_VALIDATION_ADD_COMMENT' , 'Add comment');
	define ('VAMACARS_VALIDATION_ACCEPT' , 'Acept');
	define ('VAMACARS_VALIDATION_REJECT' , 'Reject');	
	define ('VAMACARS_NO' , 'No');
	define ('VAMACARS_YES' , 'Yes');
	define ('VAMACARS_OK' , 'OK');
	define ('VAMACARS_FAIL' , 'Fail');	
	define ('VAMACARS_FLIGHTFAILURES' , 'FLIGHT FAILURES');
	define ('VAMACARS_BEACONOFFENGINEON' , 'Beacon off & Engine Running');
	define ('VAMACARS_IAS1000' , 'KIAS Above 250  below 10000 FT');
	define ('VAMACARS_LIGHTBELOW1000' , 'Lights OFF below 10000 FT');
	define ('VAMACARS_LIGHTABOVE1000' , 'Lights ON above 10000 FT');
	define ('VAMACARS_STALL' , 'Stall');
	define ('VAMACARS_OVERSPEED' , 'Overspeed');
	define ('VAMACARS_PAUSE' , 'Flight paused');
	define ('VAMACARS_REFUEL' , 'Refueling');
	define ('VAMACARS_SLEW' , 'Slew detected');
	define ('VAMACARS_TAXILIGHTS' , 'Taxi & Taxi lights off');
	define ('VAMACARS_TAKEOFFLIGHTSOFF' , 'Take off & lights off');
	define ('VAMACARS_LANDINGLIGHTSOFF' , 'Landing & lights off');
	define ('VAMACARS_NOTARRIVED' , 'Landed in not planned airport');
	define ('VAMACARS_NUMFAILURES' , 'Number failures');
	define ('VAMACARS_TAXISPEED' , 'Taxi Speed');
	define ('PILOT_FSKEEPER_VALIDATOR' , 'VALIDATOR COMMENTS & FLIGHT RATING');
	define ('MANUAL_PIREP_VALIDATOR_COMMENTS' , 'Validator comments:');
	define ('MANUAL_PIREP_VALIDATION' , 'Validation:');
	define ('MANUAL_PIREP_VALIDATION_DATE' , 'Validation date:');
	define ('MANUAL_PIREP__STATUS_VALIDATED' , 'Validated');
	define ('MANUAL_PIREP__STATUS_NOVALIDATED' , 'Pending Validation');
	define ('MANUAL_PIREP__STATUS_REJECTED' , 'Rejected');
	// VAM 2.4 BEGIN
	define ('AIRPORT_AIRPORT_METAR' , 'METAR AND TAF INFORMATION');
	define ('AIRPORT_AIRPORT_MAP' , 'AIRPORT MAP');
	define ('AIRPORT_AIRPORT_FREQUENCIES' , 'AIRPORT FREQUENCIES');
	define ('AIRPORT_AIRPORT_NAVAIDS' , 'AIRPORT NEAR NAVIGATION AIDS');
	define ('AIRPORT_AIRPORT_NAVAIDS_TYPE' , 'Type');
	define ('AIRPORT_AIRPORT_NAVAIDS_NAME' , 'Name');
	define ('AIRPORT_AIRPORT_NAVAIDS_FREQ' , 'Frequency');
	define ('AIRPORT_RUNWAY_INFO' , 'RUNWAY INFORMATION');
	define ('AIRPORT_RUNWAY' , 'Runway');
	define ('AIRPORT_RUNWAY_LENGTH' , 'Runway length');
	define ('AIRPORT_RUNWAY_WIDTH' , 'Runway width');
	define ('AIRPORT_RUNWAY_ELEVATION' , 'Runway elevation');
	define ('AIRPORT_RUNWAY_THRESHOLD' , 'Runway displaced threshold');
	define ('AIRPORT_RUNWAY_HEADING' , 'Runway heading');
	define ('BOOK_ROUTE_INFO' , 'ROUTE INFORMATION');
	define ('BOOK_ROUTE_DURATION' , 'Duration');
	define ('BOOK_ROUTE_ROUTE' , 'Route');
	define ('BOOK_ROUTE_PRICE' , 'Price');
	define ('BOOK_ROUTE_COMMENTS' , 'Comments');
	define ('ROUTES_VA_SEARCHER', 'Route Searcher');
	define ('VAMACARS_VALIDATION_DELETE','Delete Flight');
	define ('PILOT_RECEIVE_EMAILS','Do you want to receive emails?');
	// VAM 2.5
	define ('AIRCRAFT_DETAILS' , 'AIRCRAFT DETAILS');
	define ('AIRCRAFT_DETAILS_PAX' , 'Number of PAX');
	define ('AIRCRAFT_DETAILS_MAX_RANGE' , 'Maximum range');
	define ('AIRCRAFT_DETAILS_CARGO' , 'Cargo capacity');
	define ('AIRCRAFT_DETAILS_LENGTH' , 'Aircraft length');
	define ('AIRCRAFT_DETAILS_MZFW' , 'Maximum zero-fuel weight (MZFW)');
	define ('AIRCRAFT_DETAILS_MLW' , 'Maximum landing weight (MLW)');
	define ('AIRCRAFT_DETAILS_MTOW' , 'Maximum takeoff weight (MTOW)');
	define ('AIRCRAFT_DETAILS_CRUISE_SPEED' , 'Cruising speed');
	define ('AIRCRAFT_DETAILS_CEILING' , 'Service ceiling');
	define ('AIRCRAFT_DETAILS_CREW' , 'Crew members');
	define ('HUB_DETAILS' , 'HUB DETAILS');
	define ('HUB_PILOTS' , 'HUB PILOTS');
	define ('HUB_FLEET' , 'HUB FLEET');
	define ('HUB_ROUTES' , 'HUB ROUTES');
	define ('HUB_MAP_LOCATION' , 'ROUTES MAP');
	define ('HUB_NAME' , 'Name');
	define ('HUB_WEB' , 'Website');
	define ('HUB_NUM_PILOTS' , 'Number of Pilots');
	define ('HUB_NUM_FLEET' , 'Number of Aircrafts');
	define ('HUB_NUM_ROUTES' , 'Number of Routes');
	define ('ADM_TOUR_MODULE_MGR' , 'Tour Manager');
	define ('ADM_FINANTIAL_MODULE_MGR' , 'Financial mgr.');
	define ('OPERATIONS' , 'Operations');
	define ('HUBS' , 'Hubs');
	define ('TOURS' , 'Tours');
	define ('PILOT_RANKS' , 'Pilot Ranks');
	define ('AWARDS' , 'Awards');
	define ('TOURS_VA' , 'TOURS');
	define ('TOURS_ACTIVE' , 'ACTIVE TOURS');
	define ('TOURS_INACTIVE' , 'INACTIVE TOURS');
	define ('TOUR_DETAILS' , 'TOUR DETAILS');
	define ('TOUR_LEGS' , 'TOUR LEGS');
	define ('TOURS_STATUS' , 'Status');
	define ('TOURS_AWARD' , 'Award');
	define ('TOURS_IMAGE' , 'Image');
	define ('TOURS_NUM_LEGS' , 'Num. Legs');
	define ('TOURS_LEG_STATUS' , 'Legs Status');
	define ('TOURS_NUM_LEGS_ACCEPTED' , 'Num. Legs Accepted');
	define ('TOURS_NUM_LEGS_REPORTED' , 'Num. Legs Reported');
	define ('TOURS_LEGS_REPORT' , 'Report Leg');
	define ('TOURS_DISTANCE' , 'Distance');
	define ('TOURS_NAME' , 'Tour');
	define ('TOURS_START_DATE' , 'Start date');
	define ('TOURS_END_DATE' , 'End date');
	define ('TOURS_ROUTE_INFO' , 'Route & Comments');
	define ('TOURS_ROUTE' , 'Route');
	define ('TOURS_COMMENTS' , 'Comments');
	define ('TOURS_LEG_REPORT' , 'Report Leg');
	define ('TOURS_VALIDATION' , 'TOURS LEGS VALIDATION');
	define ('TOURS_LEG' , 'Leg');
	define ('PILOT_IMAGEUPLOADER_FORM' , 'Pilot Image Uploader');
	define ('PILOT_AWARDS' , 'PILOT AWARDS');
	define ('PILOT_TOURS' , 'PILOT TOURS');
	define ('ADM_AWARDS_MGR' , 'Awards manager');
	define ('ADM_AWARDS_PILOR_MGR' , 'Awards assig.');	
	define ('VAMACARS_LANDINGQNH' , 'Wrong altimeter in Landing');
	define ('VAMACARS_TAKEOFFQNH' , 'Wrong altimeter in Take off');
	define ('LAND_WIND' , 'Landing wind');
	define ('LAND_HDG' , 'Landing heading');
	define ('OPTION_TOUR' , 'Report Tour Leg');
	define ('AWARDS_PANEL' , 'AWARDS');
	define ('AWARD_NAME' , 'Award Name');
	define ('AWARD_IMG' , 'Award Image');
	define ('RANK_PANEL' , 'RANKS');
	define ('RANK_IMAGE' , 'Rank Image');
	define ('RANK_MIN_HOURS' , 'Rank Minimum Hours');
	define ('RANK_MAX_HOURS' , 'Rank Maximum Hours');
	// NEW STATS
	define ('ST_MONTH' , 'Month');
	define ('ST_YEAR' , 'Year');
	define ('STATISTICS_PILOT_HOURS_YEAR_MONTH' , 'HOURS PER YEAR AND MONTH');
	define ('STATISTICS_PILOT_FLIGHTS_YEAR_MONTH' , 'FLIGHTS PER YEAR AND MONTH');
	define ('STATISTICS_FLIGHTS_AIRCRAFT_TYPE' , 'TOP 5 FLIGHTS PER AIRCRAFT TYPE');
	define ('STATISTICS_TOP5_AIRCRAFTS' , 'TOP 5 FLIGHTS PER AIRCRAFT');
	// FINANCE MODULE
	define ('FLIGHT_FINANCES' , 'FLIGHT FINANCIAL REPORT');
	define ('VA_GLOBAL_FINANCES' , 'VA GLOBAL FINANCIAL REPORT');
	define ('COSTS' , 'COSTS');
	define ('INCOME' , 'INCOME');
	define ('INCOME_REGULAR_ROUTES' , 'INCOME REGULAR ROUTES');
	define ('AIRCRAFT_PURCHASE' , 'AIRCRAFT PURCHASE');
	define ('FINANCE_BALANCE' , 'FINANCIAL BALANCE');
	define ('GLOBAL_FINANCES' , 'Financial Report');
	define ('COSTS_PILOTS_SALARY' , 'COSTS PILOTS SALARY');
	define ('COSTS_AIRCRAFT_REPAIR' , 'COSTS AIRCRAFT REPAIR');
	define ('COSTS_AIRCRAFT_MAINTENANCE' , 'COSTS AIRCRAFT MAINTENANCE');
	// LIVE MAP	
	define ('FLIGHT_STAGE' , 'Flight stage');
	define ('PERC_DONE' , '% Completed');
	define ('PENDING_NM' , 'Pending NM');
	
?>