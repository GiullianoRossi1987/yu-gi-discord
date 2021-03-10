<?php
namespace Connection;
require_once "/workspace/yu-gi-discord/datacore/exceptions/connection.php";


class Connection{
    private $fileLoaded;
    private $gotFile;
    const DEFAULT_DB_PATH = "/workspace/yu-gi-discord/datacore/data/";

    public function __construct(string $file){
	    if($this->gotFile) throw new FileAlreadyLoaded();
	    $this->fileLoaded = self::DEFAULT_DB_PATH . $file;
	    $this->gotFile = true;
    }

    public function __destruct(){
	    if($this->gotFile){
		    $this->fileLoaded = "";
		    $this->gotFile = false;
	    }
    }

    public function gotFile(): bool{ return $this->gotFile; }

    public function getFileLoaded(): string{
	    if(!$this->gotFile) throw new FileNotLoaded();
	    return $this->fileLoaded;
    }

}
