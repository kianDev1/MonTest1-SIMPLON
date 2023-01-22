<?php
		$serveur = "localhost";
		$login = "id20184626_test1simplonci";
		$pass = "Kianjeanm1-2";
		
		try{
		$connexion = new PDO("mysql:host=$serveur;dbname=id20184626_test1simplon;charset=utf8", $login, $pass);
		$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$NOM = $_POST['NOM'];
		$PRENOM = $_POST['PRENOM'];
		$NUMERO = $_POST['NUMERO'];
		$ADRESSE = $_POST['ADRESSE'];
		
		$sql = "INSERT INTO `enregistrement`(`NOM`, `PRENOM`, `NUMERO`, `ADRESSE`) VALUES (:NOM,:PRENOM, :NUMERO, :ADRESSE)";
		$req = $connexion->prepare($sql);
		$exec = $req->execute(array(":NOM"=>$NOM,":PRENOM"=>$PRENOM,":NUMERO"=>$NUMERO, ":ADRESSE"=>$ADRESSE));
			if($exec){
						echo 'Les données ont bien été enregistrées chez SIMPLON';
					 }else{
						echo "Une erreur est survenue !";
					}
		//echo 'Connexion à la base de données reussie';
		echo '<br><a href="index.php">Retour</a>';
		
		}
		catch(PDOException $e){
			echo 'Echec de la connexion : ' . $e->getMessage();
		}
	?>