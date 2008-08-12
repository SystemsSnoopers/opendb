<?php
/* 	
 	Open Media Collectors Database
	Copyright (C) 2001,2006 by Jason Pell

	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
	*/

require_once 'PHPUnit.php';

include_once("./functions/item_attribute.php");
include_once("./functions/utils.php");

class UtilsTest extends PHPUnit_TestCase {
	function UtilsTest($name) {
		$this->PHPUnit_TestCase($name);
	}

	function setUp() {
	}

	function testArrayForValue() {
		$value = get_array_for_value('Jason');
		$this->assertEquals(1, count($value));
		$this->assertEquals('Jason', $value[0]);
		
		$value = get_array_for_value(array('Jason'));
		$this->assertEquals(1, count($value));
		$this->assertEquals('Jason', $value[0]);
	}
	
	function testDedupArray() {
		$value1 = array('Jason', 'Pell');
		$value2 = array('Clair', 'Pell');
		
		$new_value = deduplicate_array($value1, $value2);
		
		$this->assertEquals(1, count($new_value));
		$this->assertEquals('Jason', $new_value[0]);
	}
}
?>