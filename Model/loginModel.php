<?php
	Class loginModel {
		public function loginUser($login, $pwd) {
			$result=array();
			
			//v�rification login ok en bdd
			
			$result["Status"] = "OK";
			return $result;
		}
	}
?>