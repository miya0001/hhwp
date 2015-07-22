<?php

class HHWP_Test extends WP_UnitTestCase
{
	/**
	 * @test
	 */
	function is_hhvm()
	{
		$this->assertTrue( HHWP::is_hhvm() );
	}
}
