<?php

	try 
	{	
		require "../config.php";
		require "../common.php";

		$connection = new PDO($dsn, $username, $password, $options);

		$sql = "SELECT * 
						FROM advertisements";

		$statement = $connection->prepare($sql);
		$statement->execute();

		$result = $statement->fetchAll();
	}
	
	catch(PDOException $error) 
	{
		echo $sql . "<br>" . $error->getMessage();
	}
?>
<?php include "templates/header.php"; ?>

<?php
	if ($result && $statement->rowCount() > 0) 
	{ ?>
		<h2>Results</h2>

		<table>
			<thead>
				<tr>
					<th>#</th>
					<th>userid</th>
                    <th>Title</th>
				</tr>
			</thead>
			<tbody>
	<?php 
		foreach ($result as $row) 
		{ ?>
			<tr>
				<td><?php echo escape($row["id"]); ?></td>
				<td><?php echo escape($row["userId"]); ?></td>
                <td><?php echo escape($row["title"]); ?></td>
			</tr>
		<?php 
		} ?>
		</tbody>
	</table>
	<?php 
	} 
	else 
	{ ?>
		<blockquote>No results found</blockquote>
	<?php
	} 
?> 

<a href="index.php">Back to home</a>

<?php require "templates/footer.php"; ?>