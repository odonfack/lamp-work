<?php
	use PHPUnit\Framework\TestCase;
	require 'welcome.php';
	class WelcomeTest extends TestCase {
	  protected function setUp (){
	    $this ->welcome = new welcome();
	  }
	
	  protected function tearDown() {
	    $this->welcome = NULL;
	  }

	  public function testGreet() {
	    $result = $this->welcome->greet();
	    $this->assertEquals("Welcome to DevOps on AWS!",$result);
	  }
	}
