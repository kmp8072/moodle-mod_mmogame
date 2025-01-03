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
 * This file contains the gate code thats clear saved user info.
 *
 * @package    mod_mmogame
 * @copyright  2024 Vasilis Daloukas
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

define('NO_MOODLE_COOKIES', true);
require( "../../config.php");

?>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="MMOGAME clear.">
<title>MMOGAME clear</title>
<div id="message"></div>
<script>
window.localStorage.removeItem('auserid');
window.localStorage.removeItem('nickname');
window.localStorage.removeItem('UserGUID');
document.getElementById("message").innerHTML = 'Player is changed';
</script>

<?php
/**
 * Removes ausersid, nickname, UserGUID from window.localStorage and goes to gate.php
 *
 * @package    mod_mmogame
 * @copyright  2024 Vasilis Daloukas
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 **/
if (array_key_exists( 'HTTPS', $_SERVER) && $_SERVER['HTTPS'] = 'On') {
    $url = 'https://';
} else {
    $url = 'http://';
}

$url .= $_SERVER['HTTP_HOST'];

$url .= $_SERVER['REQUEST_URI'];
$url = str_replace( '/gatec.php', '/gate.php', $url);
echo '<a href="'.$url.'">Continue</a>';

?>
</html>
