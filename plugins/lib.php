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
 * Archivo de funciones auxiliares lib.php
 *
 * @package   local_vpldatascience
 * @copyright 2024 Universidad Distrital - Facultad Tecnologica: Jhoan Dominguez, Jeisson Sanchez
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

function local_vpldatascience_extend_settings_navigation($settingsnav, $context) {
    global $CFG, $PAGE;

    // Solo es visible dentro de las páginas del curso
    if (!$PAGE->course or $PAGE->course->id == 1) {
        return;
    }

    // Sólo accesible para usuarios con capacidad de respaldo
    if (!has_capability(
        'moodle/backup:backupcourse', 
        context_course::instance($PAGE->course->id))) {
        return;
    }

    // Solo accesible dentro del menú de administración del curso
    if ($settingnode = $settingsnav->find('courseadmin', navigation_node::TYPE_COURSE)) {
        
        $strfoo = get_string('barnav_option_title', 'local_vpldatascience');
        $url = new moodle_url(
            '/local/vpldatascience/vpldatascience.php', 
            array('id' => $PAGE->course->id)
        );

        $foonode = navigation_node::create(
            $strfoo,
            $url,
            navigation_node::NODETYPE_LEAF,
            'vpldatascience',
            'vpldatascience',
            new pix_icon('t/addcontact', $strfoo)
        );
        
        if ($PAGE->url->compare($url, URL_MATCH_BASE)) {
            $foonode->make_active();
        }
        $settingnode->add_node($foonode);
    }
}