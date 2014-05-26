<?php
class IndexController {
	
	public function indexAction(){
		$Test = new Test();
		var_dump($Test->get());
	}

}