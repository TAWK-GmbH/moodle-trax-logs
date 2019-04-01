<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Trax Logs for Moodle.
 *
 * @package    logstore_trax
 * @copyright  2019 Sébastien Fraysse {@link http://fraysse.eu}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// Plugin

$string['pluginname'] = 'Trax Logs';
$string['pluginname_desc'] = 'A log plugin which transforms Moodle logs into xAPI statements, and sends then to your LRS.';


// Settings

$string['lrs_endpoint'] = 'LRS endpoint';
$string['lrs_endpoint_help'] = "This is the URL used to call the xAPI services of your LRS.";

$string['lrs_username'] = 'LRS username (Basic HTTP)';
$string['lrs_username_help'] = "This is the username of the Basic HTTP account created on your LRS.";

$string['lrs_password'] = 'LRS password (Basic HTTP)';
$string['lrs_password_help'] = "This is the password of the Basic HTTP account created on your LRS.";

$string['platform_iri'] = 'Platform IRI';
$string['platform_iri_help'] = "An IRI that will identify your platform and will never change.";

$string['buffersize'] = 'Buffer size';
$string['buffersize_help'] = "Number of events that can be grouped to be sent in a single request.";


// Exceptions
$string['activity_entry_not_found'] = 'Activity entry not found.';
$string['actor_entry_not_found'] = 'Actor entry not found.';


// Privacy metadata

$string['privacy:metadata:actors'] = 'Matching table between Moodle user ID and anonymous identifier used by external LRS.';
$string['privacy:metadata:actors:mid'] = 'User ID stored by Moodle';
$string['privacy:metadata:actors:uuid'] = 'Anonymous identifier sent to the external LRS';

$string['privacy:metadata:lrs'] = 'Logs generated by users are sent to an LRS which store them in its own database.';
$string['privacy:metadata:lrs:uuid'] = 'Anonymous identifier sent to the external LRS';
