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


 
class block_uicustomcss_edit_form extends block_edit_form {
 
    protected function specific_definition($mform) {
 
		
		// offer to embed a CSS url directly:
		$mform->addElement(
			'text', 
			'config_cssurl', 
			get_string('label_url', 'block_uicustomcss'), 			
			'  size="51" pattern="^https[\w\W]+" placeholder=" '.
				get_string('url_placeholder', 'block_uicustomcss') .'"  style="font-family:monospace"  title="'. 
				get_string('desc_url', 'block_uicustomcss', 'External CSS URL') .'" '
		);	
		$mform->setDefault('config_cssurl', "");
		$mform->setType('config_cssurl', PARAM_MULTILANG);
	

	
		// offer to embed a CSS url directly:
		$mform->addElement(
			'textarea', 
			'config_csscode', 
			get_string('label_css', 'block_uicustomcss'), 
			'wrap="virtual" rows="7" cols="50" style="font-family:monospace" title="'. 
				get_string('desc_css', 'block_uicustomcss') .'" '
		);	
		$mform->setDefault('config_csscode', "");
		$mform->setType('config_csscode', PARAM_MULTILANG);
	
	
	
    }// end specific_definition()
	
	
}// end block_uicustomcss_edit_form()
