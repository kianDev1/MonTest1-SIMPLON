
<html lang="fr">
<head>
<meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="style/style.css">
        <link rel="shortcut icon" href="favicon.ico.png" type="image/x-icon">
	<title>la liste des paricipants</title>
</head>
<body style="margin-left:auto; margin-right:auto;width:80%;">
	
<p style="text-shadow:2px 2px 4px black;color:white; ">LA LISTE COMPLETE DES PARTICIPANTS</p>
<br>
<table style="margin-left:auto; margin-right:auto;width:100%;">

							<thead>
								<tr>
								  <th style="border:1px solid black; background-color: rgb(250, 186, 126);">NOM</th>
								  <th style="border:1px solid black; background-color: rgb(255, 199, 147);">PRENOM</th>
								  <th style="border:1px solid black; background-color: rgb(248, 209, 173);">NUMERO</th>
								  <th style="border:1px solid black; background-color: rgb(255, 236, 219);">ADRESSE EMAIL</th>
								</tr>
							</thead>
							<tbody>

                    <?php
$serveur = "localhost";
		$login = "id20184626_test1simplonci";
		$pass = "Kianjeanm1-2";
		
		try{
		$connexion = new PDO("mysql:host=$serveur;dbname=id20184626_test1simplon;charset=utf8", $login, $pass);
		$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sel = "SELECT * FROM `enregistrement`";
		
		
		}
		catch(PDOException $e){
			echo 'Echec de la connexion : ' . $e->getMessage();
		}
						foreach ($connexion->query($sel) as $lingne)

					   {  

					?>
							<tr>

								<td style="border:1px solid #ccc; background-color: rgb(250, 186, 126);"> <?php  echo $lingne['NOM'];?></td>

								<td style="border:1px solid #ccc; background-color: rgb(255, 199, 147);"> <?php  echo $lingne['PRENOM'];  ?></td>
 
								<td style="border:1px solid #ccc; background-color: rgb(248, 209, 173);"><?php  echo $lingne['NUMERO'];  ?></td>

								<td style="border:1px solid #ccc; background-color: rgb(255, 236, 219);"> <?php  echo $lingne['ADRESSE'];  ?></td>
							</tr>

					<?php 

						} 

					?>

                            </tbody>

                    </table>
	



					<a href="index.php">Retour</a>
					</body>
</html>