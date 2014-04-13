<?php
namespace Classes;

class Database extends \PDO {

    function __construct() {
        parent::__construct('mysql:dbname=' . \Classes\Config::getDbName() . ';host=' . \Classes\Config::getHost(), \Classes\Config::getDbUsername(), \Classes\Config::getDbPassword());
    }

    public function saveText($text, $syntax, $link) {
        $request = $this->prepare('INSERT INTO pastetext (text, link, type) VALUES (:text, :link, :syntax)');
        $request->bindParam(':text', $text);
        $request->bindParam(':link', $link);
        $request->bindParam(':syntax', $syntax);

        return $request->execute();
    }

    public function linkExist($link) {
        $request = $this->prepare('SELECT link FROM pastetext WHERE link=:link'); 
        $request->bindParam(':link', $link);
        $request->execute();

        if($request->rowCount() == 0) {
            return false;
        }
        else {
            return true;
        }
    }

    public function getTextByLink($link) {
        $request = $this->prepare('SELECT text, type FROM pastetext WHERE link = :link');
        $request->bindParam(':link', $link);

        /**
         * execute request
         */
        $request->execute();
        
        return $request->fetch();
    }
}
