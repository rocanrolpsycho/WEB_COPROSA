<?php
namespace Google;

class MailHide {

	private $public_key = null;
	private $private_key = null;

	private function aes_pad($val){

		$block_size = 16;

		$numpad = $block_size - (strlen($val) % $block_size);

		return str_pad($val, strlen($val) + $numpad, chr($numpad));

	}

	private function aes_encrypt($val, $ky){

		if(!function_exists('mcrypt_encrypt')) exit('To use reCAPTCHA Mailhide, you need to have the mcrypt php module installed.');

		$mode = MCRYPT_MODE_CBC;  		
		$enc = MCRYPT_RIJNDAEL_128;
		$val = $this->aes_pad($val);

		return mcrypt_encrypt($enc, $ky, $val, $mode, "\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0");

	}


	private function get_mailhide_urlbase64($x){

		return strtr(base64_encode($x), '+/', '-_');

	}

	private function get_mailhide_url($email){

		if(is_null($this->public_key) || empty($this->public_key) || is_null($this->private_key) || empty($this->private_key)) 
			exit('To use reCAPTCHA Mailhide, you have to sign up for a public and private key, you can do so at <a href="http://www.google.com/recaptcha/mailhide/apikey">http://www.google.com/recaptcha/mailhide/apikey</a>');

		$ky = pack('H*', $this->private_key);
		$crypt_mail = $this->aes_encrypt($email, $ky);

		return 'http://www.google.com/recaptcha/mailhide/d?k='.$pubkey.'&c='.$this->get_mailhide_urlbase64($crypt_mail);

	}

	private function get_mailhide_email_parts($email){

		$arr = preg_split("/@/", $email);

		if(strlen($arr[0]) <= 4){
			$arr[0] = substr($arr[0], 0, 1);
		}elseif(strlen($arr[0]) <= 6){
			$arr[0] = substr($arr[0], 0, 3);
		}else{
			$arr[0] = substr($arr[0], 0, 4);
		}

		return $arr;

	}

	public function email($email){

		$email_parts = $this->get_mailhide_email_parts($email);

		$url = $this->get_mailhide_url($email);

		echo htmlentities($email_parts[0]).'<a href="'.htmlentities($url).'" onclick="window.open(\''.htmlentities($url).'\', \'\', \'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=300\'); return false;" title="Reveal this e-mail address">...</a>@'.htmlentities($email_parts[1]);

	}	

}

