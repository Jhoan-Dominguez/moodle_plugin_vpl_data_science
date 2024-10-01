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

global $DB;


if ($hassiteconfig) {
    
    $settings = new admin_settingpage(
        "local_vpldatascience",
        get_string("setting_vpldatascience", "local_vpldatascience")
    );
    $ADMIN->add( "localplugins", $settings );

    // Agregar un checkbox para activar el plugin
    $settings->add(
        new admin_setting_configcheckbox(
            "local_vpldatascience_activatevpl",
            get_string("setting_vpl_activatevpl_name", "local_vpldatascience"),
            get_string("setting_vpl_activatevpl_description", "local_vpldatascience"), 
            0)
    );

    // Agregar un checkbox para cagar la data por default
    $settings->add(
        new admin_setting_configcheckbox(
            "local_vpldatascience_defaultdata",
            get_string("setting_vpl_defaultdata_name", "local_vpldatascience"),
            get_string("setting_vpl_defaultdata_description", "local_vpldatascience"), 
            0)
    );

    // Selecionar el curso en el cual se quiere colocar el VPL
    $array_elements = [];
    $courses_list = get_courses("all", "c.id ASC", "c.id, fullname");
    foreach($courses_list as $key => $value) {
        $array_elements += [json_encode($value) => $value->fullname];
    }

    $settings->add(
        new admin_setting_configselect(
            'local_vpldatascience_courses',
            get_string('setting_vpl_courses_name', 'local_vpldatascience'),
            get_string('setting_vpl_courses_description', 'local_vpldatascience'),
            get_string('setting_vpl_courses_defaultvalue', 'local_vpldatascience'),
            $array_elements
        )
    );

}