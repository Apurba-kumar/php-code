<?php
$marks = [
    "Krishna" => [
        "Physics"=>85,
        "Maths"=>80,
        "Chemistry"=>87
    ],
    "Rohan" => [
        "Physics"=>81,
        "Maths"=>90,
        "Chemistry"=>77
    ],
    "Raihan" => [
        "Physics"=>90,
        "Maths"=>88,
        "Chemistry"=>85
    ]
    ];
    echo "<table border = '2px' cellpadding ='5px' cellspacing = '0'
    <tr>
      <th>Student Name</th>
      <th>Physics</th>
      <th>Maths</th>
      <th>Chemistry</th>
    </tr>";
 foreach($marks as $key=> $v1){
      echo "<tr>
      <td>$key</td>";
      foreach($v1 as $v2){
        echo"<td> $v2</td>";
      }
      echo  "</tr>";
 }
 echo "</table>";
    echo "<pre>";
    print_r($marks);
    echo "</pre>";
?>