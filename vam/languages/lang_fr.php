<?php
	// NavBar options
	define ('ABOUT' , 'A propos ');
	define ('PILOTS' , 'Liste des pilotes');
	define ('FLEET' , 'Flotte');
	define ('ROUTES' , 'Lignes');
	define ('STAFF' , 'Staff');
	define ('RULES' , 'Règles');
	define ('SCHOOL' , 'École');
	define ('REGISTER' , 'Inscription');
	define ('FORUM' , 'Forum');
	define ('LANGUAGES' , 'Langue');
	define ('LANGUAGE_ES' , 'Español');
	define ('LANGUAGE_EN' , 'English');
	define ('LANGUAGE_CS' , 'Čeština');
	define ('LANGUAGE_FR' , 'Français'); 

	// NavBar options user logged
	define ('MENU' , 'Actions du pilote');
	define ('STATS' , 'Statistiques');
	define ('ADMIN' , 'Administration');
	// Pilot Roster
	define ('PILOT_ROSTER' , 'Liste des pilotes');
	define ('CALLSIGN' , 'Callsign');
	define ('NAME' , 'Nom');
	define ('HUB' , 'Hub');
	define ('LOCATION' , 'Localisation');
	define ('HOURS' , 'Heures');
	define ('RANK' , 'Grade');
	define ('COUNTRY' , 'Pays');
	define ('STATUS' , 'Statut');
	define ('IVAOID' , 'ID IVAO');
	define ('VATSIMID' , 'ID VATSIM');

	// Fleet list
	define ('FLEET_VA' , 'Flotte');
	define ('FLEET_VA_LOC' , 'Avion à ');
	define ('FLEET_VA_TYPE' , 'Type d\'avion ');
	define ('REGISTRY' , 'Immatriculation');
	define ('TYPE' , 'Type');
	define ('LOCATION_PLANE' , 'Emplacement');
	define ('STATUS_PLANE' , 'Statut');
	define ('HOURS_PLANE' , 'Heures');
	define ('NAME_PLANE' , 'Nom');
	define ('BOOKED_PLANE' , 'Réservé');
	define ('PLANE_FREE' , 'Disponible');
	define ('PLANE_MAINTENANCE' , 'En maintenance');
	define ('PLANE_BOOKED' , 'Réservé');
	define ('INFO_PLANE' , 'Information');

	// Routes list
	define ('ROUTES_VA' , 'Lignes');
	define ('FLIGHT_VA' , 'Vol');
	define ('DEPARTURE' , 'Départ');
	define ('ARRIVAL' , 'Arrivée');
	define ('DEPARTURE_TIME' , 'Heure de départ');
	define ('ARRIVAL_TIME' , 'Heure d\'arrivée');
	define ('ROUTE_PLANE' , 'Type avion');

	// Pilot Register form
	define ('REGISTER_FORM' , 'INSCRIPTION');
	define ('PILOT_NAME_REG_FORM' , 'Prénom :');
	define ('PILOT_LASTNAME_REG_FORM' , 'Nom de famille :');
	define ('PILOT_BIRTHDATE_REG_FORM' , 'Date de naissance :');
	define ('PILOT_IVAOID_REG_FORM' , 'ID IVAO :');
	define ('PILOT_VATSIMID_REG_FORM' , 'ID VATSIM :');
	define ('PILOT_COUNTRY_REG_FORM' , 'Pays :');
	define ('PILOT_LANGUAGE_REG_FORM' , 'Langue :');
	define ('PILOT_CITY_REG_FORM' , 'Ville :');
	define ('PILOT_HUB_REG_FORM' , 'Hub :');
	define ('PILOT_EMAIL_REG_FORM' , 'Email :');
	define ('PILOT_PASSWORD_REG_FORM' , 'Mot de passe :');
	define ('PILOT_CONFIRMPASSWORD_FORM' , 'Confirmation du mot de passe :');
	define ('PILOT_COMMENTS_REG_FORM' , 'Commentaires :');
	define ('BUTTONSUBMIT_REG_FORM' , 'Inscription');
	define ('PILOT_NAME_PLACEHOLER_REG_FORM' , 'Entrez votre prénom');
	define ('PILOT_LASTNAME_PLACEHOLER_REG_FORM' , 'Entrez votre nom de famille');
	define ('PILOT_BIRTHDATE_PLACEHOLER_REG_FORM' , 'Entrez votre date de naissance');
	define ('PILOT_IVAOID_PLACEHOLER_REG_FORM' , 'Entrez votre IVAO ID');
	define ('PILOT_VATSIMID_PLACEHOLER_REG_FORM' , 'Entrez votre ID VATSIM');
	define ('PILOT_CITY_PLACEHOLER_REG_FORM' , 'Entrez votre ville');
	define ('PILOT_EMAIL_PLACEHOLER_REG_FORM' , 'Entrez votre adresse mail');
	define ('PILOT_PASSWORD_PLACEHOLER_REG_FORM' , 'Entrez votre mot de passe');
	define ('PILOT_COMMENTS_PLACEHOLER_REG_FORM' , 'Entrez vos commentaires');
	define ('READ_RULES' , 'J\'ai lu et j\'approuve les règles de la VA.');

	// Pilot Register Succesfull Page (index.php?page=pilot_insert)

	define ('REGISTER_SUCCESSFUL' , 'Inscription correcte');
	define ('REGISTER_SUCCESSFUL_MSG' , 'Nous avons reçu votre inscription et nous la traiterons dans les 24h !
Vous recevrez un nouvel email une fois que nous aurons validé votre inscription. (Assurez-vous que votre boîte mail accepte les emails de admin@virtualairlinesmanager.net - si vous ne recevez aucun email, vérifiez dans vos spams.)');

	define ('REGISTER_WRONG' , 'Inscription incorrecte');
	define ('REGISTER_WRONG_MSG' , 'Il existe un pilote avec la même adresse mail.');
	define ('REGISTER_CLOSED_MSG' , 'Le recrutement est actuellement fermé. Revenez régulièrement sur le site pour être informé de la ré-ouverture du recrutement.');

	// Password Recover
	define ('FORGOT_PASSWORD' , 'Mot de passe oublié');
	define ('PILOT_CALLSIGN_PASSWORD_FORM' , 'Callsign:');
	define ('PILOT_CALLSIGN_PLACEHOLDER_PASSWORD_FORM' , 'Entrez votre Callsign');
	define ('PILOT_EMAIL_PASSWORD_FORM' , 'Email:');
	define ('PILOT_EMAIL_PLACEHOLDER_PASSWORD_FORM' , 'Entrez votre adresse mail');
	define ('BUTTONSUBMIT_PASSWORD_FORM' , 'Mot de passe oublié');
	define ('PASSWORD_RESET_WRONG' , 'Réinitialiser le mot de passe');
	define ('PASSWORD_RESET_WRONG_MSG' , 'Callsign ou adresse mail incorrect');
	define ('PASSWORD_RESET_OK' , 'Réinitialiser le mot de passe');
	define ('PASSWORD_RESET_OK_MSG' , 'Le nouveau mot de passe a été envoyé à votre adresse mail.');
	// Home Page (index.php)
	define ('WELCOME_VA' , 'Bienvenue chez ');
	define ('FLIGHT_NETWORKS' , 'RÉSEAUX DE VOLS');
	define ('TWEETS' , 'TWEETS');

	// Home Page LAST FLIGTS grid
	define ('LATEST_FLIGHTS_VA' , 'DERNIERS VOLS');
	define ('LF_CALLSIG' , 'Callsign');
	define ('LF_PILOT' , 'Pilote');
	define ('LF_DEPARTURE' , 'Départ');
	define ('LF_ARRIVAL' , 'Arrivée');
	define ('LF_FLIGHTDATE' , 'Date');
	define ('LF_FLIGHTTIME' , 'Temps de vol');

	// Home Page STATICS grid
	define ('STATISTICS_VA' , 'STATISTIQUES');
	define ('ST_NUMPILOTS' , 'Pilotes');
	define ('ST_NUMPLANES' , 'Avions dans la flotte');
	define ('ST_NUMROUTES' , 'Lignes');
	define ('ST_NUMFLIGHTS' , 'Nombre total de vols');
	define ('ST_NUMCHARTER' , 'Nombre total de vols charters');
	define ('ST_NUMREGULAR' , 'Nombre total de vols réguliers');
	define ('ST_PERREGULAR' , '% de vols réguliers');

	// Home Page NEWEST PILOTS grid
	define ('NEWEST_PILOTS_VA' , 'NOUVEAUX PILOTES');
	define ('NEWPILOT' , 'Pilotes');
	define ('NEWJOINED' , 'Rejoint');


	// Home Page NOTAMS grid
	define ('NOTAMS_VA' , 'NOTAMS');
	define ('NOTAM_NAME' , 'NOTAM');
	define ('NOTAM_DATE' , 'Date');

	// Home Page FUTURE EVENTS grid
	define ('FUTURE_EVENTS' , 'Événements futurs');
	define ('EVENT_NAME' , 'Événement');
	define ('EVENT_DATE' , 'Date');


	// NOTAM table
	define ('NOTAM' , 'NOTAM');
	define ('NOTAM_NAME_PANEL' , 'Nom du NOTAM');
	define ('NOTAM_CREATE_DATE' , 'Date de création du NOTAM');
	define ('NOTAM_PUBLISH_DATE' , 'Date de publication du NOTAM');
	define ('NOTAM_TEXT' , 'Texte du NOTAM');

	// EVENT table
	define ('EVENT' , 'Événement');
	define ('EVENT_NAME_PANEL' , 'Nom de l\'événement');
	define ('EVENT_CREATE_DATE' , 'Date de création de l\'événement');
	define ('EVENT_PUBLISH_DATE' , 'Date de publication l\'événement');
	define ('EVENT_TEXT' , 'Texte de l\'événement');


	// Pilot page
	define ('PILOT_PROFILE' , 'PROFIL');
	define ('PILOT_STATICS' , 'STATISTIQUES PERSONNELLES');
	define ('PILOT_CERTIFICATIONS' , 'CERTIFICATIONS DU PILOTE');
	define ('PILOT_NAME' , 'Nom :');
	define ('PILOT_CALLSIGN' , 'Callsign :');
	define ('PILOT_COUNTRY' , 'Pays :');
	define ('PILOT_CITY' , 'Ville :');
	define ('PILOT_HUB' , 'Hub :');
	define ('PILOT_LOCATION' , 'Localisation :');
	define ('PILOT_RANK' , 'Grade :');
	define ('PILOT_SALARY' , 'Salaire par heure :');
	define ('PILOT_MONEY' , 'Argent :');
	define ('PILOT_REGISTERDATE' , 'Date d\'inscription :');
	define ('PILOT_FLIGHTS' , 'Nombre total de vols :');
	define ('PILOT_HOURS' , 'Nombre total d\'heures :');
	define ('PILOT_FLIGHTSREGULAR' , 'Vols réguliers :');
	define ('PILOT_FLIGHTSCHARTER' , 'Vols charters :');
	define ('PILOT_DISTANCE' , 'Distance :');
	define ('PILOT_PERFLIGHTREGULAR' , '% de vol réguliers :');
	define ('PILOT_MANUALREPORT' , 'Rapports de vols manuels :');
	define ('PILOT_FSKEEPERREPORT' , 'Rapports de vols de FS Keeper :');
	define ('PILOT_FSACARSREPORT' , 'Rapports de vol de FS Acars :');
	define ('PILOT_VAMACARSREPORT' , 'VAM Acars reports:');
	define ('PILOT_FLIGTH_MAP' , 'CARTE DES 10 DERNIERS VOLS');
	define ('PILOT_FLIGTHS' , 'VOLS');
	define ('PILOT_FLIGTHS_DEP' , 'Départ');
	define ('PILOT_FLIGTHS_ARR' , 'Arrivée');
	define ('PILOT_FLIGTHS_DATE' , 'Date');
	define ('PILOT_FLIGTHS_DUR' , 'Durée');
	define ('PILOT_FLIGTHS_DIST' , 'Distance');
	define ('PILOT_FLIGTHS_TYPE' , 'Type');
	define ('PILOT_FLIGTHS_VALI' , 'Validation');
	define ('PILOT_FLIGTHS_DETAILS' , 'Détails');

	// FSACARS LOG page
	define ('FSACARS_TRACK' , 'RAPPORT DE VOL');
	define ('FSACARS_PARAMETER' , 'Paramètres');
	define ('FSACARS_VALUE' , 'Valeur');
	define ('FSACARS_DEPARTURE' , 'Départ :');
	define ('FSACARS_ARRIVAL' , 'Arrivée :');
	define ('FSACARS_FLIGHTYPE' , 'Type de vol :');
	define ('FSACARS_FLIGHT_CHARTER' , 'Charter');
	define ('FSACARS_FLIGHT_REGULAR' , 'Régulier');
	define ('FSACARS_STATUS_VALIDATED' , 'Validé');
	define ('FSACARS_STATUS_NOVALIDATED' , 'En attente de validation');
	define ('FSACARS_STATUS_REJECTED' , 'Refusé');
	define ('FSACARS_STATUS' , 'Statut :');
	define ('FSACARS_DATE' , 'Date :');
	define ('FSACARS_DURATION' , 'Durée :');
	define ('FSACARS_PLANETYPE' , 'Type avion :');
	define ('FSACARS_FUEL' , 'Carburant :');
	define ('FSACARS_DISTANCE' , 'Distance :');
	define ('FSACARS_TOUCHDOWN' , 'Taux d\'atterrisage :');
	define ('FSACARS_LOG' , 'Log :');

	// FSKEEPER LOG page
	define ('FSKEEPER_TRACK' , 'RAPPORT DE VOL');
	define ('FSKEEPER_PILOT' , 'Pilote :');
	define ('FSKEEPER_AIRCRAFT' , 'Avion :');
	define ('FSKEEPER_DISTANCE' , 'Distance :');
	define ('FSKEEPER_DEPARTURE' , 'Départ :');
	define ('FSKEEPER_ARRIVAL' , 'Arrivée :');
	define ('FSKEEPER_TIME' , 'Durée :');
	define ('FSKEEPER_DEPARTURE_SID' , 'SID :');
	define ('FSKEEPER_DEPARTURE_RWY' , 'Départ piste :');
	define ('FSKEEPER_DEPARTURE_TRANS' , 'Altitude de transition départ :');
	define ('FSKEEPER_ARRIVAL_SID' , 'STAR:');
	define ('FSKEEPER_ARRIVAL_RWY' , 'Arrivée piste :');
	define ('FSKEEPER_ARRIVAL_TRANS' , 'Altitude de transition arrivée :');
	define ('FSKEEPER_ZFW' , 'ZFW :');
	define ('FSKEEPER_BFUEL' , 'Carburant consommé :');
	define ('FSKEEPER_FFUEL' , 'Carburant consommé en vol :');
	define ('FSKEEPER_VALIDATED' , 'Validé :');
	define ('FSKEEPER_TYPE' , 'Type :');
	define ('FSKEEPER_REGISTRY' , 'Immatriculation de l\'avion :');
	define ('FSKEEPER_FLIGHT_CHARTER' , 'Charter');
	define ('FSKEEPER_FLIGHT_REGULAR' , 'Régulier');
	define ('FSKEEPER_STATUS_VALIDATED' , 'Validé');
	define ('FSKEEPER_STATUS_NOVALIDATED' , 'En attente de validation');
	define ('FSKEEPER_STATUS_REJECTED' , 'Refusé');
	define ('FSKEEPER_PASSENGERS' , 'Passagers :');
	define ('FSKEEPER_CARGO' , 'Cargo :');
	define ('FSKEEPER_ALTERNATE' , 'Aéroport de déroutement :');
	define ('FSKEEPER_LANDVS' , 'VS atterrissage :');
	define ('FSKEEPER_LANDIAS' , 'IAS atterrissage :');
	define ('FSKEEPER_SCORE' , 'Score de vol :');
	define ('FSKEEPER_LANDING_ANALYSIS' , 'ANALYSE ATTERRISSAGE');
	define ('FSKEEPER_ROUTE' , 'ROUTE');
	define ('FSKEEPER_CRITIQUE' , 'FSKEEPER CRITIQUE');
	define ('FSKEEPER_MAPS' , 'CARTE DU VOL');

	// Pilot options
	define ('PILOT_ACTIONS' , 'ACTIONS');
	define ('OPTION_MAIL' , 'Message privé');
	define ('OPTION_ROUTE_RESERVE' , 'Réserver une ligne');
	define ('OPTION_CHANGE_LOCATION' , 'Changer d\'emplacement');
	define ('OPTION_BANK' , 'Mes finances');
	define ('OPTION_MANUAL_PIREP' , 'Rapport de vol manuel');
	define ('OPTION_PROFILE' , 'Changer le profil');
	define ('OPTION_STATS' , 'Mes statistiques');
	define ('OPTION_VA_PARAMETER' , 'Paramètres de la VA');
	define ('OPTION_DOWNLOADS' , 'Téléchargements');

	// VA Parameters
	define ('VA_PARAMETERS' , 'PARAMÈTRES DE LA VA');
	define ('PARAMETER' , 'Paramètre');
	define ('VALUE' , 'Valeur');
	define ('COST_SHORT_JUMP' , 'Coût d\'un court jumpseat :');
	define ('COST_MEDIUM_JUMP' , 'Coût d\'un moyen jumpseat :');
	define ('COST_LONG_JUMP' , 'Coût d\'un long jumpseat :');
	define ('PLANE_STATUS_MAINTENANCE' , 'Avions entrent en maintenance à un statut de % :');
	define ('LANDING_RATE_CRASH' , 'Taux d\'atterrissage considéré comme un crash :');
	define ('STATUS_LOST_1' , 'Statut de l\'avion perdu quand le taux d\'atterrissage est entre 0 ft/min et -');
	define ('STATUS_LOST_2' , 'Statut de l\'avion perdu quand le taux d\'atterrissage est entre -');
	define ('AND_STRING' , ' et -');
	define ('MINIMUN_AIRCRAFT_WEAR' , 'Statut de l\'avion perdu lors de chaque vol :');
	define ('AIRCRAFT_MAINTENANCE_DURATION' , 'Durée de la maintenance d\'un avion :');
	define ('AIRCRAFT_REPARATION_DURATION' , 'Durée de la réparation d\'un avion après un crash :');
	define ('PENALTY_IN_CRASH' , 'Pénalité économique en cas de crash :');
	define ('SALARY_PER_HOUR_FOR_YOUR_RANK' , 'Salaire par heure basé sur le grade :');
	define ('SALARY_REDUCTION_CHARTER' , 'Réduction de salaire pour les vols charters :');
	define ('DAYS' , ' jours');

	// My Bank
	define ('FINANCIAL_TRANSACTIONS' , 'TRANSACTIONS FINANCIÈRES');
	define ('BANK_DATE' , 'Date');
	define ('BANK_AMOUNT' , 'Montant');
	define ('BANK_REASON' , 'Changement d\'emplacement / Vol');
	define ('BANK_TOTAL_MONEY' , 'Argent total : ');


	// Book a route
	define ('AVAILABLE_ROUTES' , 'LIGNES DISPONIBLES');
	define ('ROUTES_BOOKED' , 'AVION ACTUEL & LIGNE RÉSERVÉE');
	define ('AVAILABLE_AIRCRAFT' , 'AVIONS DISPONIBLES');
	define ('BOOK_ROUTE_FLIGHT' , 'Vol');
	define ('BOOK_ROUTE_DEPARTURE' , 'Départ');
	define ('BOOK_ROUTE_ARRIVAL' , 'Arrivée');
	define ('BOOK_ROUTE_ALTERNATIVE' , 'Alternative');
	define ('BOOK_ROUTE_TIME_DEP' , 'Heure Dep.');
	define ('BOOK_ROUTE_TIME_ARR' , 'Heure Arr.');
	define ('BOOK_ROUTE_INFORMATION' , 'Information');
	define ('BOOK_ROUTE_ARICRAFT_TYPE' , 'Type d\'avion');
	define ('BOOK_ROUTE_ARICRAFT_REG' , 'Immatriculation de l\'avion');
	define ('BOOK_ROUTE_ARICRAFT_STATUS' , 'Statut de l\'avion');
	define ('BOOK_ROUTE_ARICRAFT_BOOK' , 'Réserver un avion');
	define ('BOOK_ROUTE_ARICRAFT_BOOK_MSG' , 'Avion réservé');
	define ('BOOK_ROUTE_CANCEL_BTN' , ' Annuler la réservation');
	define ('BOOK_ROUTE_CANCEL' , ' Annuler');
	define ('BOOK_ROUTE_CONFIRM' , 'Réservation effectuée avec succès. La réservation sera automatiquement annulée dans 24h.');
	define ('BOOK_ROUTE_CONFIRMATION' , 'CONFIRMATION');

	// Change Location
	define ('LOCATION_CHANGE' , 'CHANGEMENT EMPLACEMENT');
	define ('LOCATION_CHANGE_LOCATION' , 'Emplacement :');
	define ('LOCATION_CHANGE_BTN' , 'Changer');

	// Manual Pirep
	define ('MANUAL_PIREP' , 'RAPPORT DE VOL MANUEL');
	define ('MANUAL_PIREP_DATE' , 'Date :');
	define ('MANUAL_PIREP_DATE_PH' , 'Entrez la date');
	define ('MANUAL_PIREP_DEP' , 'Départ :');
	define ('MANUAL_PIREP_DEP_PH' , 'Entrez le départ');
	define ('MANUAL_PIREP_ARR' , 'Arrivée :');
	define ('MANUAL_PIREP_ARR_PH' , 'Entrez l\'arrivée');
	define ('MANUAL_PIREP_TIME' , 'Temps de vol :');
	define ('MANUAL_PIREP_TIME_PH' , 'Entrez le temps de vol');
	define ('MANUAL_PIREP_DISTANCE' , 'Distance :');
	define ('MANUAL_PIREP_DISTANCE_PH' , 'Entez la distance');
	define ('MANUAL_PIREP_FUEL' , 'Carburant :');
	define ('MANUAL_PIREP_FUEL_PH' , 'Entrez le carburant');
	define ('MANUAL_PIREP_AIRCRAFT' , 'Avion :');
	define ('MANUAL_PIREP_COMMENT' , 'Commentaires :');
	define ('MANUAL_PIREP_COMMENT_PH' , 'Entrez les commentaires');
	define ('MANUAL_PIREP_FLIGHT_TYPE' , 'Type de vol :');
	define ('MANUAL_PIREP_REG' , 'Régulier');
	define ('MANUAL_PIREP_CHARTER' , 'Charter');
	define ('MANUAL_PIREP_SUBMIT_BTN' , 'Envoyer');
	define ('MANUAL_PIREP_EDIT_BTN' , 'Éditer');
	define ('MANUAL_PIREP_CANCEL_BTN' , 'Annuler');
	define ('MANUAL_PIREP_CONFIRM_BTN' , 'Confirmer');

	// Flights done by a plane plane_info_public.php
	define ('AIRCRAFT_FLIGHTS' , 'VOLS POUR AVION AVEC IMMATRICULATION ');
	define ('AIRCRAFT_FLIGHTS_DATE' , 'Date');
	define ('AIRCRAFT_FLIGHTS_PILOT' , 'Pilote');
	define ('AIRCRAFT_FLIGHTS_CALLSIGN' , 'Callsign');
	define ('AIRCRAFT_FLIGHTS_FLIGHT' , 'Vol');
	define ('AIRCRAFT_FLIGHTS_DEP' , 'Départ');
	define ('AIRCRAFT_FLIGHTS_ARR' , 'Arrivée');
	define ('AIRCRAFT_FLIGHTS_DISTANCE' , 'Distance');
	define ('AIRCRAFT_FLIGHTS_FUEL' , 'Carburant');

	// Change location jump_request.php
	define ('CHANGE_LOCATION' , 'CHANGER D\'EMPLACEMENT');
	define ('CHANGE_LOCATION_ICAO' , 'Aéroport (OACI): ');
	define ('CHANGE_LOCATION_SUBMIT_BTN' , 'Changer');

	// MY PROFILE myprofile.php
	define ('MY_PROFILE' , 'MON PROFIL');
	define ('MY_PROFILE_UPDATE_BTN' , 'Mettre à jour');
	define ('MY_PROFILE_UPDATED' , 'Votre profil a été mis à jour');


	// INTERNAL MAIL mails.php
	define ('MAILS' , 'MESSAGES PRIVÉS');
	define ('MAILS_NEW' , 'NOUVEAU MESSAGE');
	define ('MAILS_REPLY' , 'RÉPONDRE A UN MESSAGE');
	define ('MAILS_DATE' , 'Date');
	define ('MAILS_FROM' , 'De');
	define ('MAILS_SUBJECT' , 'Objet');
	define ('MAILS_SUBJECT_PH' , 'Entrez l\'objet');
	define ('MAILS_ACTIONS' , 'Actions');
	define ('MAILS_NEW_MESSAGE_LNK' , ' Nouveau message');
	define ('MAILS_NEW_TO' , 'A');
	define ('MAILS_MESSAGE' , 'Message');
	define ('MAILS_MESSAGE_PH' , 'Entrez le message');
	define ('MAILS_SEND_BTN' , 'Envoyer');

	// STATISTICS

	define ('STATISTICS' , 'STATISTIQUES');
	define ('STATISTICS_PERCENTAGE_REG_VS_CHARTER' , 'POURCENTAGE DE CHARTER VS RÉGULIER');
	define ('STATISTICS_PERCENTAGE_BY_REPORT_TYPE' , 'POURCENTAGE PAR TYPE DE RAPPORT');
	define ('STATISTICS_PERCENTAGE_BY_AIRCRAFT_TYPE' , 'POURCENTAGE PAR TYPE AVION');
	define ('STATISTICS_NUMBER_FLIGTH_CURRENT_MONTH' , 'NOMBRE DE VOLS PAR JOUR PENDANT LE MOIS ACTUEL');
	define ('STATISTICS_TOP5_HOUR' , 'TOP 5 DES PILOTES PAR HEURES');
	define ('STATISTICS_TOP5_FLIGTH' , 'TOP 5 DES PILOTES PAR VOLS');
	define ('STATISTICS_TOP5_LANDING' , 'TOP 5 DES ATTERRISSAGES');
	define ('STATISTICS_TOP5_ROUTES' , 'TOP 5 DES LIGNES');
	define ('STATISTICS_CALLSIGN' , 'Callsign');
	define ('STATISTICS_PILOT' , 'Pilote');
	define ('STATISTICS_HOURS' , 'Heures');
	define ('STATISTICS_FLIGHTS' , 'Vols');
	define ('STATISTICS_TOUCH' , 'Touché (ft/min)');
	define ('STATISTICS_ROUTE' , 'Ligne');

	// strings used index pilot
	define ('INDEX_PILOT_MANUAL' , 'Manuel');
	define ('INDEX_PILOT_KEEPER' , 'FS Kepper');
	define ('INDEX_PILOT_FSACARS' , 'FS ACARS');
	define ('INDEX_PILOT_REGULAR' , 'Régulier');
	define ('INDEX_PILOT_CHARTER' , 'Charter');
	define ('INDEX_PILOT_COMMENT' , 'Commentaire');

	// User not recognized

	define ('INDEX_NO_USER' , 'Session clôturée. Utilisateur ou mot de passe invalide');


	// Administration options
	define ('ADM_PARA' , 'Paramètres de la VA');
	define ('ADM_HUB_MGR' , 'Gestion des hubs');
	define ('ADM_FLEET_TYPE_MGR' , 'Types de flotte');
	define ('ADM_FLEET_MGR' , 'Gestion de la flotte');
	define ('ADM_PILOT_RANK_MGR' , 'Gestion des rangs');
	define ('ADM_PILOT_MGR' , 'Gestion des pilotes');
	define ('ADM_ROUTE_MGR' , 'Gestion des routes');
	define ('ADM_ROUTE_FLEET_MGR' , 'Assignation des lignes');
	define ('ADM_USER_TYPE_MGR' , 'Types d\'utilisateurs');
	define ('ADM_JUMP_MGR' , 'Validation des jumpseats');
	define ('ADM_FLIGHT_MGR' , 'Validation des vols');
	define ('ADM_NOTAM_MGR' , 'Gestion des NOTAMS');
	define ('ADM_EVENT_MGR' , 'Gestion des événements');
	define ('ADM_EMAIL_MGR' , 'Gestion des emails');
	define ('ADM_LANGUAGES_MGR' , 'Gestion des langues');
	define ('ADM_ACARS_MGR' , 'ACARS Parameters');
	define ('ADM_NEW_MODULE_MGR' , 'Nouveau module');


	// Validate flights
	define ('VALIDATE_FLIGHTS' , 'VALIDATION DES VOLS');
	define ('VALIDATE_CALLSIGN' , 'Callsign');
	define ('VALIDATE_DEPARTURE' , 'Départ');
	define ('VALIDATE_ARRIVAL' , 'Arrivée');
	define ('VALIDATE_DATE' , 'Date');
	define ('VALIDATE_DURATION' , 'Durée');
	define ('VALIDATE_DISTANCE' , 'Distance');
	define ('VALIDATE_TYPE' , 'Type');
	define ('VALIDATE_LOG' , 'Log');
	define ('VALIDATE_REGULAR' , 'Régulier');
	define ('VALIDATE_CHARTER' , 'Charter');
	define ('VALIDATE_ACTION' , 'Action');
	define ('VALIDATE_FLIGHT_REGULAR' , 'Vol régulier  ');
	define ('VALIDATE_FLIGHT_CHARTER' , 'Vol charter  ');

	// Validate jumps
	define ('VALIDATE_JUMPS' , 'VALIDATION DES JUMPSEATS');
	define ('VALIDATE_JUMP_CALLSIGN' , 'Callsign');
	define ('VALIDATE_JUMP_DEPARTURE' , 'Départ');
	define ('VALIDATE_JUMP_ARRIVAL' , 'Arrivée');
	define ('VALIDATE_JUMP_DATE' , 'Date');
	define ('VALIDATE_JUMP_JUMP1' , 'Type de jumpseat 1');
	define ('VALIDATE_JUMP_JUMP2' , 'Type de jumpseat 2');
	define ('VALIDATE_JUMP_JUMP3' , 'Type de jumpseat 3');
	define ('VALIDATE_JUMP' , 'Jump ');


	// VAM ACARS
	define ('VAMACARS_SIMACARS' , 'SIMACARS REPORT');
	define ('VAMACARS_FLITGH_DETAILS' , 'FLITGH DÉTAILS');
	define ('VAMACARS_LANDANALYSIS' , 'ANALYSE D ATTERRISSAGE');
	define ('VAMACARS_ROUTE' , 'ROUTE');
	define ('VAMACARS_REMARKS' , 'REMARKS');
	define ('VAMACARS_DETAILS' , 'DÉTAILS');
	define ('VAMACARS_STATUS_VALIDATION' , 'Validation');
	define ('VAMACARS_STATUS_VALIDATED' , 'Validé');
	define ('VAMACARS_STATUS_REJECTED' , 'Rejeté');
	define ('VAMACARS_STATUS_NOVALIDATED' , 'En attente de validation');
	define ('VAMACARS_TYPE' , 'Type');
	define ('VAMACARS_FLIGHT_CHARTER' , 'Charter');
	define ('VAMACARS_FLIGHT_REGULAR' , 'Regular');
	define ('VAMACARS_REGISTRY' , 'Enregistrement');
	define ('VAMACARS_ZFW' , 'ZFW');
	define ('VAMACARS_BFUEL' , 'Block Fuel');
	define ('VAMACARS_FFUEL' , 'Flight Fuel');
	define ('VAMACARS_PASSENGERS' , 'Passagers');
	define ('VAMACARS_CARGO' , 'Cargaison');
	define ('VAMACARS_ALTERNATE1' , 'Aalterné');
	define ('VAMACARS_WEIGHTUNIT' , 'Unité de Poids');
	define ('VAMACARS_DATE' , 'DATE');
	define ('VAMACARS_DEPARTURE' , 'Départ');
	define ('VAMACARS_ARRIVAL' , 'Arrivée');
	define ('VAMACARS_DURATION' , 'Durée');
	define ('VAMACARS_DISTANCE' , 'DISTANCE');
	define ('VAMACARS_DEP_TIME' , 'Heure de départ');
	define ('VAMACARS_CRUISE_SPEED' , 'Vitesse de croisière');
	define ('VAMACARS_FLIGHT_LEVEL' , 'Niveau de vol');
	define ('VAMACARS_FLIGHT_TYPE' , 'Type de vol');
	define ('VAMACARS_AIRCRAFT_TYPE' , 'Type d aéronef');
	define ('VAMACARS_COMMENTS' , 'Pilotes Commentaires');
	define ('VAMACARS_NETWORK' , 'Réseau');
	define ('VAMACARS_DATEDETAIL' , 'Date');
	define ('VAMACARS_FUELCONSUMED' , 'Carburant consommé');
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
	define ('VAMACARS_FUEL_USED' , 'CARBURANT CONSOMMÉ');
	define ('VAMACARS_OAT' , 'OAT');
	define ('VAMACARS_FLIGHTSTATUS' , 'ÉTAT DU VOL');
	define ('VAMACARS_VAM_MAP' , 'FLIGHT CARTE');
	define ('VAMACARS_EVENTS' , 'ÉVÉNEMENTS');
	define ('VAMACARS_MAIN_EVENTS' , 'ÉVÉNEMENTS PRINCIPAUX');
	define ('VAMACARS_ACARS_DATA' , 'ACARS DATA');
	define ('VAMACARS_HEADING' , 'HEADING');
	define ('VAMACARS_FLIGHT_STATUS' , 'ÉTAT DU VOL');
	define ('VAMACARS_CRITICAL_EVENTS' , 'ÉVÉNEMENTS CRITIQUES');
	define ('VAMACARS_VAM_CHART' , 'CARTE D ALTITUDE');
	
	// Downloads
	define ('DOWNLOADS' , 'TÉLÉCHARGEMENTS');
	define ('DOWNLOAD_NAME' , 'NOM');
	define ('DOWNLOAD_LINK' , 'LINK');

	// VAM 2.3 BEGIN
	define ('VAMACARS_VALIDATION_COMMENTS' , 'COMMENTAIRES DE VALIDATION');
	define ('VAMACARS_VALIDATION_COMMENT' , 'COMMENTAIRE');
	define ('VAMACARS_FLIGHT_RATING' , 'Note vol');
	define ('VAMACARS_CRASH' , 'Crashed');
	define ('VAMACARS_VALIDATOR_COMMENTS' , 'Évaluateur Commentaires');
	define ('VAMACARS_VALIDATION_ADD_COMMENT' , 'Ajouter un commentaire');
	define ('VAMACARS_VALIDATION_ACCEPT' , 'Accepter');
	define ('VAMACARS_VALIDATION_REJECT' , 'Rejeter');	
	define ('VAMACARS_NO' , 'No');
	define ('VAMACARS_YES' , 'Oui');
	define ('VAMACARS_OK' , 'OK');
	define ('VAMACARS_FAIL' , 'Échouer');	
	define ('VAMACARS_FLIGHTFAILURES' , 'PANNES DE VOL');
	define ('VAMACARS_BEACONOFFENGINEON' , 'Beacon off & Engine Running');
	define ('VAMACARS_IAS1000' , 'KIAS Above 250  below 10000 FT');
	define ('VAMACARS_LIGHTBELOW1000' , 'Lights OFF below 10000 FT');
	define ('VAMACARS_LIGHTABOVE1000' , 'Lights ON above 10000 FT');
	define ('VAMACARS_STALL' , 'Stall');
	define ('VAMACARS_OVERSPEED' , 'Overspeed');
	define ('VAMACARS_PAUSE' , 'Vol pause');
	define ('VAMACARS_REFUEL' , 'Ravitaillement');
	define ('VAMACARS_SLEW' , 'Slew détecté');
	define ('VAMACARS_TAXILIGHTS' , 'Taxi & Taxi lights off');
	define ('VAMACARS_TAKEOFFLIGHTSOFF' , 'Take off & lights off');
	define ('VAMACARS_LANDINGLIGHTSOFF' , 'Landing & lights off');
	define ('VAMACARS_NOTARRIVED' , 'Landed à l aéroport pas prévu' );
	define ('VAMACARS_NUMFAILURES' , 'Nombre d  échecs');
	define ('VAMACARS_TAXISPEED' , 'Taxi Speed');
	define ('PILOT_FSKEEPER_VALIDATOR' , 'COMMENTAIRES VALIDATEUR & NOTE VOL');
	define ('MANUAL_PIREP_VALIDATOR_COMMENTS' , 'Commentaires Validator:');
	define ('MANUAL_PIREP_VALIDATION' , 'Validation:');
	define ('MANUAL_PIREP_VALIDATION_DATE' , 'Date de validation:');
	define ('MANUAL_PIREP__STATUS_VALIDATED' , 'Validé');
	define ('MANUAL_PIREP__STATUS_NOVALIDATED' , 'En attente de validation');
	define ('MANUAL_PIREP__STATUS_REJECTED' , 'Rejeté');

	// VAM 2.4 BEGIN

	define ('AIRPORT_AIRPORT_METAR' , 'METAR ET TAF INFORMATION');
	define ('AIRPORT_AIRPORT_MAP' , 'AÉROPORT DE AÉROPORT');
	define ('AIRPORT_AIRPORT_FREQUENCIES' , 'AÉROPORT FRÉQUENCES');
	define ('AIRPORT_AIRPORT_NAVAIDS' , 'SIDA DE NAVIGATION');
	define ('AIRPORT_AIRPORT_NAVAIDS_TYPE' , 'Type');
	define ('AIRPORT_AIRPORT_NAVAIDS_NAME' , 'Nom');
	define ('AIRPORT_AIRPORT_NAVAIDS_FREQ' , 'Féquence');
	define ('AIRPORT_RUNWAY_INFO' , 'INFORMATIONS DE PISTE');
	define ('AIRPORT_RUNWAY' , 'Piste');
	define ('AIRPORT_RUNWAY_LENGTH' , 'Longueur de la piste');
	define ('AIRPORT_RUNWAY_WIDTH' , 'Largeur de la piste');
	define ('AIRPORT_RUNWAY_ELEVATION' , 'Élévation de la piste');
	define ('AIRPORT_RUNWAY_THRESHOLD' , 'Seuil de la piste déplacés');
	define ('AIRPORT_RUNWAY_HEADING' , 'Runway heading');
	define ('BOOK_ROUTE_INFO' , 'INFORMATIONS SUR L ITINÉRAIRE');
	define ('BOOK_ROUTE_DURATION' , 'Durée');
	define ('BOOK_ROUTE_ROUTE' , 'Itinéraire');
	define ('BOOK_ROUTE_PRICE' , 'Prix');
	define ('BOOK_ROUTE_COMMENTS' , 'Commentaires');
	define ('ROUTES_VA_SEARCHER', 'Route recherche');
	define ('VAMACARS_VALIDATION_DELETE','Supprimer Vol');
	define ('PILOT_RECEIVE_EMAILS','Voulez-vous recevoir des e-mails?');

	// VAM 2.5
	define ('AIRCRAFT_DETAILS' , 'DÉTAILS D AVIONS');
	define ('AIRCRAFT_DETAILS_PAX' , 'Nombre de PAX');
	define ('AIRCRAFT_DETAILS_MAX_RANGE' , 'La portée maximale');
	define ('AIRCRAFT_DETAILS_CARGO' , 'Capacité de chargement');
	define ('AIRCRAFT_DETAILS_LENGTH' , 'Longueur de l avion');
	define ('AIRCRAFT_DETAILS_MZFW' , 'Maximum zero-fuel weight (MZFW)');
	define ('AIRCRAFT_DETAILS_MLW' , 'Maximum landing weight (MLW)');
	define ('AIRCRAFT_DETAILS_MTOW' , 'Maximum takeoff weight (MTOW)');
	define ('AIRCRAFT_DETAILS_CRUISE_SPEED' , 'Cruising speed');
	define ('AIRCRAFT_DETAILS_CEILING' , 'Service ceiling');
	define ('AIRCRAFT_DETAILS_CREW' , 'Membres d équipage');
	define ('HUB_DETAILS' , 'DÉTAILS HUB');
	define ('HUB_PILOTS' , 'PILOTES HUB');
	define ('HUB_FLEET' , 'HUB FLOTTE');
	define ('HUB_ROUTES' , 'ROUTES HUB');
	define ('HUB_MAP_LOCATION' , 'ROUTES CARTE');
	define ('HUB_NAME' , 'Nom');
	define ('HUB_WEB' , 'Site Internet');
	define ('HUB_NUM_PILOTS' , 'Nombre de pilotes');
	define ('HUB_NUM_FLEET' , 'Nombre d appareils');
	define ('HUB_NUM_ROUTES' , 'Nombre de routes');
	define ('ADM_TOUR_MODULE_MGR' , 'Tour Manager');
	define ('ADM_FINANTIAL_MODULE_MGR' , 'Manager financier');
	define ('OPERATIONS' , 'Opérations');
	define ('HUBS' , 'Hubs');
	define ('TOURS' , 'Tours');
	define ('PILOT_RANKS' , 'Rangs pilotes');
	define ('AWARDS' , 'Prix');
	define ('TOURS_VA' , 'TOURS');
	define ('TOURS_ACTIVE' , 'TOURS ACTIFS');
	define ('TOURS_INACTIVE' , 'TOURS INACTIVES');
	define ('TOUR_DETAILS' , 'TOUR DETAILS');
	define ('TOUR_LEGS' , 'ÉTAPES DU TOUR');
	define ('TOURS_STATUS' , 'Validé');
	define ('TOURS_AWARD' , 'Médaille');
	define ('TOURS_IMAGE' , 'Image');
	define ('TOURS_NUM_LEGS' , 'Nombre d étapes');
	define ('TOURS_LEG_STATUS' , 'Étape statut');
	define ('TOURS_NUM_LEGS_ACCEPTED' , 'Nombre d étapes accepté');
	define ('TOURS_NUM_LEGS_REPORTED' , 'Nombre d étapes signalé');
	define ('TOURS_LEGS_REPORT' , 'Étape du rapport');
	define ('TOURS_DISTANCE' , 'Distance');
	define ('TOURS_NAME' , 'Tour');
	define ('TOURS_START_DATE' , 'Date de début');
	define ('TOURS_END_DATE' , 'Date de fin');
	define ('TOURS_ROUTE_INFO' , 'Route & Commentaires');
	define ('TOURS_ROUTE' , 'Route');
	define ('TOURS_COMMENTS' , 'Commentaires');
	define ('TOURS_LEG_REPORT' , 'Étape du rapport');
	define ('TOURS_VALIDATION' , 'TOURS ÉTAPE VALIDATION');
	define ('TOURS_LEG' , 'Étape');
	define ('PILOT_IMAGEUPLOADER_FORM' , 'Pilot Image Uploader');
	define ('PILOT_AWARDS' , 'PRIX POUR LES PILOTES');
	define ('PILOT_TOURS' , 'PILOTES TOURS');
	define ('ADM_AWARDS_MGR' , 'Awards manager');
	define ('ADM_AWARDS_PILOR_MGR' , 'Awards assig.');

	define ('VAMACARS_LANDINGQNH' , 'Wrong altimeter in Landing');
	define ('VAMACARS_TAKEOFFQNH' , 'Wrong altimeter in Take off');
	define ('LAND_WIND' , 'Landing wind');
	define ('LAND_HDG' , 'Landing heading');
	define ('OPTION_TOUR' , 'Signaler votre jambe');
	define ('AWARDS_PANEL' , 'PRIX');
	define ('AWARD_NAME' , 'Nom Prix');
	define ('AWARD_IMG' , 'Prix Image');
	define ('RANK_PANEL' , 'RANGS');
	define ('RANK_IMAGE' , 'Rang Image');
	define ('RANK_MIN_HOURS' , 'Heures minimales');
	define ('RANK_MAX_HOURS' , 'Heures maximum');
	// NEW STATS
	define ('ST_MONTH' , 'Mois');
	define ('ST_YEAR' , 'An');
	define ('STATISTICS_PILOT_HOURS_YEAR_MONTH' , 'HEURES PAR ANNÉE ET LE MOIS');
	define ('STATISTICS_PILOT_FLIGHTS_YEAR_MONTH' , 'VOLS PAR ANNÉE ET LE MOIS');
	define ('STATISTICS_FLIGHTS_AIRCRAFT_TYPE' , 'TOP 5 VOLS PAR TYPE D AÉRONEF');
	define ('STATISTICS_TOP5_AIRCRAFTS' , 'TOP 5 VOLS PAR AÉRONEF');
	// FINANCE MODULE
	define ('FLIGHT_FINANCES' , 'RAPPORT FINANCIER DE VOL');
	define ('VA_GLOBAL_FINANCES' , 'VA RAPPORT FINANCIER GLOBAL');
	define ('COSTS' , 'COÛTS');
	define ('INCOME' , 'REVENU');
	define ('INCOME_REGULAR_ROUTES' , 'REVENU LIGNES RÉGULIÈRES');
	define ('AIRCRAFT_PURCHASE' , 'L ACHAT D AVIONS');
	define ('FINANCE_BALANCE' , 'BALANCE DES FINANCES');
	define ('GLOBAL_FINANCES' , 'Rapport Financier');
	define ('COSTS_PILOTS_SALARY' , 'COSTS PILOTS SALARY');
	define ('COSTS_AIRCRAFT_REPAIR' , 'COSTS AIRCRAFT REPAIR');
	define ('COSTS_AIRCRAFT_MAINTENANCE' , 'COSTS AIRCRAFT MAINTENANCE');
	// LIVE MAP	
	define ('FLIGHT_STAGE' , 'Étape de vol');
	define ('PERC_DONE' , '% Terminé');
	define ('PENDING_NM' , 'NM miles attente');
	
?>