<?php 

class film {

	static public function getAll(){
		$stmt = DB::connect()->prepare('SELECT * FROM film');
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt = null;
	}

	static public function getfilm($data){
		$id = $data['id'];
		try{
			$query = 'SELECT * FROM film WHERE id=:id';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":id" => $id));
			$employe = $stmt->fetch(PDO::FETCH_OBJ);
			return $film;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

	static public function add($data){
		$stmt = DB::connect()->prepare('INSERT INTO film (nom,genre,descrip,date_paru)
			VALUES (:nom,:genre,:descrip,:date_paru)');
		$stmt->bindParam(':nom',$data['nom']);
		$stmt->bindParam(':genre',$data['genre']);
		$stmt->bindParam(':descrip',$data['descrip']);
		$stmt->bindParam(':date_paru',$data['date_paru']);

		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;
	}
	static public function update($data){
		$stmt = DB::connect()->prepare('UPDATE film SET nom= :nom,genre=:genre,descrip=:descrip,date_paru=:date_paru WHERE id=:id');
		$stmt->bindParam(':id',$data['id']);
		$stmt->bindParam(':nom',$data['nom']);
		$stmt->bindParam(':genre',$data['genre']);
		$stmt->bindParam(':descrp',$data['descrip']);
		$stmt->bindParam(':date_paru',$data['date_paru']);
		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;
	}

	static public function delete($data){
		$id = $data['id'];
		try{
			$query = 'DELETE FROM film WHERE id=:id';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":id" => $id));
			if($stmt->execute()){
				return 'ok';
			}
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

	static public function searchfilm($data){
		$search = $data['search'];
		try{
			$query = 'SELECT * FROM film WHERE nom LIKE ? OR genre LIKE ?';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array('%'.$search.'%','%'.$search.'%'));
			$employes = $stmt->fetchAll();
			return $film;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}
}
?>