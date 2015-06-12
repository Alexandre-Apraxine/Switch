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

$username = $_SESSION["username"];


// get row 1,2,3

//     $query = $db->query("SELECT   apid 
// FROM      movies
// WHERE  id = 1
// ");
//     $query = $query->fetchAll();
//     $query = $query[0][0];
//     // echo json_encode($query);
//     $result = json_encode($query);


//     $query = $db->query("SELECT   apid 
// FROM      movies
// WHERE  id = 2
// ");
//     $query = $query->fetchAll();
//     $query = $query[0][0];
//     // echo json_encode($query);
//     $resultt = json_encode($query);


//     $query = $db->query("SELECT   apid 
// FROM      movies
// WHERE  id = 3
// ");
//     $query = $query->fetchAll();
//     $query = $query[0][0];
//     // echo json_encode($query);
//     $resulttt = json_encode($query);






// $query = $db->query("SELECT   apid 
// FROM      movies
// ORDER BY  id DESC
// LIMIT     0, 3;");
//     $query = $query->fetchAll();
//     $query = $query[0][0];
//     // echo json_encode($query);
//     $result = json_encode($query);

// $query = $db->query("SELECT   apid 
// FROM      movies
// ORDER BY  id DESC
// LIMIT     1, 3;");
//     $query = $query->fetchAll();
//     $query = $query[0][0];
//     // echo json_encode($query);
//     $resultt = json_encode($query);


// $query = $db->query("SELECT   apid 
// FROM      movies
// ORDER BY  id DESC
// LIMIT     2, 3;");
//     $query = $query->fetchAll();
//     $query = $query[0][0];
//     // echo json_encode($query);
//     $resulttt = json_encode($query);


$query = $db->query("SELECT   apid 
FROM      watchlist
WHERE  user = '$username'
ORDER BY  id DESC
LIMIT     0, 3;");
    $query = $query->fetchAll();
    $query = $query[0][0];
    // echo json_encode($query);
    $result = json_encode($query);


$query = $db->query("SELECT   apid 
FROM      watchlist
WHERE  user = '$username'
ORDER BY  id DESC
LIMIT     1, 3;");
    $query = $query->fetchAll();
    $query = $query[0][0];
    // echo json_encode($query);
    $resultt = json_encode($query);


$query = $db->query("SELECT   apid 
FROM      watchlist
WHERE  user = '$username'
ORDER BY  id DESC
LIMIT     2, 3;");
    $query = $query->fetchAll();
    $query = $query[0][0];
    // echo json_encode($query);
    $resulttt = json_encode($query);


    $query = $db->query("SELECT   apid 
FROM      watched
WHERE  user = '$username'
ORDER BY  id DESC
LIMIT     0, 3;");
    $query = $query->fetchAll();
    $query = $query[0][0];
    // echo json_encode($query);
    $resullt = json_encode($query);


$query = $db->query("SELECT   apid 
FROM      watched
WHERE  user = '$username'
ORDER BY  id DESC
LIMIT     1, 3;");
    $query = $query->fetchAll();
    $query = $query[0][0];
    // echo json_encode($query);
    $resulllt = json_encode($query);


$query = $db->query("SELECT   apid 
FROM      watched
WHERE  user = '$username'
ORDER BY  id DESC
LIMIT     2, 3;");
    $query = $query->fetchAll();
    $query = $query[0][0];
    // echo json_encode($query);
    $resullllt = json_encode($query);






$query = $db->query("SELECT COUNT(1)   apid 
FROM      watched
WHERE  user = '$username'
LIMIT     1;");
    $query = $query->fetchAll();
    $query = $query[0][0];
    // echo json_encode($query);
    $totalWatched = json_encode($query);

  // for( $i = 0; $i < $query; $i++ ) {
  //   if($i === $query) {
  //     echo "oups";
  //   } else {
  //   
  //   }
  // }

  

    for( $i = 0; $i < $query; $i++ ) {
    if($i === $query) {
      echo "oups";
    } else {
        $n++;
    $bim = $db->query("SELECT   apid 
FROM      watched
WHERE  user = '$username'
LIMIT     $i,1;");
    $bim = $bim->fetchAll();
    $bim = $bim[0][0];
    // echo json_encode($bim);
    $boum = json_encode($bim);
    echo '<input class="watched-totals'.$i.'" name="watched-total" value='.$bim.' style="display: none"/>';
    }
  }



  $query = $db->query("SELECT COUNT(1)   apid 
FROM      watchlist
WHERE  user = '$username'
LIMIT     1;");
    $query = $query->fetchAll();
    $query = $query[0][0];
    // echo json_encode($query);
    $totalwatchlist = json_encode($query);

  // for( $i = 0; $i < $query; $i++ ) {
  //   if($i === $query) {
  //     echo "oups";
  //   } else {
  //   
  //   }
  // }

  

    for( $i = 0; $i < $query; $i++ ) {
    if($i === $query) {
      echo "oups";
    } else {
        $n++;
    $bam = $db->query("SELECT   apid 
FROM      watchlist
WHERE  user = '$username'
LIMIT     $i,1;");
    $bam = $bam->fetchAll();
    $bam = $bam[0][0];
    // echo json_encode($bam);
    $boumm = json_encode($bam);
    echo '<input class="watchlist-totals'.$i.'" name="watchlist-total" value='.$bam.' style="display: none"/>';
    }
  }




// $query = $db->query("SELECT *
// FROM   movies
// WHERE  EXISTS (SELECT apid 
//                    FROM   users 
//                    WHERE  users.username = movies.user)
// ORDER BY  id DESC
//  LIMIT     2, 3;");
//     $query = $query->fetchAll();
//     $query = $query[0][0];
//     echo json_encode($query);
//     $resulttt = json_encode($query);


?>