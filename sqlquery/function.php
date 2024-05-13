<?php
function getString($query)
{
    
    $conn = mysqli_connect("localhost","root","","carshop")
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $result = mysqli_query($conn, $query);
    $value;
    if ($result) {
   
        $row = mysqli_fetch_array($result);

        $value = $row['email']
        mysqli_free_result($result);
    } else {
        echo "Error executing query: " . mysqli_error($conn);
    }
    mysqli_close($conn);
    
    if ($value){
        return $value;
    }
    else{
        return "Error";
    }
}


function getForCombo($query)
{
    try {
        $conn = new PDO("mysql:host=localhost;dbname=carshop", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->query($query);
        return $stmt;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return null;
    }
}

function displaySQLData($query)
{
    $db = mysqli_connect("localhost", "root", "", "carshop");

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = $query;
$result = mysqli_query($db, $sql);

mysqli_close($db);
}

?>