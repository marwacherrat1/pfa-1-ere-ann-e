<?php 

class User{

	static public function login($data){
		$username = $data['username'];
		try{
			$query = 'SELECT * FROM users WHERE username=:username';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":username" => $username));
			$user = $stmt->fetch(PDO::FETCH_OBJ);
			return $user;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

	static public function createUser($data){
		$stmt = DB::connect()->prepare('INSERT INTO users (fullname,username,email,number,adress,age,type,gender)
			VALUES (:fullname,:username,:email,:number,:adress,:age,:type,:gender)');
		$stmt->bindParam(':fullname',$data['fullname']);
		$stmt->bindParam(':username',$data['username']);
		$stmt->bindParam(':email',$data['email']);
		$stmt->bindParam(':number',$data['number']);
		$stmt->bindParam(':adress',$data['adress']);
		$stmt->bindParam(':age',$data['age']);
		$stmt->bindParam(':type',$data['type']);
		$stmt->bindParam(':gender',$data['gender']);

		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;
	}

}

 ?>