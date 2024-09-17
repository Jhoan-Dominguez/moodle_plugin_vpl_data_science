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
 * Readme file for local customisations
 *
 * @package    local_vpldatascience
 * @copyright  2024 Universidad Distrital - Facultad Tecnologica: Jhoan Dominguez, Jeisson Sanchez
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined("MOODLE_INTERNAL") || die;

if ($hassiteconfig) {

    $settings = new admin_settingpage( 
        "local_vpldatascience", 
        get_string("setting_vpldatascience", "local_vpldatascience")
    );
    $ADMIN->add( "localplugins", $settings );


    // Agregar un checkbox para activar el plugin
    $settings->add(
        new admin_setting_configcheckbox(
            "local_vpldatascience_enabled", 
            get_string("enable_vpldatascience", "local_vpldatascience"),
            get_string("enable_vpldatascience_desc", "local_vpldatascience"), 
            0)
    );


    // Agregar un campo de configuración a la configuración de esta página
    $settings->add(
        new admin_setting_configtext(
            "local_vpldatascience_authtoken",
            get_string("auth_token_vpldatascience", "local_vpldatascience"),
            get_string("auth_token_vpldatascience_desc", "local_vpldatascience"),
            get_string("defauth_token_vpldatascience_desc", "local_vpldatascience"),
            PARAM_STRINGID,
            30)
    );
}