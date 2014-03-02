<?php 
	require '../header.php';
 ?>
<body>
	<div class="container">
		<h1>Testing mysql1</h1>
			<?php 
			try{
				$testingpdo = new PDO('mysql:host=localhost','root','');	
				//echo"Done";
				//var_dump($testingpdo);
			}catch(PDOexception $e){
				echo($e->getmessage());
				//echo"notgood";
			}
			?>
		<?php 
			$result = $testingpdo->query('show databases');
			$databases = $result->fetchAll(PDO::FETCH_ASSOC);
			//var_dump($databases);

			foreach ($databases as $databaseinfos) {
				foreach($databaseinfos as $info){
					$output = <<<EOT
						<div class="alert alert-success">
							{$info}	
						</div>
EOT;

					echo $output;
				}
			}
		 ?>
	</div>
<?php 
	require'../footer.php';	
 ?>