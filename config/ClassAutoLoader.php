<?php
class ClassAutoLoader {
	
	private $dirs = array();

	public function __construct(){
		spl_autoload_register(array($this, 'loader'));
	}
	public function register(){
		$this->dirs = array(
			__DIR__ . '/../controllers/',
			__DIR__ . '/../models/'
		);
	}
	public function loader($classname){
		foreach ($this->dirs as $dir){
			$file = "{$dir}{$classname}.php";
			if(is_readable($file)){
				require_once $file;
				return;
			}
		}
	}
}
$ClassAutoLoader = new ClassAutoLoader();
$ClassAutoLoader->register();
