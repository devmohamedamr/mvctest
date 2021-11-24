<?php
namespace Itrax\Mvc\core;

define('SESSION_SAVE_PATH',realpath(dirname(__DIR__)."/../SessionFiles"));

class AppSessionHandler  extends \SessionHandler 
  {
    private  $sessionName= "MyAppSess";
    private $sessionMaxLifeTime= 0;
    private $sessionSSL= false;
    private $sessionHttpOnly=true;
    private $sessionPath= '/';
    private $sessionDomain='localhost';
    private $sessionSavePath=SESSION_SAVE_PATH;
    // private  $sessionCipherAlgo='aes-256-cbc-hmac-sha256';
    // private $sessionCipherKey='WYCRYPT0K3Y2020';
    private string $sessionCipherAlgo = 'aes-256-cbc';
    private string $sessionCipherIvb = '1234567812345678';
    private string $sessionCipherKey = 'r(@F_R=ee#B$a%B!a^j)';
  //   private $ivlen;
  //   private $iv;
    private $ttl= 1;


    public function __construct ()
    {
            ini_set('session.use_cookies',1);
            ini_set('session.use_only_cookies',1);
            ini_set('session.use_trans_sid',0);
            ini_set('session.save_handler','files');

            session_name($this->sessionName);
            session_save_path($this->sessionSavePath);
            session_set_cookie_params(
                $this->sessionMaxLifeTime,
                $this->sessionPath,
                $this->sessionDomain,
                $this->sessionSSL,
                $this->sessionHttpOnly
            );
              // $this->ivlen = openssl_cipher_iv_length($this->sessionCipherAlgo);
              // $this->iv= openssl_random_pseudo_bytes($this->ivlen);
            session_set_save_handler($this,true); 

    }

    public function __get($key){
      return false !== $_SESSION[$key]  ? $_SESSION[$key]  : false  ;
    }

    public function __set($key, $value)
    {
      $_SESSION[$key]=$value;
    }

    public function __isset($key)
    {
      return isset($_SESSION[$key]) ? true : false ;
    }

    public function read($id)
    {

      $data=parent::read($id) ;
      if(!$data){
        return '';
      }else{
      return openssl_decrypt($data, $this->sessionCipherAlgo, $this->sessionCipherKey,true, $this->sessionCipherIvb);
      }
    }


    public function write($id , $data)
    {
    
        return parent::write($id, openssl_encrypt($data, $this->sessionCipherAlgo, $this->sessionCipherKey,true, $this->sessionCipherIvb));
    }

    public function start(){
        if(session_id() === '' )
        {
          if(session_start()) {  
          $this->setSessionStartTime();
          $this->checkSessionValidity();

          }
        }
    }


  public function setSessionStartTime(){
    if(!isset($this->sessionStartTime)){
      $this->sessionStartTime = time();
    
    } 
    return true;

    }
    private function checkSessionValidity(){
      if ((time() - $this->sessionStartTime) > ($this->ttl * 60)){
          $this->renewSession();
          // $this->generateFingerPrint();
      }
      return true;

    }
    private function renewSession (){
      $this->sessionStartTime = time();
    return  session_regenerate_id(true);
    }
  
      public function kill() // end session 
      {
          session_unset();
          setcookie(
              $this->sessionName, '', 
              time()-1000 ,$this->sessionPath,
              $this->sessionDomain, 
              $this->sessionSSL,
              $this->sessionHttpOnly
          );
          session_destroy();
      }

    private function generateFingerPrint(){
              $userAgentId= $_SERVER['HTTP_USER_AGENT'];
              $this->sessionCipherKey=bin2hex(openssl_random_pseudo_bytes(16));
              $sessionId= session_id();
              $this->fingerPrint = sha1($userAgentId .$this->sessionCipherKey.$sessionId);

      }
      public function isValidFingerPrint()
      {
          if(!isset($this->fingerPrint)){
              $this->generateFingerPrint();
          }
          $fingerPrint=md5( $_SERVER['HTTP_USER_AGENT'].$this->sessionCipherKey) ;
          if($fingerPrint === $this->fingerPrint){
              return true;
          }
          return false;
      }
    }

 