<?php
namespace micsay\captcha;

use yii\captcha\CaptchaAction;

class CaptchaBuilder extends CaptchaAction{
   private $verifycode;
   private $base64;
   
   public function __construct(){
        $this->init();
		$this->minLength = 4;
		$this->maxLength = 5;
		$this->foreColor = 0x00ff00;
		$this->width = 80;
		$this->height = 45;
		
		//$this->imageLibrary = "gd";// $this->imageLibrary = "imagick";
   }
   /**
   * @return string verfiycode image base64
   */
   public function base64(){
	    if($this->base64){
		    return $this->base64;
		}else{
		    return $this->base64 = "data:image/png;base64,".base64_encode($this->renderImage($this->getPhrase()));
		}
   }
   /**
   * @return string new generated verifycode
   */
   public function getNewPhrase(){
        $this->base64 = null;
		return $this->verifycode = $this->generateVerifyCode();
   }
   /**
   * @return string generated verifycode
   */
   public function getPhrase(){
	    if($this->verifycode){
		    return $this->verifycode;
		}else{
		    return $this->verifycode = $this->generateVerifyCode();
		}
   }
}
?>