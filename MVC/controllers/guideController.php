<?php 

class filmController{

	public function getAllfilm(){
		$film = film::getAll();
		return $film;
	}

	public function getOnefilm(){
		if(isset($_POST['id'])){
			$data = array(
				'id' => $_POST['id']
			);
			$film = film::getfilm($data);
			return $film;
		}
	}
	public function findfilm(){
		if(isset($_POST['search'])){
			$data = array('search' => $_POST['search']);
		}
		$film = film::searchfilm($data);
		return $film;
	} 

	public function addfilm(){
		if(isset($_POST['submit'])){
			$data = array(
				'nom' => $_POST['nom'],
				'genre' => $_POST['genre'],
				'descrip' => $_POST['descrip'],
				'date_paru' => $_POST['date_paru'],
				'img' => $_POST['img'],
			);
			$result = film::add($data);
			if($result === 'ok'){
				Session::set('success','film Ajouté');
				Redirect::to('home');
			}else{
				echo $result;
			}
		}
	}

	public function updatefilm(){
		if(isset($_POST['submit'])){
			$data = array(
				'id' => $_POST['id'],
				'nom' => $_POST['nom'],
				'genre' => $_POST['genre'],
				'descrip' => $_POST['descrip'],
				'date_paru' => $_POST['date_paru'],
				'img' => $_POST['img'],
			);
			$result = film::update($data);
			if($result === 'ok'){
				Session::set('success','film Modifié');
				Redirect::to('home');
			}else{
				echo $result;
			}
		}
	}
	public function deletefilm(){
		if(isset($_POST['id'])){
			$data['id'] = $_POST['id'];
			$result = film::delete($data);
			if($result === 'ok'){
				Session::set('success','Employé Supprimé');
				Redirect::to('home');
			}else{
				echo $result;
			}
		}
	}

}
class serieController{

	public function getAllserie(){
		$serie = serie::getAll();
		return $serie;
	}

	public function getOneserie(){
		if(isset($_POST['id'])){
			$data = array(
				'id' => $_POST['id']
			);
			$serie = serie::getserie($data);
			return $serie;
		}
	}
	public function findserie(){
		if(isset($_POST['search'])){
			$data = array('search' => $_POST['search']);
		}
		$serie = serie::searchserie($data);
		return $film;
	} 

	public function addserie(){
		if(isset($_POST['submit'])){
			$data = array(
				'nom' => $_POST['nom'],
				'genre' => $_POST['genre'],
				'descrip' => $_POST['descrip'],
				'date_paru' => $_POST['date_paru'],
				'img' => $_POST['img'],
			);
			$result = serie::add($data);
			if($result === 'ok'){
				Session::set('success','serie Ajouté');
				Redirect::to('home');
			}else{
				echo $result;
			}
		}
	}

	public function updateserie(){
		if(isset($_POST['submit'])){
			$data = array(
				'id' => $_POST['id'],
				'nom' => $_POST['nom'],
				'genre' => $_POST['genre'],
				'descrip' => $_POST['descrip'],
				'date_paru' => $_POST['date_paru'],
				'img' => $_POST['img'],
			);
			$result = serie::update($data);
			if($result === 'ok'){
				Session::set('success','serie Modifié');
				Redirect::to('home');
			}else{
				echo $result;
			}
		}
	}
	public function deleteserie(){
		if(isset($_POST['id'])){
			$data['id'] = $_POST['id'];
			$result = serie::delete($data);
			if($result === 'ok'){
				Session::set('success','serie Supprimé');
				Redirect::to('home');
			}else{
				echo $result;
			}
		}
	}

}
class romanController{

	public function getAllroman(){
		$roman = roman::getAll();
		return $roman;
	}

	public function getOneroman(){
		if(isset($_POST['id'])){
			$data = array(
				'id' => $_POST['id']
			);
			$roman = roman::getroman($data);
			return $roman;
		}
	}
	public function findroman(){
		if(isset($_POST['search'])){
			$data = array('search' => $_POST['search']);
		}
		$roman = roman::searchroman($data);
		return $roman;
	} 

	public function addroman(){
		if(isset($_POST['submit'])){
			$data = array(
				'nom' => $_POST['nom'],
				'genre' => $_POST['genre'],
				'descrip' => $_POST['descrip'],
				'date_paru' => $_POST['date_paru'],
				'img' => $_POST['img'],
			);
			$result = roman::add($data);
			if($result === 'ok'){
				Session::set('success','roman Ajouté');
				Redirect::to('home');
			}else{
				echo $result;
			}
		}
	}

	public function updateroman(){
		if(isset($_POST['submit'])){
			$data = array(
				'id' => $_POST['id'],
				'nom' => $_POST['nom'],
				'genre' => $_POST['genre'],
				'descrip' => $_POST['descrip'],
				'date_paru' => $_POST['date_paru'],
				'img' => $_POST['img'],
			);
			$result = roman::update($data);
			if($result === 'ok'){
				Session::set('success','roman Modifié');
				Redirect::to('home');
			}else{
				echo $result;
			}
		}
	}
	public function deleteroman(){
		if(isset($_POST['id'])){
			$data['id'] = $_POST['id'];
			$result = roman::delete($data);
			if($result === 'ok'){
				Session::set('success','roman Supprimé');
				Redirect::to('home');
			}else{
				echo $result;
			}
		}
	}

}
class animeController{

	public function getAllanime(){
		$roman = roman::getAll();
		return $roman;
	}

	public function getOneanime(){
		if(isset($_POST['id'])){
			$data = array(
				'id' => $_POST['id']
			);
			$anime = anime::getanime($data);
			return $anime;
		}
	}
	public function findanime(){
		if(isset($_POST['search'])){
			$data = array('search' => $_POST['search']);
		}
		$anime = anime::searchanime($data);
		return $roman;
	} 

	public function addanime(){
		if(isset($_POST['submit'])){
			$data = array(
				'nom' => $_POST['nom'],
				'genre' => $_POST['genre'],
				'descrip' => $_POST['descrip'],
				'date_paru' => $_POST['date_paru'],
				'img' => $_POST['img'],
			);
			$result = anime::add($data);
			if($result === 'ok'){
				Session::set('success','anime Ajouté');
				Redirect::to('home');
			}else{
				echo $result;
			}
		}
	}

	public function updateanime(){
		if(isset($_POST['submit'])){
			$data = array(
				'id' => $_POST['id'],
				'nom' => $_POST['nom'],
				'genre' => $_POST['genre'],
				'descrip' => $_POST['descrip'],
				'date_paru' => $_POST['date_paru'],
				'img' => $_POST['img'],
			);
			$result = anime::update($data);
			if($result === 'ok'){
				Session::set('success','anime Modifié');
				Redirect::to('home');
			}else{
				echo $result;
			}
		}
	}
	public function deleteanime(){
		if(isset($_POST['id'])){
			$data['id'] = $_POST['id'];
			$result = anime::delete($data);
			if($result === 'ok'){
				Session::set('success','anime Supprimé');
				Redirect::to('home');
			}else{
				echo $result;
			}
		}
	}

}
class webtoonController{

	public function getAllwebtoon(){
		$webtoon = webtoon::getAll();
		return $webtoon;
	}

	public function getOnewebtoon(){
		if(isset($_POST['id'])){
			$data = array(
				'id' => $_POST['id']
			);
			$webtoon = webtoon::getwebtoon($data);
			return $webtoon;
		}
	}
	public function findwebtoon(){
		if(isset($_POST['search'])){
			$data = array('search' => $_POST['search']);
		}
		$webtoon = webtoon::searchwebtoon($data);
		return $webtoon;
	} 

	public function addwebtoon(){
		if(isset($_POST['submit'])){
			$data = array(
				'nom' => $_POST['nom'],
				'genre' => $_POST['genre'],
				'descrip' => $_POST['descrip'],
				'date_paru' => $_POST['date_paru'],
				'img' => $_POST['img'],
			);
			$result = webtoon::add($data);
			if($result === 'ok'){
				Session::set('success','webtoon Ajouté');
				Redirect::to('home');
			}else{
				echo $result;
			}
		}
	}

	public function updatewebtoon(){
		if(isset($_POST['submit'])){
			$data = array(
				'id' => $_POST['id'],
				'nom' => $_POST['nom'],
				'genre' => $_POST['genre'],
				'descrip' => $_POST['descrip'],
				'date_paru' => $_POST['date_paru'],
				'img' => $_POST['img'],
			);
			$result = webtoon::update($data);
			if($result === 'ok'){
				Session::set('success','webtoon Modifié');
				Redirect::to('home');
			}else{
				echo $result;
			}
		}
	}
	public function deletewebtoon(){
		if(isset($_POST['id'])){
			$data['id'] = $_POST['id'];
			$result = webtoon::delete($data);
			if($result === 'ok'){
				Session::set('success','webtoon Supprimé');
				Redirect::to('home');
			}else{
				echo $result;
			}
		}
	}

}
?>