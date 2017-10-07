<?php
require_once '../Application.php';

try{
    if(isset($_REQUEST['termeknev'])){
        // create prepared statement
         $pdo = Application::getConnection();
        $sql = "SELECT * FROM termek WHERE termeknev LIKE :termeknev";
        $stmt = $pdo->prepare($sql);
        $term = $_REQUEST['termeknev'] . '%';
        // bind parameters to statement
        $stmt->bindParam(':termeknev', $term);
        // execute the prepared statement
        $stmt->execute();
        if($stmt->rowCount() > 0){
            while($row = $stmt->fetch()){
                echo "<p>" . $row['termeknev'] . "</p>";
            }
        } else{
            echo "<p>Nincs találat</p>";
        }
    }  
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close statement
unset($stmt);
 
// Close connection
unset($pdo);
?>