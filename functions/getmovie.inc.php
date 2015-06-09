<?php
  
//     include "config.inc.php";

//     $query = $db->query("SELECT t.id, t.apid 
//                          FROM movies t 
//                      ORDER BY t.id DESC 
//                         LIMIT 1") or die('Invalid query: ' . mysql_error());
//     $query = $query->fetchAll();
//     // echo json_encode($query);
//     // $result = json_encode($query);

//     while ($row = mysql_fetch_assoc($query)) {
//   echo $row['id'];
//   echo $row['apid'];
// }

// // Free the resources associated with the result set
// // This is done automatically at the end of the script
// mysql_free_result($query);


include "config.inc.php";

    $query = $db->query("SELECT   apid 
FROM      movies
WHERE  id = 1
");
    $query = $query->fetchAll();
    $query = $query[0][0];
    // echo json_encode($query);
    $result = json_encode($query);


    $query = $db->query("SELECT   apid 
FROM      movies
WHERE  id = 2
");
    $query = $query->fetchAll();
    $query = $query[0][0];
    // echo json_encode($query);
    $resultt = json_encode($query);


    $query = $db->query("SELECT   apid 
FROM      movies
WHERE  id = 3
");
    $query = $query->fetchAll();
    $query = $query[0][0];
    // echo json_encode($query);
    $resulttt = json_encode($query);


// $query = $db->query("SELECT   apid 
// FROM      movies
// ORDER BY  id DESC
// LIMIT     3;");
//     $query = $query->fetchAll();
//     $query = $query[0][0];
//     echo json_encode($query);
//     $result = json_encode($query);


?>