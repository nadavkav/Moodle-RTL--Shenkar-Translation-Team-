<?php  /// Moodle Configuration File

unset($CFG);

$CFG = new stdClass();
$CFG->dbtype    = 'mysqli';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'moodle_shenkar_hebrew';
$CFG->dbuser    = 'rtlmoodleadmin';
$CFG->dbpass    = 'rtlmoodleadmin';
$CFG->dbpersist =  false;
$CFG->prefix    = 'mdl_';

$CFG->wwwroot   = 'http://localhost/moodle-shenkar-hebrew';
$CFG->dirroot   = '/var/www/moodle-shenkar-hebrew';
$CFG->dataroot  = '/var/moodledata-shenkar-hebrew';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 00777;  // try 02777 on a server in Safe Mode

$CFG->passwordsaltmain = '.(&X2>8];^9YF%Na@xsJ j&?0E';

require_once("$CFG->dirroot/lib/setup.php");
// MAKE SURE WHEN YOU EDIT THIS FILE THAT THERE ARE NO SPACES, BLANK LINES,
// RETURNS, OR ANYTHING ELSE AFTER THE TWO CHARACTERS ON THE NEXT LINE.
?>