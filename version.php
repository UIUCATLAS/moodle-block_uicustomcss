<?php /*
 _   _ _____   _____           _                    _____  _____ _____ 
| | | |_   _| /  __ \         | |                  /  __ \/  ___/  ___|
| | | | | |   | /  \/_   _ ___| |_ ___  _ __ ___   | /  \/\ `--.\ `--. 
| | | | | |   | |   | | | / __| __/ _ \| '_ ` _ \  | |     `--. \`--. \
| |_| |_| |_  | \__/\ |_| \__ \ || (_) | | | | | | | \__/\/\__/ /\__/ /
 \___/ \___/   \____/\__,_|___/\__\___/|_| |_| |_|  \____/\____/\____/ 
 Copyright 2014 dandavis/University of Illinois at Urbana Champaign
 Add custom css code or import whole sheets via https url
 * 
 * This plugin is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
 
 /**
 * UI Custom CSS
 *
 * The uicustomcss module is designed to allow instructors of a course to create custom css that will 
 * only be applied to their course and, if they choose, other pages inside their course.
 *
 * @package    block_uicustomcss
 * @category   block
 * @copyright  2014 dandavis/University of Illinois at Urbana Champaign
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


$plugin->version = 2012062899;  // YYYYMMDDHH (year, month, day, 24-hr time)
$plugin->requires = 2010112400; // YYYYMMDDHH (This is the release version for Moodle 2.0)
$plugin->release   = 1.0;       // The human readable version number of the plugin
$plugin->maturity = MATURITY_STABLE; // This is considered as ready for production sites. 
$plugin->component = 'block_uicustomcss';