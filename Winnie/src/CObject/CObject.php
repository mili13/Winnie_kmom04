<?php
/**
* Holding a instance of CWinnie to enable use of $this in subclasses.
*
* @package WinnieCore
*/
class CObject {

 	/**
* Members
*/
public $config;
public $request;
public $data;
public $db;
public $views;
public $session;


/**
* Constructor
*/
protected function __construct() {
    $win = CWinnie::Instance();
    $this->config = &$win->config;
    $this->request = &$win->request;
    $this->data = &$win->data;
    $this->db = &$win->db;
    $this->views = &$win->views;
    $this->session = &$win->session;
  }

}
