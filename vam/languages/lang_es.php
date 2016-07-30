<?php
	// NavBar options
	define ('ABOUT' , 'Sobre ');
	define ('PILOTS' , 'Pilotos');
	define ('FLEET' , 'Flota');
	define ('ROUTES' , 'Rutas');
	define ('STAFF' , 'Staff');
	define ('SCHOOL' , 'Escuela');
	define ('RULES' , 'Normativa');
	define ('REGISTER' , 'Regístrate');
	define ('FORUM' , 'Foro');
	define ('LANGUAGES' , 'Idioma');
	define ('LANGUAGE_ES' , 'Español');
	define ('LANGUAGE_EN' , 'English');
	define ('LANGUAGE_CS' , 'Čeština');
	define ('LANGUAGE_FR' , 'Français'); 

	// NavBar options user logged
	define ('MENU' , 'Acciones Piloto');
	define ('STATS' , 'Estadísticas');
	define ('ADMIN' , 'Administración');
	// Pilot Roster
	define ('PILOT_ROSTER' , 'Listado Pilotos  ');
	define ('CALLSIGN' , 'Indicativo');
	define ('NAME' , 'Nombre');
	define ('HUB' , 'Base');
	define ('LOCATION' , 'Localización');
	define ('HOURS' , 'Horas');
	define ('RANK' , 'Rango');
	define ('COUNTRY' , 'País');
	define ('STATUS' , 'Estado');
	define ('IVAOID' , 'IVAO ID');
	define ('VATSIMID' , 'VATSIM ID');

	// Fleet list
	define ('FLEET_VA' , 'Flota');
	define ('FLEET_VA_LOC' , 'Flota en  ');
	define ('FLEET_VA_TYPE' , 'Tipo de Aeronave ');
	define ('REGISTRY' , 'Matrícula');
	define ('TYPE' , 'Tipo');
	define ('LOCATION_PLANE' , 'Localización');
	define ('STATUS_PLANE' , 'Estado');
	define ('HOURS_PLANE' , 'Horas');
	define ('NAME_PLANE' , 'Nombre');
	define ('BOOKED_PLANE' , 'Reservado');
	define ('PLANE_FREE' , 'Libre');
	define ('PLANE_MAINTENANCE' , 'En mantenimiento');
	define ('PLANE_BOOKED' , 'Reservado');
	define ('INFO_PLANE' , 'Información');

	// Routes list
	define ('ROUTES_VA' , 'Rutas');
	define ('FLIGHT_VA' , 'Vuelo');
	define ('DEPARTURE' , 'Origen');
	define ('ARRIVAL' , 'Destino');
	define ('DEPARTURE_TIME' , 'Hora Salida');
	define ('ARRIVAL_TIME' , 'Hora Llegada');
	define ('ROUTE_PLANE' , 'Tipo Aeronave');

	// Pilot Register form
	define ('REGISTER_FORM' , 'ALTA DE PILOTO');
	define ('PILOT_NAME_REG_FORM' , 'Nombre:');
	define ('PILOT_LASTNAME_REG_FORM' , 'Apellidos:');
	define ('PILOT_BIRTHDATE_REG_FORM' , 'Fecha nacimiento:');
	define ('PILOT_IVAOID_REG_FORM' , 'IVAO ID:');
	define ('PILOT_VATSIMID_REG_FORM' , 'VATSIM ID:');
	define ('PILOT_COUNTRY_REG_FORM' , 'País:');
	define ('PILOT_LANGUAGE_REG_FORM' , 'Idioma:');
	define ('PILOT_CITY_REG_FORM' , 'Ciudad:');
	define ('PILOT_HUB_REG_FORM' , 'Hub:');
	define ('PILOT_EMAIL_REG_FORM' , 'Email:');
	define ('PILOT_PASSWORD_REG_FORM' , 'Contraseña:');
	define ('PILOT_CONFIRMPASSWORD_FORM' , 'Confirme Contraseña:');
	define ('PILOT_COMMENTS_REG_FORM' , 'Comentarios:');
	define ('BUTTONSUBMIT_REG_FORM' , 'Registrar');
	define ('PILOT_NAME_PLACEHOLER_REG_FORM' , 'Introduzca Nombre');
	define ('PILOT_LASTNAME_PLACEHOLER_REG_FORM' , 'Introduzca Apellidos');
	define ('PILOT_BIRTHDATE_PLACEHOLER_REG_FORM' , 'Introduzca Fecha nacimiento');
	define ('PILOT_IVAOID_PLACEHOLER_REG_FORM' , 'Introduzca IVAO ID');
	define ('PILOT_VATSIMID_PLACEHOLER_REG_FORM' , 'Introduzca VATSIM ID');
	define ('PILOT_CITY_PLACEHOLER_REG_FORM' , 'Introduzca Ciudad');
	define ('PILOT_EMAIL_PLACEHOLER_REG_FORM' , 'Introduzca Email');
	define ('PILOT_PASSWORD_PLACEHOLER_REG_FORM' , 'Introduzca Contraseña');
	define ('PILOT_COMMENTS_PLACEHOLER_REG_FORM' , 'Introduzca Comentarios');
	define ('READ_RULES' , 'He leido y acepto las normas de la Aerolínea');

	// Pilot Register Succesfull Page (index.php?page=pilot_insert)

	define ('REGISTER_SUCCESSFUL' , 'Registro correcto');
	define ('REGISTER_SUCCESSFUL_MSG' , 'Hemos recibido su solicitud de ingreso, procederemos a la validación en menos de 24 horas!
Recibirá un email una vez finalizada la validación. (Asegurese de poder recibir emails de admin@virtualairlinesmanager.net - si no recibe un correo, por favor revise la carpeta de SPAM en su correo.)');
	define ('REGISTER_CAPTCHA_MSG' , 'Captcha incorrecto, intente de nuevo el registro');	
	define ('REGISTER_WRONG' , 'Registro incorrecto');
	define ('REGISTER_WRONG_MSG' , 'Existe un piloto con el mismo email.');
	define ('REGISTER_CLOSED_MSG' , 'Actualmente está cubierto el cupo de pilotos. En el futuro abriremos nuevos procesos de alta de pilotos.');
	// Contraseña Recover
	define ('FORGOT_PASSWORD' , 'FORGOT PASSWORD');
	define ('PILOT_CALLSIGN_PASSWORD_FORM' , 'Indicativo:');
	define ('PILOT_CALLSIGN_PLACEHOLDER_PASSWORD_FORM' , 'Introduzca Callsign');
	define ('PILOT_EMAIL_PASSWORD_FORM' , 'Email:');
	define ('PILOT_EMAIL_PLACEHOLDER_PASSWORD_FORM' , 'Introduzca Email');
	define ('BUTTONSUBMIT_PASSWORD_FORM' , 'Solicitar Contraseña');
	define ('PASSWORD_RESET_WRONG' , 'Resetear contraseña');
	define ('PASSWORD_RESET_WRONG_MSG' , 'Callsign o email incorrecto');
	define ('PASSWORD_RESET_OK' , 'Resetear contraseña');
	define ('PASSWORD_RESET_OK_MSG' , 'La nueva contraseña ha sido enviada a su email.');
	// Home Page (index.php)
	define ('WELCOME_VA' , 'BIENVENIDO A  ');

	define ('FLIGHT_NETWORKS' , 'REDES DE VUELO');

	define ('TWEETS' , 'TWEETS');

	// Home Page LAST FLIGTS grid
	define ('LATEST_FLIGHTS_VA' , 'ÚLTIMOS VUELOS');
	define ('LF_CALLSIG' , 'Indicativo');
	define ('LF_PILOT' , 'Piloto');
	define ('LF_DEPARTURE' , 'Origen');
	define ('LF_ARRIVAL' , 'Destino');
	define ('LF_FLIGHTDATE' , 'Fecha');
	define ('LF_FLIGHTTIME' , 'Tiempo de vuelo');
	// Home Page STATICS grid
	define ('STATISTICS_VA' , 'ESTADÍSTICAS');
	define ('ST_NUMPILOTS' , 'Pilotos');
	define ('ST_NUMPLANES' , 'Aeronaves en flota');
	define ('ST_NUMROUTES' , 'Rutas');
	define ('ST_NUMFLIGHTS' , 'Vuelos totales');
	define ('ST_NUMCHARTER' , 'Vuelos Charter');
	define ('ST_NUMREGULAR' , 'Vuelos Regular');
	define ('ST_PERREGULAR' , '% Vuelos Regular');
	// Home Page NEWEST PILOTS grid
	define ('NEWEST_PILOTS_VA' , 'NUEVOS PILOTOS');
	define ('NEWPILOT' , 'Piloto');
	define ('NEWJOINED' , 'Fecha');
	// Home Page NOTAMS grid
	define ('NOTAMS_VA' , 'NOTAMS');
	define ('NOTAM_NAME' , 'NOTAM');
	define ('NOTAM_DATE' , 'Fecha');
	// Home Page FUTURE EVENTS grid
	define ('FUTURE_EVENTS' , 'PRÓXIMOS EVENTOS');
	define ('EVENT_NAME' , 'Evento');
	define ('EVENT_DATE' , 'Fecha');
	// NOTAM table
	define ('NOTAM' , 'NOTAM');
	define ('NOTAM_NAME_PANEL' , 'NOTAM');
	define ('NOTAM_CREATE_DATE' , 'NOTAM Fecha de creación');
	define ('NOTAM_PUBLISH_DATE' , 'NOTAM Fecha de publicación');
	define ('NOTAM_TEXT' , 'Texto NOTAM');
	// EVENT table
	define ('EVENT' , 'EVENTO');
	define ('EVENT_NAME_PANEL' , 'Nombre del evento');
	define ('EVENT_CREATE_DATE' , 'Fecha de creación');
	define ('EVENT_PUBLISH_DATE' , 'Fecha de publicación');
	define ('EVENT_TEXT' , 'Descripción del evento');
	// Pilot page
	define ('PILOT_PROFILE' , 'PERFIL');
	define ('PILOT_STATICS' , 'ESTADÍSTICAS PERSONALES');
	define ('PILOT_CERTIFICATIONS' , 'CERTIFICACIONES DE AERONAVES');
	define ('PILOT_NAME' , 'Nombre:');
	define ('PILOT_CALLSIGN' , 'Indicativo:');
	define ('PILOT_COUNTRY' , 'País:');
	define ('PILOT_CITY' , 'Ciudad:');
	define ('PILOT_HUB' , 'Hub:');
	define ('PILOT_LOCATION' , 'Localización:');
	define ('PILOT_RANK' , 'Rango:');
	define ('PILOT_SALARY' , 'Salario por hora:');
	define ('PILOT_MONEY' , 'Dinero:');
	define ('PILOT_REGISTERDATE' , 'Fecha de registro:');
	define ('PILOT_FLIGHTS' , 'Vuelos totales:');
	define ('PILOT_HOURS' , 'Horas totales:');
	define ('PILOT_FLIGHTSREGULAR' , 'Vuelos Regulares:');
	define ('PILOT_FLIGHTSCHARTER' , 'Vuelos Charter:');
	define ('PILOT_DISTANCE' , 'Distancia:');
	define ('PILOT_PERFLIGHTREGULAR' , '% Vuelos Regulares:');
	define ('PILOT_MANUALREPORT' , 'Pireps manuales:');
	define ('PILOT_FSKEEPERREPORT' , 'Pireps FS Keeper:');
	define ('PILOT_FSACARSREPORT' , 'Pireps FS Acars:');
	define ('PILOT_VAMACARSREPORT' , 'VAM Acars:');
	define ('PILOT_FLIGTH_MAP' , 'MAPA 10 ÚLTIMOS VUELOS');
	define ('PILOT_FLIGTHS' , 'VUELOS');
	define ('PILOT_FLIGTHS_DEP' , 'Origen');
	define ('PILOT_FLIGTHS_ARR' , 'Destino');
	define ('PILOT_FLIGTHS_DATE' , 'Fecha');
	define ('PILOT_FLIGTHS_DUR' , 'Duración');
	define ('PILOT_FLIGTHS_DIST' , 'Distancia');
	define ('PILOT_FLIGTHS_TYPE' , 'Tipo');
	define ('PILOT_FLIGTHS_VALI' , 'Validación');
	define ('PILOT_FLIGTHS_DETAILS' , 'Detalles');
	// FSACARS LOG page
	define ('FSACARS_TRACK' , 'REGISTRO DE VUELO');
	define ('FSACARS_PARAMETER' , 'Parámetro');
	define ('FSACARS_VALUE' , 'Valor');
	define ('FSACARS_DEPARTURE' , 'Origen:');
	define ('FSACARS_ARRIVAL' , 'Destino:');
	define ('FSACARS_FLIGHTYPE' , 'Tipo de vuelo:');
	define ('FSACARS_FLIGHT_CHARTER' , 'Charter');
	define ('FSACARS_FLIGHT_REGULAR' , 'Regular');
	define ('FSACARS_STATUS_VALIDATED' , 'Validado');
	define ('FSACARS_STATUS_NOVALIDATED' , 'Pendiente validación');
	define ('FSACARS_STATUS_REJECTED' , 'Rechazado');
	define ('FSACARS_STATUS' , 'Estado:');
	define ('FSACARS_DATE' , 'Fecha:');
	define ('FSACARS_DURATION' , 'Duración:');
	define ('FSACARS_PLANETYPE' , 'Tipo aeronave:');
	define ('FSACARS_FUEL' , 'Combustible:');
	define ('FSACARS_DISTANCE' , 'Distancia:');
	define ('FSACARS_TOUCHDOWN' , 'VS aterrizaje:');
	define ('FSACARS_LOG' , 'Log:');
	// FSKEEPER LOG page
	define ('FSKEEPER_TRACK' , 'REGISTRO DE VUELO');
	define ('FSKEEPER_PILOT' , 'Piloto:');
	define ('FSKEEPER_AIRCRAFT' , 'Aeronave:');
	define ('FSKEEPER_DISTANCE' , 'Distancia:');
	define ('FSKEEPER_DEPARTURE' , 'Origen:');
	define ('FSKEEPER_ARRIVAL' , 'Destino:');
	define ('FSKEEPER_TIME' , 'Duración:');
	define ('FSKEEPER_DEPARTURE_SID' , 'SID:');
	define ('FSKEEPER_DEPARTURE_RWY' , 'Pista origen:');
	define ('FSKEEPER_DEPARTURE_TRANS' , 'Origen TA:');
	define ('FSKEEPER_ARRIVAL_SID' , 'STAR:');
	define ('FSKEEPER_ARRIVAL_RWY' , 'Pista destino:');
	define ('FSKEEPER_ARRIVAL_TRANS' , 'Destino TA:');
	define ('FSKEEPER_ZFW' , 'ZFW:');
	define ('FSKEEPER_BFUEL' , 'Combustible total:');
	define ('FSKEEPER_FFUEL' , 'Combustible en vuelo:');
	define ('FSKEEPER_VALIDATED' , 'Estado Validación:');
	define ('FSKEEPER_TYPE' , 'Tipo:');
	define ('FSKEEPER_REGISTRY' , 'Matrícula aeronave:');
	define ('FSKEEPER_FLIGHT_CHARTER' , 'Charter');
	define ('FSKEEPER_FLIGHT_REGULAR' , 'Regular');
	define ('FSKEEPER_STATUS_VALIDATED' , 'Validado');
	define ('FSKEEPER_STATUS_NOVALIDATED' , 'Pendiente Validación');
	define ('FSKEEPER_STATUS_REJECTED' , 'Rechazado');
	define ('FSKEEPER_PASSENGERS' , 'Pasajeros:');
	define ('FSKEEPER_CARGO' , 'Cargo:');
	define ('FSKEEPER_ALTERNATE' , 'Aeropuerto alternativo:');
	define ('FSKEEPER_LANDVS' , 'VS aterrizaje:');
	define ('FSKEEPER_LANDIAS' , 'IAS aterrizaje:');
	define ('FSKEEPER_SCORE' , 'Puntuación del vuelo:');
	define ('FSKEEPER_LANDING_ANALYSIS' , 'ANÁLISIS DEL ATERRIZAJE');
	define ('FSKEEPER_ROUTE' , 'RUTA');
	define ('FSKEEPER_CRITIQUE' , 'CRÍTICA FSKEEPER');
	define ('FSKEEPER_MAPS' , 'MAPAS DEL TRACK');
	// Pilot options
	define ('PILOT_ACTIONS' , 'ACCIONES');
	define ('OPTION_MAIL' , 'Correo interno');
	define ('OPTION_ROUTE_RESERVE' , 'Reservar ruta/vuelo');
	define ('OPTION_CHANGE_LOCATION' , 'Cambiar localización');
	define ('OPTION_BANK' , 'Mis finanzas');
	define ('OPTION_MANUAL_PIREP' , 'Reportar vuelo manual');
	define ('OPTION_PROFILE' , 'Mi perfil');
	define ('OPTION_STATS' , 'Mis estadísticas');
	define ('OPTION_VA_PARAMETER' , 'Parámetros de la VA');
	define ('OPTION_DOWNLOADS' , 'Descargas');
	// VA Parameters
	define ('VA_PARAMETERS' , 'PARÁMETROS DE LA VA');
	define ('PARAMETER' , 'Parámetro');
	define ('VALUE' , 'Valor');
	define ('COST_SHORT_JUMP' , 'Coste cambio localización pequeño:');
	define ('COST_MEDIUM_JUMP' , 'Coste cambio localización medio:');
	define ('COST_LONG_JUMP' , 'Coste cambio localización largo:');
	define ('PLANE_STATUS_MAINTENANCE' , 'Aeronaves entran en mantenimiento con estado (%):');
	define ('LANDING_RATE_CRASH' , 'Velocidad vertical en aterrizaje considerado accidente:');
	define ('STATUS_LOST_1' , 'Desgaste de aeronave con velocidad vertical de aterrizaje entre 0 ft/min y -');
	define ('STATUS_LOST_2' , 'Desgaste de aeronave con velocidad vertical de aterrizaje entre -');
	define ('AND_STRING' , ' y -');
	define ('MINIMUN_AIRCRAFT_WEAR' , 'Desgaste de aeronave en cada vuelo:');
	define ('AIRCRAFT_MAINTENANCE_DURATION' , 'Duración mantenimiento de aeronave:');
	define ('AIRCRAFT_REPARATION_DURATION' , 'Duración reparación de aeronave:');
	define ('PENALTY_IN_CRASH' , 'Penalización económica en caso de accidente:');
	define ('SALARY_PER_HOUR_FOR_YOUR_RANK' , 'Salario por hora de vuelo según su rango:');
	define ('SALARY_REDUCTION_CHARTER' , 'Porcentaje de reducción de salario en caso de vuelo charter:');
	define ('DAYS' , ' días');
	// My Bank
	define ('FINANCIAL_TRANSACTIONS' , 'TRANSACCIONES FINANCIERAS');
	define ('BANK_DATE' , 'Fecha');
	define ('BANK_AMOUNT' , 'Cantidad');
	define ('BANK_REASON' , 'Cambio localización / Vuelo');
	define ('BANK_TOTAL_MONEY' , 'Saldo: ');
	// Book a route
	define ('AVAILABLE_ROUTES' , 'RUTAS DISPONIBLES EN TU UBICACIÓN');
	define ('ROUTES_BOOKED' , 'RUTA Y AERONAVE ACTUALMENTE RESERVADA');
	define ('AVAILABLE_AIRCRAFT' , 'AERONAVES DISPONIBLES');
	define ('BOOK_ROUTE_FLIGHT' , 'Vuelos');
	define ('BOOK_ROUTE_DEPARTURE' , 'Origen');
	define ('BOOK_ROUTE_ARRIVAL' , 'Destino');
	define ('BOOK_ROUTE_ALTERNATIVE' , 'Alternativo');
	define ('BOOK_ROUTE_TIME_DEP' , 'Salida');
	define ('BOOK_ROUTE_TIME_ARR' , 'Llegada');
	define ('BOOK_ROUTE_INFORMATION' , 'Información');
	define ('BOOK_ROUTE_ARICRAFT_TYPE' , 'Tipo Aeronave');
	define ('BOOK_ROUTE_ARICRAFT_REG' , 'Matrícula Aeronave ');
	define ('BOOK_ROUTE_ARICRAFT_STATUS' , 'Estado Aeronave');
	define ('BOOK_ROUTE_ARICRAFT_BOOK' , 'Aeronave Reservada');
	define ('BOOK_ROUTE_ARICRAFT_BOOK_MSG' , 'Aeronave Reservada');
	define ('BOOK_ROUTE_CANCEL_BTN' , ' Cancelar Reserva');
	define ('BOOK_ROUTE_CANCEL' , ' Cancelar');
	define ('BOOK_ROUTE_CONFIRM' , 'Reserva confirmada. La reserva será cancelada en 24 horas.');
	define ('BOOK_ROUTE_CONFIRMATION' , 'CONFIRMACIÓN');
	// Change Location
	define ('LOCATION_CHANGE' , 'CAMBIO DE LOCALIZACIÓN');
	define ('LOCATION_CHANGE_LOCATION' , 'Localización:');
	define ('LOCATION_CHANGE_BTN' , 'Cambiar');
	// Manual Pirep
	define ('MANUAL_PIREP' , 'PIREP MANUAL ');
	define ('MANUAL_PIREP_DATE' , 'Fecha:');
	define ('MANUAL_PIREP_DATE_PH' , 'Introduzca Fecha');
	define ('MANUAL_PIREP_DEP' , 'Origen:');
	define ('MANUAL_PIREP_DEP_PH' , 'Introduzca Origen');
	define ('MANUAL_PIREP_ARR' , 'Destino:');
	define ('MANUAL_PIREP_ARR_PH' , 'Introduzca Destino');
	define ('MANUAL_PIREP_TIME' , 'Tiempo de vuelo:');
	define ('MANUAL_PIREP_TIME_PH' , 'Introduzca Tiempo de vuelo');
	define ('MANUAL_PIREP_DISTANCE' , 'Distancia:');
	define ('MANUAL_PIREP_DISTANCE_PH' , 'Introduzca Distancia');
	define ('MANUAL_PIREP_FUEL' , 'Combustible:');
	define ('MANUAL_PIREP_FUEL_PH' , 'Introduzca Combustible');
	define ('MANUAL_PIREP_AIRCRAFT' , 'Aeronave:');
	define ('MANUAL_PIREP_COMMENT' , 'Comentarios:');
	define ('MANUAL_PIREP_COMMENT_PH' , 'Introduzca Comentarios');
	define ('MANUAL_PIREP_FLIGHT_TYPE' , 'Tipo de Vuelo:');
	define ('MANUAL_PIREP_REG' , 'Regular');
	define ('MANUAL_PIREP_CHARTER' , 'Charter');
	define ('MANUAL_PIREP_SUBMIT_BTN' , 'Reportar');
	define ('MANUAL_PIREP_EDIT_BTN' , 'Edit');
	define ('MANUAL_PIREP_CANCEL_BTN' , 'Cancelar');
	define ('MANUAL_PIREP_CONFIRM_BTN' , 'Confirmar');
	// Flights done by a plane plane_info_public.php
	define ('AIRCRAFT_FLIGHTS' , 'VUELOS REALIADOS POR LA AERONAVE CON MATRÍCULA  ');
	define ('AIRCRAFT_FLIGHTS_DATE' , 'Fecha');
	define ('AIRCRAFT_FLIGHTS_PILOT' , 'Piloto');
	define ('AIRCRAFT_FLIGHTS_CALLSIGN' , 'Callsign');
	define ('AIRCRAFT_FLIGHTS_FLIGHT' , 'Vuelos');
	define ('AIRCRAFT_FLIGHTS_DEP' , 'Origen');
	define ('AIRCRAFT_FLIGHTS_ARR' , 'Destino');
	define ('AIRCRAFT_FLIGHTS_DISTANCE' , 'Distancia');
	define ('AIRCRAFT_FLIGHTS_FUEL' , 'Combustible');
	// Change location jump_request.php
	define ('CHANGE_LOCATION' , 'CAMBIO DE LOCALIZACIÓN');
	define ('CHANGE_LOCATION_ICAO' , 'Aeropuerto (ICAO): ');
	define ('CHANGE_LOCATION_SUBMIT_BTN' , 'Cambiar');
	// MY PROFILE myprofile.php
	define ('MY_PROFILE' , 'MI PERFIL');
	define ('MY_PROFILE_UPDATE_BTN' , 'Actualizar');
	define ('MY_PROFILE_UPDATED' , 'Tu perfil ha sido actualizado');
	// INTERNAL MAIL mails.php
	define ('MAILS' , 'MENSAJERIA INTERNA');
	define ('MAILS_NEW' , 'NUEVO MENSAJE');
	define ('MAILS_REPLY' , 'RESPUESTA AL MENSAJE');
	define ('MAILS_DATE' , 'Fecha');
	define ('MAILS_FROM' , 'De');
	define ('MAILS_SUBJECT' , 'Asunto');
	define ('MAILS_SUBJECT_PH' , 'Escriba el asunto');
	define ('MAILS_ACTIONS' , 'Acción');
	define ('MAILS_NEW_MESSAGE_LNK' , ' Nuevo mensaje');
	define ('MAILS_NEW_TO' , 'Para');
	define ('MAILS_MESSAGE' , 'Mensaje');
	define ('MAILS_MESSAGE_PH' , 'Escriba el mensaje');
	define ('MAILS_SEND_BTN' , 'Enviar');
	// STATISTICS

	define ('STATISTICS' , 'ESTADÍSTICAS');
	define ('STATISTICS_PERCENTAGE_REG_VS_CHARTER' , 'PORCENTAJE CHARTER & REGULAR');
	define ('STATISTICS_PERCENTAGE_BY_REPORT_TYPE' , 'PORCENTAJE POR TIPO DE REPORTE');
	define ('STATISTICS_PERCENTAGE_BY_AIRCRAFT_TYPE' , 'PORCENTAJE POR TIPO DE AERONAVE');
	define ('STATISTICS_NUMBER_FLIGTH_CURRENT_MONTH' , 'NÚMERO DE VUELOS POR DÍA EN MES ACTUAL');
	define ('STATISTICS_TOP5_HOUR' , 'TOP 5 PILOTOS POR HORAS');
	define ('STATISTICS_TOP5_FLIGTH' , 'TOP 5 PILOTOS POR VUELOS');
	define ('STATISTICS_TOP5_LANDING' , 'TOP 5 LANDINGS');
	define ('STATISTICS_TOP5_ROUTES' , 'TOP 5 ROUTES');
	define ('STATISTICS_CALLSIGN' , 'Callsign');
	define ('STATISTICS_PILOT' , 'Piloto');
	define ('STATISTICS_HOURS' , 'Horas');
	define ('STATISTICS_FLIGHTS' , 'Vuelos');
	define ('STATISTICS_TOUCH' , 'Toma (ft/min)');
	define ('STATISTICS_ROUTE' , 'Ruta');
	// strings used index pilot
	define ('INDEX_PILOT_MANUAL' , 'Manual');
	define ('INDEX_PILOT_KEEPER' , 'FS Kepper');
	define ('INDEX_PILOT_FSACARS' , 'FS ACARS');
	define ('INDEX_PILOT_REGULAR' , 'Regular');
	define ('INDEX_PILOT_CHARTER' , 'Charter');
	define ('INDEX_PILOT_COMMENT' , 'Comentario');
	// User not recognized

	define ('INDEX_NO_USER' , 'Sesion cerrada. Usuario o password no válido');
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
	define ('ADM_LANGUAGES_MGR' , 'Language manager');
	define ('ADM_ACARS_MGR' , 'ACARS Parameters');
	define ('ADM_NEW_MODULE_MGR' , 'New module');
	// Validate flights
	define ('VALIDATE_FLIGHTS' , 'VALIDACIÓN DE VUELOS');
	define ('VALIDATE_CALLSIGN' , 'Callsign');
	define ('VALIDATE_DEPARTURE' , 'Origen');
	define ('VALIDATE_ARRIVAL' , 'Destino');
	define ('VALIDATE_DATE' , 'Fecha');
	define ('VALIDATE_DURATION' , 'Duración');
	define ('VALIDATE_DISTANCE' , 'Distancia');
	define ('VALIDATE_TYPE' , 'Tipo');
	define ('VALIDATE_LOG' , 'Log');
	define ('VALIDATE_REGULAR' , 'Regular');
	define ('VALIDATE_CHARTER' , 'Charter');
	define ('VALIDATE_ACTION' , 'Acción');
	define ('VALIDATE_FLIGHT_REGULAR' , 'Vuelo Regular ');
	define ('VALIDATE_FLIGHT_CHARTER' , 'Vuelo Charter ');
	// Validate jumps
	define ('VALIDATE_JUMPS' , 'VALIDACIÓN DE SALTOS');
	define ('VALIDATE_JUMP_CALLSIGN' , 'Callsign');
	define ('VALIDATE_JUMP_DEPARTURE' , 'Origen');
	define ('VALIDATE_JUMP_ARRIVAL' , 'Destino');
	define ('VALIDATE_JUMP_DATE' , 'Fecha');
	define ('VALIDATE_JUMP_JUMP1' , 'Salto tipo 1');
	define ('VALIDATE_JUMP_JUMP2' , 'Salto tipo 2');
	define ('VALIDATE_JUMP_JUMP3' , 'Salto tipo 3');
	define ('VALIDATE_JUMP' , 'Salto ');
	// VAM ACARS
	define ('VAMACARS_SIMACARS' , 'REPORTE VAM ACARS');
	define ('VAMACARS_FLITGH_DETAILS' , 'ÁNALISIS DEL VUELO');
	define ('VAMACARS_LANDANALYSIS' , 'ÁNALISIS DEL ATERRIZAJE');
	define ('VAMACARS_ROUTE' , 'RUTA');
	define ('VAMACARS_REMARKS' , 'REMARKS');
	define ('VAMACARS_DETAILS' , 'DETALLES');
	define ('VAMACARS_STATUS_VALIDATION' , 'Validación');
	define ('VAMACARS_STATUS_VALIDATED' , 'Validado');
	define ('VAMACARS_STATUS_REJECTED' , 'Rechazado');
	define ('VAMACARS_STATUS_NOVALIDATED' , 'Pendiente validación');
	define ('VAMACARS_TYPE' , 'Tipo');
	define ('VAMACARS_FLIGHT_CHARTER' , 'Charter');
	define ('VAMACARS_FLIGHT_REGULAR' , 'Regular');
	define ('VAMACARS_REGISTRY' , 'Matrícula');
	define ('VAMACARS_ZFW' , 'ZFW');
	define ('VAMACARS_BFUEL' , 'Consumo total');
	define ('VAMACARS_FFUEL' , 'Consumo en vuelo');
	define ('VAMACARS_PASSENGERS' , 'Pasajeros');
	define ('VAMACARS_CARGO' , 'Cargo');
	define ('VAMACARS_ALTERNATE1' , 'Alternativo');
	define ('VAMACARS_WEIGHTUNIT' , 'Unidades de peso');
	define ('VAMACARS_DATE' , 'FECHA');
	define ('VAMACARS_DEPARTURE' , 'Origen');
	define ('VAMACARS_ARRIVAL' , 'Destino');
	define ('VAMACARS_DURATION' , 'Duración');
	define ('VAMACARS_DISTANCE' , 'DISTANCIA');
	define ('VAMACARS_DEP_TIME' , 'Hora salida');
	define ('VAMACARS_CRUISE_SPEED' , 'Velocidad en crucero');
	define ('VAMACARS_FLIGHT_LEVEL' , 'Nivel de vuelo');
	define ('VAMACARS_FLIGHT_TYPE' , 'Tipo de vuelo');
	define ('VAMACARS_AIRCRAFT_TYPE' , 'Tipo de aeronave');
	define ('VAMACARS_COMMENTS' , 'Comentarios del piloto');
	define ('VAMACARS_NETWORK' , 'Red');
	define ('VAMACARS_DATEDETAIL' , 'Fecha');
	define ('VAMACARS_FUELCONSUMED' , 'COMBUSTIBLE CONSUMIDO');
	define ('VAMACARS_LANDING_PITCH' , 'Cabeceo');
	define ('VAMACARS_LANDING_BANK' , 'Alabaeo');
	define ('VAMACARS_LANDING_FLAPS' , 'Flaps');
	define ('VAMACARS_LANDING_FORCEG' , 'Fuerza G');
	define ('VAMACARS_LANDING_NAV' , 'Navigation Lights');
	define ('VAMACARS_LANDING_LDG' , 'Landing Lights');
	define ('VAMACARS_LANDING_STR' , 'Strobe Lights');
	define ('VAMACARS_LANDING_BEA' , 'Beacon Lights');
	define ('VAMACARS_IAS' , 'IAS');
	define ('VAMACARS_GS' , 'GS');
	define ('VAMACARS_ALTITUDE' , 'ALTITUD');
	define ('VAMACARS_FUEL_USED' , 'COMBUSTIBLE UTILIZADO');
	define ('VAMACARS_OAT' , 'OAT');
	define ('VAMACARS_FLIGHTSTATUS' , 'FASE DE VUELO');
	define ('VAMACARS_VAM_MAP' , 'MAPA DE VUELO');
	define ('VAMACARS_EVENTS' , 'EVENTO');
	define ('VAMACARS_MAIN_EVENTS' , 'PRINCIPALES EVENTOS');
	
	define ('VAMACARS_ACARS_DATA' , 'DATOS ACARS');
	define ('VAMACARS_HEADING' , 'RUMBO');
	define ('VAMACARS_FLIGHT_STATUS' , 'FASE DE VUELO');
	define ('VAMACARS_CRITICAL_EVENTS' , 'EVENTOS CRÍTICOS');
	define ('VAMACARS_VAM_CHART' , 'GRÁFICO DE ALTITUD');

	// Downloads
	define ('DOWNLOADS' , 'DESCARGAS');
	define ('DOWNLOAD_NAME' , 'NOMBRE');
	define ('DOWNLOAD_LINK' , 'LINK');

	// VAM 2.3 BEGIN
	define ('VAMACARS_VALIDATION_COMMENTS' , 'COMENTARIOS DE VALIDACIÓN');
	define ('VAMACARS_VALIDATION_COMMENT' , 'COMENTARIO');
	define ('VAMACARS_FLIGHT_RATING' , 'Calificación del vuelo');
	define ('VAMACARS_CRASH' , 'Accidente');	
	define ('VAMACARS_VALIDATOR_COMMENTS' , 'Comentarios del validador');
	define ('VAMACARS_VALIDATION_ADD_COMMENT' , 'Añadir comentario');
	define ('VAMACARS_VALIDATION_ACCEPT' , 'Aceptar');
	define ('VAMACARS_VALIDATION_REJECT' , 'Rechazar');	
	define ('VAMACARS_NO' , 'No');
	define ('VAMACARS_YES' , 'Si');
	define ('VAMACARS_OK' , 'OK');
	define ('VAMACARS_FAIL' , 'Fallo');	
	define ('VAMACARS_FLIGHTFAILURES' , 'FALLOS DE VUELO');
	define ('VAMACARS_BEACONOFFENGINEON' , 'Beacon off & Motores encendidos');
	define ('VAMACARS_IAS1000' , 'KIAS mayor 250 debajo 10000 FT');
	define ('VAMACARS_LIGHTBELOW1000' , 'Luces OFF debajo 10000 FT');
	define ('VAMACARS_LIGHTABOVE1000' , 'Luces ON por encima 10000 FT');
	define ('VAMACARS_STALL' , 'Stall');
	define ('VAMACARS_OVERSPEED' , 'Overspeed');
	define ('VAMACARS_PAUSE' , 'Pausa');
	define ('VAMACARS_REFUEL' , 'Refueling');
	define ('VAMACARS_SLEW' , 'Slew detectado');
	define ('VAMACARS_TAXILIGHTS' , 'Taxi con luces de taxi OFF');
	define ('VAMACARS_TAKEOFFLIGHTSOFF' , 'Depegue con Landing lights OFF');
	define ('VAMACARS_LANDINGLIGHTSOFF' , 'Aterrizaje con Landing lights OFF');
	define ('VAMACARS_NOTARRIVED' , 'Aterrizaje en aeropuerto no planeado');
	define ('VAMACARS_NUMFAILURES' , 'Númerod de fallos');
	define ('VAMACARS_TAXISPEED' , 'Taxi Speed');
	define ('PILOT_FSKEEPER_VALIDATOR' , 'COMENTARIOS DEL VALIDADOS');
	define ('MANUAL_PIREP_VALIDATOR_COMMENTS' , 'Comentarios del validador:');
	define ('MANUAL_PIREP_VALIDATION' , 'Validación:');
	define ('MANUAL_PIREP_VALIDATION_DATE' , 'Fechas de validación:');
	define ('MANUAL_PIREP__STATUS_VALIDATED' , 'Aceptado');
	define ('MANUAL_PIREP__STATUS_NOVALIDATED' , 'Pendiente de validación');
	define ('MANUAL_PIREP__STATUS_REJECTED' , 'Rechazado');
	

	// VAM 2.4 BEGIN

	define ('AIRPORT_AIRPORT_METAR' , 'INFORMACIÓN METAR y TAF');
	define ('AIRPORT_AIRPORT_MAP' , 'MAPA DE AEROPUERTO');
	define ('AIRPORT_AIRPORT_FREQUENCIES' , 'FRECUANCIAS DEL AEROPUERTO');
	define ('AIRPORT_AIRPORT_NAVAIDS' , 'RADIO AYUDAS DEL AEROPUERTO');
	define ('AIRPORT_AIRPORT_NAVAIDS_TYPE' , 'Tipo');
	define ('AIRPORT_AIRPORT_NAVAIDS_NAME' , 'Nombre');
	define ('AIRPORT_AIRPORT_NAVAIDS_FREQ' , 'Frecuencia');
	define ('AIRPORT_RUNWAY_INFO' , 'INFORMACIÓN DE PISTA');
	define ('AIRPORT_RUNWAY' , 'Pista');
	define ('AIRPORT_RUNWAY_LENGTH' , 'Longitud');
	define ('AIRPORT_RUNWAY_WIDTH' , 'Ancho');
	define ('AIRPORT_RUNWAY_ELEVATION' , 'Elevación');
	define ('AIRPORT_RUNWAY_THRESHOLD' , 'Umbral desplazado');
	define ('AIRPORT_RUNWAY_HEADING' , 'Rumbo de pista');
	define ('BOOK_ROUTE_INFO' , 'INFORMACIÓN DE RUTA');
	define ('BOOK_ROUTE_DURATION' , 'Duración');
	define ('BOOK_ROUTE_ROUTE' , 'Ruta');
	define ('BOOK_ROUTE_PRICE' , 'Precio');
	define ('BOOK_ROUTE_COMMENTS' , 'Comentarios');
	define ('ROUTES_VA_SEARCHER', 'Buscador de rutas');
	define ('VAMACARS_VALIDATION_DELETE','Borrar vuelo');
	define ('PILOT_RECEIVE_EMAILS','Quieres recibir emails?');

	// VAM 2.5
	define ('AIRCRAFT_DETAILS' , 'DETALLES DE LA AERONAVE');
	define ('AIRCRAFT_DETAILS_PAX' , 'Número de pasajeros');
	define ('AIRCRAFT_DETAILS_MAX_RANGE' , 'Autonomía');
	define ('AIRCRAFT_DETAILS_CARGO' , 'Capacidad carga');
	define ('AIRCRAFT_DETAILS_LENGTH' , 'Longitud aeronave');
	define ('AIRCRAFT_DETAILS_MZFW' , 'Maximum zero-fuel weight (MZFW)');
	define ('AIRCRAFT_DETAILS_MLW' , 'Maximum landing weight (MLW)');
	define ('AIRCRAFT_DETAILS_MTOW' , 'Maximum takeoff weight (MTOW)');
	define ('AIRCRAFT_DETAILS_CRUISE_SPEED' , 'Velocidad crucero');
	define ('AIRCRAFT_DETAILS_CEILING' , 'Máxima altitud');
	define ('AIRCRAFT_DETAILS_CREW' , 'Tripulación');
	define ('HUB_DETAILS' , 'DETALLES DEL HUB');
	define ('HUB_PILOTS' , 'PILOTOS DEL HUB');
	define ('HUB_FLEET' , 'FLOTA DEL HUB');
	define ('HUB_ROUTES' , 'RUTAS DEL HUB');
	define ('HUB_MAP_LOCATION' , 'MAPA DE RUTAS');
	define ('HUB_NAME' , 'Nombre');
	define ('HUB_WEB' , 'Web');
	define ('HUB_NUM_PILOTS' , 'Número de pilotos');
	define ('HUB_NUM_FLEET' , 'Número de aeronaves');
	define ('HUB_NUM_ROUTES' , 'Número de rutas');
	define ('ADM_TOUR_MODULE_MGR' , 'Gestor de Tours');
	define ('ADM_FINANTIAL_MODULE_MGR' , 'Gestor financiero');
	define ('OPERATIONS' , 'Operaciones');
	define ('HUBS' , 'Hubs');
	define ('TOURS' , 'Tours');
	define ('PILOT_RANKS' , 'Rango del piloto');
	define ('AWARDS' , 'Medallas');
	define ('TOURS_VA' , 'TOURS');
	define ('TOURS_ACTIVE' , 'TOURS ACTIVOS');
	define ('TOURS_INACTIVE' , 'TOURS INACTIVOS');
	define ('TOUR_DETAILS' , 'DETALLES DEL TOUR');
	define ('TOUR_LEGS' , 'ETAPAS DEL TOUR');
	define ('TOURS_STATUS' , 'Estado');
	define ('TOURS_AWARD' , 'Medalla');
	define ('TOURS_IMAGE' , 'Imagen');
	define ('TOURS_NUM_LEGS' , 'Num. Etapas');
	define ('TOURS_LEG_STATUS' , 'Estado de la etapa');
	define ('TOURS_NUM_LEGS_ACCEPTED' , 'Num. etapas aceptadas');
	define ('TOURS_NUM_LEGS_REPORTED' , 'Num. etapas reportadas');
	define ('TOURS_LEGS_REPORT' , 'Reportar etapa');
	define ('TOURS_DISTANCE' , 'Distancia');
	define ('TOURS_NAME' , 'Tour');
	define ('TOURS_START_DATE' , 'Fecha inicio');
	define ('TOURS_END_DATE' , 'Fecha fin');
	define ('TOURS_ROUTE_INFO' , 'Ruta y comentarios');
	define ('TOURS_ROUTE' , 'Ruta');
	define ('TOURS_COMMENTS' , 'Comentarios');
	define ('TOURS_LEG_REPORT' , 'Reportar etapa');
	define ('TOURS_VALIDATION' , 'VALIDACIÓN ETAPAS DE TOURS');
	define ('TOURS_LEG' , 'Etapa');
	define ('PILOT_IMAGEUPLOADER_FORM' , 'Imagen del piloto');
	define ('PILOT_AWARDS' , 'MEDALLAS DEL PILOTO');
	define ('PILOT_TOURS' , 'TOURS DEL PILOTO');
	define ('ADM_AWARDS_MGR' , 'Gestor de medallas');
	define ('ADM_AWARDS_PILOR_MGR' , 'Asignación medallas');
	
	define ('VAMACARS_LANDINGQNH' , 'Calado incorrecto en aterrizaje');
	define ('VAMACARS_TAKEOFFQNH' , 'Calado incorrecto en despegue');
	define ('LAND_WIND' , 'Viento en aterrizaje');
	define ('LAND_HDG' , 'Rumbo en aterrizaje');
	define ('OPTION_TOUR' , 'Reportar etapa');
	define ('AWARDS_PANEL' , 'MEDALLAS');
	define ('AWARD_NAME' , 'Medalla');
	define ('AWARD_IMG' , 'Imagen de Medalla');
	define ('RANK_PANEL' , 'RANGOS');
	define ('RANK_IMAGE' , 'Imagen de Rango');
	define ('RANK_MIN_HOURS' , 'Mínimo de horas del rango');
	define ('RANK_MAX_HOURS' , 'Máximo de horas del rango');
	// NEW STATS
	define ('ST_MONTH' , 'Mes');
	define ('ST_YEAR' , 'Año');
	define ('STATISTICS_PILOT_HOURS_YEAR_MONTH' , 'HORAS POR AÑO Y MES');
	define ('STATISTICS_PILOT_FLIGHTS_YEAR_MONTH' , 'VUELOS POR AÑO Y MES');
	define ('STATISTICS_FLIGHTS_AIRCRAFT_TYPE' , 'TOP 5 VUELOS POR TIPO DE AERONAVE');
	define ('STATISTICS_TOP5_AIRCRAFTS' , 'TOP 5 VUELOS POR  DE AERONAVE');
	// FINANCE MODULE
	define ('FLIGHT_FINANCES' , 'REPORTE FINANCIERO DEL VUELO');
	define ('VA_GLOBAL_FINANCES' , 'REPORTE FINANCIERO GLOBAL');
	define ('COSTS' , 'COSTES');
	define ('INCOME' , 'INGRESOS');
	define ('INCOME_REGULAR_ROUTES' , 'INGRESOS RUTAS REGULARES');
	define ('AIRCRAFT_PURCHASE' , 'COMPRA DE AERONAVES');
	define ('FINANCE_BALANCE' , 'BALANCE FINANCIERO');
	define ('GLOBAL_FINANCES' , 'Reporte financiero');
	define ('COSTS_PILOTS_SALARY' , 'COSTES SALARIALES');
	define ('COSTS_AIRCRAFT_REPAIR' , 'COSTES REPARACIÓN AERONAVES');
	define ('COSTS_AIRCRAFT_MAINTENANCE' , 'COSTES MANTENIMIENTO AERONAVES');	
	// LIVE MAP	
	define ('FLIGHT_STAGE' , 'Estado vuelo');
	define ('PERC_DONE' , '% Completado');
	define ('PENDING_NM' , 'Pendiente NM');
	
?>