<?php
	class loginController extends Controller {
		public function run() {
			$result = $this->model->loginUser($_POST["login"],$_POST["mdp"]);
			if($result["Status"] == "OK") {
				header("Location:".URL"/home")
			}
			else {
				$viewerror = new View("Errors");
				$viewerror-> display("errorLogin");
			}
		}
	}
?>