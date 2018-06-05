<?php
class Project {
	private $user_obj;
	private $con;

	public function __construct($con, $user){
		$this->con = $con;
		$this->user_obj = new User($con, $user);
	}
	public function submitProject($body) {
		$body = strip_tags($body);
		$body = mysqli_real_escape_string($this->con, $body);
		$check_empty = preg_replace('/\s+/', '', $body); 

		if($check_empty != "") {

			$date_added = date("Y-m-d H:i:s");

			$query = mysqli_query($this->con, "INSERT INTO projects VALUES('', '$body', '$date_added', 'no')");
			$returned_id = mysqli_insert_id($this->con);

			}

	}

}


?>