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
 * Muestra el contenido de la página
 *
 * @package   local_vpldatascience
 * @copyright 2024 Universidad Distrital - Facultad Tecnologica: Jhoan Dominguez, Jeisson Sanchez
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once('../../config.php');
global $DB, $OUTPUT, $PAGE;

// Verifique todas las variables requeridas.
$courseid = required_param('id', PARAM_INT);
require_login($courseid);

// Definimos nuestra página
$PAGE->set_url('/local/vpldatascience/vpldatascience.php', array('id' => $courseid));
$PAGE->set_pagelayout('standard');


echo $OUTPUT->header();

echo '<script type="module" crossorigin src="/local/vpldatascience/assets/main.js"></script>';
echo '<link rel="stylesheet" crossorigin href="/local/vpldatascience/assets/style.css">';

echo html_writer::tag('h2',get_string('page_title', 'local_vpldatascience'));

echo html_writer::div(
    "<button id=\"my-button\">Haz clic aquí</button>",
    'vpldatascience-app',
    ['id' => 'vpldatascience-app']
);

echo html_writer::div(
    "",
    'app',
    ['id' => 'app']
);

echo $OUTPUT->footer();