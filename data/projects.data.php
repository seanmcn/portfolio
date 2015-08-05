<?php

$projects = array();

/* 
 * Motbot 
 */
$project      = array();
$achievements = array();

$achievements[] = "Used the FusionCharts Javascript library to create Gantt Charts providing management at Nokia / Microsoft with interactable dashboards for managing hardware testing.";
$achievements[] = "Extended the Motbot testing platform for phone carriers using PHP + mySQL. ";
$achievements[] = "Updated older parts of the software rewriting Javascript and PHP code.";
$achievements[] = "Tested and debugged new code in development, test and production environments.";
$achievements[] = "Created the Motbot website using BoltCMS on Silex/Symfony.";
$achievements[] = "Handled issues via Github, used GIT daily for code versioning. ";
$achievements[] = "Created user interfaces for the software using jQuery. ";
$achievements[] = "Removed old Javascript libraries from the project; script.aculo.us and PrototypeJS.";


$project['name']          = "Motbot";
$project['type']          = array( "PHP", "JS" );
$project['description']   = "An online application used by many global enterprises to organize and analyze their valuable hardware test data in real-time to increase their efficiency and improve their product quality.";
$project['achievements']  = $achievements;
$project['url']           = "http://www.motbot.com";
$project['github']        = "";
$project['technologies']  = array( "PHP", "JQUERY", "SILEX", "SYMFONY", "MYSQL", "HTML", "CSS" );
$project['code_snippets'] = array();
$project['keywords']      = array( "MOTBOT", "JAVASCRIPT", "CANADA" );
$project['image']         = "projects/motbot/1.png";
$project['main_image']    = "projects/motbot/main.png";
$project['year']          = "2014";
$projects[]               = $project;

/*
 * Model Next Door 
 */

$project      = array();
$achievements = array();

$achievements[] = "Re-brand of website 'Diva Next Door' to 'Model Next Door'";
$achievements[] = "Conversion of .PSD to LESS &amp; HTML Template";
$achievements[] = "Updated keywords &amp; opengraph meta tags.";
$achievements[] = "Created a 'finalists poll' system building on my existing Codeigniter 'Poll' module.";
$achievements[] = "Created a script to download certain tables from the database in CSV format periodically.";
$achievements[] = "Setup GIT for version control";

$project['name']          = "Model Next Door";
$project['type']          = array( "PHP", "JS" );
$project['description']   = "Ireland's Model Next Door is the newest and biggest reality model experience in Ireland.
A once-in-a-lifetime opportunity for men/women to enjoy the fun world of modeling and fashion in the public eye.";
$project['achievements']  = $achievements;
$project['url']           = "http://www.modelnextdoor.ie";
$project['github']        = "";
$project['technologies']  = array( "PHP", "JQUERY", "CODEIGNITER", "MYSQL", "HTML", "CSS", "LESS", "FUELCMS" );
$project['code_snippets'] = array( "66d20cb68110ccb3c0a5", "4e52ffa582175c362046" );
$project['keywords']      = array( "MND", "MODEL", "NEXT", "DOOR", "IRELAND" );
$project['image']         = "projects/modelnextdoor/1.png";
$project['main_image']    = "projects/modelnextdoor/main.png";
$project['year']          = "2014";

$projects[] = $project;

/*
 * Freelance Manager
 */
$project      = array();
$achievements = array();

$achievements[] = "Created for personal use with the intention of redistribution online at a later date.";
$achievements[] = "Used a MVC design pattern for creating modules";
$achievements[] = "Worked with generating .PDFs using PHP";
$achievements[] = "Created a time tracker using jQuery, PHP & mySQL";
$achievements[] = "Made use of 'TankAuth' to handle OpenID logins";
$achievements[] = "Used Bitbucket for private GIT version control";

$project['name']          = "Freelance Manager";
$project['type']          = array( "PHP", "JS" );
$project['description']   = "Freelance Manager is a client relationship manager which can be used to manage clients, projects, invoicing and accounting for freelancers.";
$project['achievements']  = $achievements;
$project['url']           = "";
$project['github']        = "";
$project['technologies']  = array( "PHP", "JQUERY", "CODEIGNITER", "MYSQL", "HTML", "CSS", "TANKAUTH" );
$project['code_snippets'] = array( "bf2c62a18d00b7f44866", "a11585c45d72f2df1faf" );
$project['keywords']      = array( "FREELANCE", "MANAGER", "CRM", "AUTH", "TANK", "MINE" );
$project['image']         = "projects/freelancemanager/1.png";
$project['main_image']    = "projects/freelancemanager/main.png";
$project['year']          = "2014";

$projects[] = $project;

/*
 * Diva Next Door
 */
$project = array();

$achievements = array();

$achievements[] = "Converted flat PHP website over to Codeigniter using an MVC design pattern";
$achievements[] = "Upgraded styles to use LESS for mobile friendly versions";
$achievements[] = "Created a polling system allowing administrators easy access to create and manage polls";
$achievements[] = "Converted user system over to Facebook and Twitter login to prevent multi-accounting";
$achievements[] = "Monitored polling preventing people trying to game the system";
$achievements[] = "Integrated Facebook commenting into news and features";
$achievements[] = "Created a custom feature and news system using FuelCMS";
$achievements[] = "Created an advertising module to allow sale of geographically targeted adverts.";
$achievements[] = "Managed CentOS web server using Putty and ISPConfig";
$achievements[] = "Added version control using GIT to the project";

$project['name']          = "Diva Next Door";
$project['type']          = array( "PHP" );
$project['description']   = "Ireland's first and biggest reality model search since 2006.
Featuring regularly in national press celebrating fun, fashion and lifestyle experiences through model starlets. 
Diva Next Door aren't running a model search anymore and recommend everyone to check out Ireland's Model Next Door.";
$project['achievements']  = $achievements;
$project['url']           = "http://www.divanextdoor.ie";
$project['github']        = "";
$project['technologies']  = array( "PHP", "JQUERY", "MYSQL", "HTML", "CSS", "FUELCMS", "CODEIGNITER" );
$project['code_snippets'] = array( "9f0088a913ff6434f525" );
$project['keywords']      = array( "DIVA", "DND", "NEXT", "DOOR", "IRELAND" );
$project['image']         = "projects/divanextdoor/1.png";
$project['main_image']    = "projects/divanextdoor/main.png";
$project['year']          = "2013";

$projects[] = $project;


/*
 * Coder
 */
$project = array();

$achievements = array();


$achievements[] = "Managed websites on a consistent basis providing support and upgrades.";
$achievements[] = "Setup mail and web servers for client's on VPS's running UNIX.";
$achievements[] = "PSD to HTML/CSS utilizing popular content management systems such as Wordpress, FuelCMS, WolfCMS and pyroCMS.";

$project['name']          = "Coder";
$project['type']          = array( "PHP" );
$project['description']   = "Web Development in Wordpress, Prestashop and PHP. <br /> If you can imagine it, we can build it!";
$project['achievements']  = $achievements;
$project['url']           = "http://www.coder.ie";
$project['github']        = "";
$project['technologies']  = array( "PHP", "JQUERY", "MYSQL", "WORDPRESS", "UNIX" );
$project['code_snippets'] = array();
$project['keywords']      = array( "IRELAND", "MINE", "CODER" );
$project['image']         = "projects/coder/1.png";
$project['main_image']    = "projects/coder/main.png";
$project['year']          = "2013";

$projects[] = $project;

/*
 * Irish Food Allergy Network
 */
$project = array();

$achievements = array();

$achievements[] = ".PSD converted to Wordpress Theme";
$achievements[] = "Created algorithm display using jQuery";
$achievements[] = "Created an 'education session' wordpress plugin to allow registration to education sessions.";

$project['name']          = "Irish Food Allergy Network";
$project['type']          = array( "PHP" );
$project['description']   = "A guide to assist those who, through their work, encounter children and families affected by food allergy. The guidelines contained on the site are intended for use by health care professionals. Their aim is to help in diagnosing suspected food allergy in the community and hospital.";
$project['achievements']  = $achievements;
$project['url']           = "http:/www.ifan.ie/";
$project['github']        = "";
$project['technologies']  = array( "PHP", "CSS", "HTML", "WORDPRESS" );
$project['code_snippets'] = array( "da227bc832efa3d9638e" );
$project['keywords']      = array( "IFAN", "GOV", "PSD", "PDF", "IRELAND" );
$project['image']         = "projects/ifan/1.png";
$project['main_image']    = "projects/ifan/main.png";
$project['year']          = "2013";

$projects[] = $project;

/*
 * Celtic Commemorations
 */
$project = array();

$achievements   = array();
$achievements[] = "Created a product customizer using jQuery that allows you to drag and drop images onto caskets/urns.";

$project['name']          = "Celtic Commemorations";
$project['type']          = array( "JS" );
$project['description']   = "Design and order personalized wooden funeral urns & wooden plaques online from our library of Celtic emblems.";
$project['achievements']  = $achievements;
$project['url']           = "http://www.celticcommemorations.com/";
$project['github']        = "";
$project['technologies']  = array( "JQUERY", "CSS", "HTML", "JQUERY-UI" );
$project['code_snippets'] = array( "3638884", "91518672fbfba8d9f0b9" );
$project['keywords']      = array( "CUSTOMISER", "UI", "CUSTOM", "IRELAND" );
$project['image']         = "projects/celticcommemorations/1.png";
$project['main_image']    = "projects/celticcommemorations/main.png";
$project['year']          = "2013";

$projects[] = $project;

/*
 * WNFC
 */
$project      = array();
$achievements = array();

$achievements[] = "Converted their old PHP website over to a Wordpress website";
$achievements[] = "Created Wordpress plugin to handle club events";
$achievements[] = "Created a Library wordpress plugin to show books the club recommends";

$project['name']          = "Wexford Nautralists";
$project['type']          = array( "PHP" );
$project['description']   = "The Wexford Naturalists Field Club was founded in October 2004 aided by a generous start-up grant from the Heritage Council, Ireland. The informative club caters for all levels of interest in the natural history of county Wexford and continues to flourish with an increasing number of keen members.";
$project['achievements']  = $achievements;
$project['url']           = "http://www.wexfordnaturalists.com/";
$project['github']        = "";
$project['technologies']  = array( "HTML", "CSS", "PHP", "WORDPRESS" );
$project['code_snippets'] = array();
$project['keywords']      = array( "WNFC", "WEXFORD", "NATURALISTS", "IRELAND" );
$project['image']         = "projects/wnfc/1.png";
$project['main_image']    = "projects/wnfc/main.png";
$project['year']          = "2013";

$projects[] = $project;

/*
 * Eco Green
 */
$project        = array();
$achievements   = array();
$achievements[] = "Created brochure style website using PyroCMS";

$project['name']          = "Eco Green Renovations";
$project['type']          = array( "PHP" );
$project['description']   = "Online brochure for Irish company Eco Green Renovations";
$project['achievements']  = $achievements;
$project['url']           = "http://ecogreenrenovations.co.uk/";
$project['github']        = "";
$project['technologies']  = array( "PYROCMS", "HTML", "CSS", "PHP" );
$project['code_snippets'] = array();
$project['keywords']      = array( "ECO", "GREEN", "IRELAND" );
$project['image']         = "projects/ecogreen/1.png";
$project['main_image']    = "projects/ecogreen/main.png";
$project['year']          = "2012";

$projects[] = $project;

/*
 * EMG 
 */
$project        = array();
$achievements   = array();
$achievements[] = "Integrated Wordpress into their existing PHP CMS";

$project['name']          = "EMG";
$project['type']          = array( "PHP" );
$project['description']   = "Wordpress integration for EMG CSR Sustainability Consultants";
$project['achievements']  = $achievements;
$project['url']           = "http://www.emg-csr.com/";
$project['github']        = "";
$project['technologies']  = array( "HTML", "CSS", "PHP", "WORDPRESS" );
$project['code_snippets'] = array();
$project['keywords']      = array( "EMG", "IRELAND", "CSR" );
$project['image']         = "projects/emg/1.png";
$project['main_image']    = "projects/emg/main.png";
$project['year']          = "2012";

$projects[] = $project;

/*
 * Discover Nutrition
 */
$project        = array();
$achievements   = array();
$achievements[] = "Integrated Wordpress into their existing PHP CMS";

$project['name']          = "Discover Nutrition";
$project['type']          = array( "PHP" );
$project['description']   = "Wordpress integration for Discover Nutrition";
$project['achievements']  = $achievements;
$project['url']           = "http://www.discovernutrition.ie/";
$project['github']        = "";
$project['technologies']  = array( "HTML", "CSS", "PHP", "WORDPRESS" );
$project['code_snippets'] = array();
$project['keywords']      = array( "DISCOVER", "NUTRITION", "IRELAND" );
$project['image']         = "projects/discovernutrition/1.png";
$project['main_image']    = "projects/discovernutrition/main.png";
$project['year']          = "2012";

$projects[] = $project;

/*
 * Consensus Mediation
 */
$project      = array();
$achievements = array();

$achievements[] = "Converted .PSD to Wordpress Theme";
$achievements[] = "Created a Wordpress plugin to display a random testimonial in the sidebar.";

$project['name']          = "Consensus Mediation";
$project['type']          = array( "PHP" );
$project['description']   = "PSD to Wordpress theme for Consensus Mediation";
$project['achievements']  = $achievements;
$project['url']           = "http://www.consensusmediation.ie/";
$project['github']        = "";
$project['technologies']  = array( "WORDPRESS", "HTML", "CSS", "PHP" );
$project['code_snippets'] = array();
$project['keywords']      = array( "IRELAND", "CONSENSUS", "MEDIATION" );
$project['image']         = "projects/consensusmediation/1.png";
$project['main_image']    = "projects/consensusmediation/main.png";
$project['year']          = "2012";

$projects[] = $project;

/* 
 * Bevel Woodworking 
 */
$project      = array();
$achievements = array();

$achievements[] = "Converted .PSD to Wordpress Theme";
$achievements[] = "Created a course plugin that handles payment for courses via Paypal.";
$achievements[] = "Created a testimonials plugin to allow showing testimonials in sidebar &amp; other pages";

$project['name']          = "Bevel Woodworking School";
$project['type']          = array( "PHP" );
$project['description']   = "PSD to Wordpress theme for Bevel Woodworking School";
$project['achievements']  = $achievements;
$project['url']           = "http://www.bevelwoodworkingschool.com/";
$project['github']        = "";
$project['technologies']  = array( "WORDPRESS", "HTML", "CSS", "PHP" );
$project['code_snippets'] = array();
$project['keywords']      = array( "IRELAND", "BEVEL", "WOODWORKING", "SCHOOL" );
$project['image']         = "projects/bevelwoodworking/1.png";
$project['main_image']    = "projects/bevelwoodworking/main.png";
$project['year']          = "2012";

$projects[] = $project;


/*
 * Daisy and Buttercup
 */
$project      = array();
$achievements = array();

$achievements[] = "Created an online store using Prestashop.";
$achievements[] = "Gave training on using Prestashop to managers.";
$achievements[] = "Managed Adsense campaigns as well as search engine optimization.";

$project['name']          = "Daisy and Buttercup";
$project['type']          = array( "PHP" );
$project['description']   = "Online store using Prestashop for Irish business 'Daisy and Buttercup'";
$project['achievements']  = $achievements;
$project['url']           = "";
$project['github']        = "";
$project['technologies']  = array( "PRESTASHOP", "HTML", "CSS", "PHP", "JQUERY" );
$project['code_snippets'] = array();
$project['keywords']      = array( "SHOP", "IRELAND", "DAISY", "BUTTERCUP" );
$project['image']         = "projects/daisyandbuttercup/1.png";
$project['main_image']    = "projects/daisyandbuttercup/main.png";
$project['year']          = "2011";

$projects[] = $project;

/*
 * Olympic Travel Services
 */

$project        = array();
$achievements   = array();
$achievements[] = "Created a slideshow and countdown timer to the Olympics using Javascript";
$achievements[] = "Cross browser and resolution design";
$achievements[] = "Used PyroCMS to allow easy editing of events";
$achievements[] = "Search engine optimization";
$achievements[] = "Integration with Google translation";
$achievements[] = "Created a critical path module which showed final stages for ordering specific packages";

$project['name']          = "Olympic Travel Services";
$project['type']          = array( "PHP" );
$project['description']   = "Company website for Olympic Travel Services based on the open source PyroCMS";
$project['achievements']  = $achievements;
$project['url']           = "";
$project['github']        = "";
$project['technologies']  = array( "PHP", "JAVASCRIPT", "HTML", "CSS", "PHOTOSHOP", "PYROCMS" );
$project['code_snippets'] = array( "340eb2ed8f04156932a3" );
$project['keywords']      = array( "IRELAND", "OTS", "OLYMPIC", "TRAVEL", "SERVICES" );
$project['image']         = "projects/ots/1.png";
$project['main_image']    = "projects/ots/main.png";
$project['year']          = "2009";

$projects[] = $project;


/*
 * McElm Construction
 */
$project      = array();
$achievements = array();

$achievements[] = "Used WolfCMS to create online brochure";
$achievements[] = "Managed hosting and email for company";

$project['name']          = "McElm Construction";
$project['type']          = array( "PHP" );
$project['description']   = "Online brochure for company McElm Construction created in WolfCMS";
$project['achievements']  = $achievements;
$project['url']           = "http://mcelmconstruction.ie/";
$project['github']        = "";
$project['technologies']  = array( "HTML", "CSS", "PHP", "WOLFCMS" );
$project['code_snippets'] = array();
$project['keywords']      = array( "IRELAND", "MC", "ELM", "MCELM", "CONSTRUCTION" );
$project['image']         = "projects/mcelm/1.png";
$project['main_image']    = "projects/mcelm/main.png";
$project['year']          = "2009";

$projects[] = $project;


//if (isset( $search )) {
//    $search      = strtoupper( $search );
//    $searchArray = array();
//    foreach ($projects as $key => $project) {
//        if (recursiveArraySearch( $search, $project ) !== false) {
//            $searchArray[] = $projects[$key];
//        }
//    }
//    $projects = $searchArray;
//}
//
//$projectArray = array();
//foreach ($projects as $key => $project) {
//    if (in_array( "PHP", $project['type'] )) {
//        $project['currentType']    = "PHP";
//        $projectArray['PHP'][$key] = $project;
//    }
//    if (in_array( "CSharp", $project['type'] )) {
//        $project['currentType']       = "CSharp";
//        $projectArray['CSharp'][$key] = $project;
//    }
//    if (in_array( "JS", $project['type'] )) {
//        $project['currentType']   = "JS";
//        $projectArray['JS'][$key] = $project;
//    }
//    if (in_array( "Python", $project['type'] )) {
//        $project['currentType']       = "Python";
//        $projectArray['Python'][$key] = $project;
//    }
//}
//
