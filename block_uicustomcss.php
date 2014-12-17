<?php  /*
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



class block_uicustomcss extends block_base {


	public function init() {
		$this->title = get_string('uicustomcss', 'block_uicustomcss');
	}
		
			
	public function get_content() {
		
		// try to re-use cached copy:
		if ($this->content) {
		  return $this->content;
		}
			 
		$this->content         =  new stdClass; // make a new content object
		$this->content->text = ""; // make a new blank output string
		
		
		if($this->config){ // url and or css code has been entered in config form
		
			if($this->config->cssurl){ //if url given, put on own sheet to prevent interference, prevent xss by removing tag openers: 
				$this->content->text .= '<style> @import url("'. str_replace ("<", "", $this->config->cssurl ) .'");</style>';
			}
			
			// inject a config menu script, some default css to hide un-used css block menu, and the actual css given in the config menu:
			$this->content->text.= ' <script>setTimeout(function(){
				if(self.id_bui_pagetypepattern && self.id_bui_pagetypepattern.selectedIndex==2 ){ 
					self.id_bui_pagetypepattern.selectedIndex=0;
				}}, 40);</script> 
				<style>' .  
					str_replace ("<", "", $this->config->csscode ) . 
					' #sidebar .block_uicustomcss {display:none; } body.editing #sidebar .block_uicustomcss {display:block; }  
				</style>';
		
		} // end if config?
		
		$this->content->footer = '';

		return $this->content;
	} // end get_content()
  
 
}   // Here's the closing bracket for the class definition