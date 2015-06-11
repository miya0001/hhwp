<?php

class HHWP_Test extends WP_UnitTestCase {

	function is_hhvm()
	{
		$this->assertTrue( is_hhvm() );
	}
}
