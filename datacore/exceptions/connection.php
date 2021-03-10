<?php
namespace Connection;
use \Exception;

class FileAlreadyLoaded extends Exception{
	public function __construct(){ parent::__construct("Can't connect to another file, unload the current file loaded!"); }
}

class FileNotLoaded extends Exception{
	public function __construct(){ parent::__construct("There's no file loaded to do that action!"); }
}

?>
