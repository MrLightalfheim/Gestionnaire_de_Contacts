<?php
	Class loginModel {
		public function loginUser($login, $pwd) {
			$result=array();
			
			//vérification login ok en bdd
			
			$result["Status"] = "OK";
			return $result;
		}
	}
?>