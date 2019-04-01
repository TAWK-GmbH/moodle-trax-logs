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

class test_config extends advanced_testcase {
    
    /**
     * Test config.
     */
    protected $lrs_endpoint = 'http://trax.test/trax/ws/xapi';
    protected $lrs_username = 'testsuite';
    protected $lrs_password = 'password';
    protected $platform_iri = 'http://xapi.moodle.test';

    
    /**
     * Prepare test session.
     */
    protected function prepare_session() {

        // Prepare testing context
        $this->resetAfterTest(true);
        $this->preventResetByRollback();
        
        // Enable logging plugin and configure it.
        set_config('enabled_stores', 'logstore_trax', 'tool_log');
        set_config('lrs_endpoint', $this->lrs_endpoint, 'logstore_trax');
        set_config('lrs_username', $this->lrs_username, 'logstore_trax');
        set_config('lrs_password', $this->lrs_password, 'logstore_trax');
        set_config('platform_iri', $this->platform_iri, 'logstore_trax');
        set_config('buffersize', 0, 'logstore_trax');

        // Create a user
        $this->setAdminUser();
        $user = $this->getDataGenerator()->create_user();
        $this->setUser($user);
        return $user;
    }

}
