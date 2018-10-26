<?php
if (!isset ($link)){
require 'connect.php';
$query = $pdo->prepare("select * from posts");
$query->execute();
while($posts = $query->fetch()){
echo '<td class="small"><input class="button3" type="submit" value="'.$posts['id'].'" name="id"></td>';
echo '<td>'.$posts[0].'</td>';
echo '<td>'.$posts[1].'</td>';
echo '<td class="small"><input class="button2" type="submit" value="'.$posts['id'].'" name="delete_id" alt="submit"></td>';
echo '</tr>';
}
} else{
	switch ($link) {
    case 1:
    $code_text='<textarea class="code">$query = $pdo->prepare("select * from posts");
	$query->execute();
	while($posts = $query->fetch()){ 
	echo $posts[fältnamn]
	}</textarea>';
	$code_example = " Select";
        break;
    case 2:
    $code_text='<textarea class="code"> try{
    $query = $pdo->prepare("update posts set first_name = :first_name, last_name = :last_name where id = :id");
    $data = array(
	\':id\' => $update_id,
    \':first_name\' => $update_first_name,
	\':last_name\' => $update_last_name
    );
    $query->execute($data);
    $update_message = "Data successfully updated into the database table ...";
    }catch(PDOException $e){
    $update_message =  "Error! failed to update into the database table ... :".$e->getMessage();
    }</textarea> ';
	 $code_example = " Update";
        break;
    case 3:
    $code_text='<textarea class="code">try{
    $query = $pdo->prepare("insert into posts (first_name,last_name,country)
    values (:first_name,:last_name,:country)");
    $data = array(
    \':first_name\' => $update_first_name,
    \':last_name\' => $update_last_name,
    \':country\' => \'Land\'
    );
    $query->execute($data);
    $update_message =  "Data successfully inserted into the database table ...";
    }catch(PDOException $e){
    $update_message =  "Error! failed to insert into the database table :".$e->getMessage();
} </textarea>';
	$code_example = " Insert";
        break;
    case 4:
        $code_text='<textarea class="code"> try{
    $query = $pdo->prepare("delete from posts where id = :id");
	$query->execute(array(
    \':id\' => $delete_id
    ));
	
    $update_message =  "Data successfully deleted in the database table ... ";
	
    }catch(PDOException $e){
    $update_message =  "Failed to delete the MySQL database table ... :".$e->getMessage();
    } 
    OBS! Denna funktion kommer vi att använda oss av endast i speciella fall då databasens storlek inte ändras av att man tar bort en rad i den. Eftersom prestanda inte påverkas nämnvärt med den storlek på databasen vi rör oss med skapar vi istället ett fält "visible" i tabellen och får på så sätt automatiskt en "ångra" -funktion.
	</textarea> ';
	$code_example = " Delete";
        break;	
    case 5:
    $code_text='<textarea class="code"> <?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database_name = "data1";
    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    ));
    ?> </textarea> ';
	$code_example = " Connect";
        break;		
}
{
	echo '<td>'.$code_text.'</td></tr>';
}
}
	
?>
</tbody>
</table>