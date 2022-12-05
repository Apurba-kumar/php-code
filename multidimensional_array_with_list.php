<?php
//index array 
$emp1 = [
    [1, "apu", "Manager", 5000],
    [2, "asif", "salesman", 2000],
    [3, "rony", "computer operator", 1500],
    [4, "tanim", "driver", 1200]
];

echo "<table border='2px' cellpadding= '5px' cellspacing= '0'>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Designation</th>
      <th>salary</th>
    </tr>";
foreach ($emp1 as list($a, $b, $c, $d)) {
    echo "<tr><td>$a</td><td> $b </td> <td>$c</td> <td> $d</td></tr>";
}
echo "<table>";

echo"<br>";
//associative array

$emp = [
    [
        "id" => 1,
        "Name" => "apu",
        "Designation" => "Manager",
        "salary" => 5000
    ],
    [
        "id" => 2,
        "Name" => "asif",
        "Designation" => "salesman",
        "salary" => 2000
    ],

    [
        "id" => 3,
        "Name" => "rony",
        "Designation" => "omputer operator",
        "salary" => 1500
    ],

    [
        "id" => 4,
        "Name" => "tanim",
        "Designation" => "driver",
        "salary" => 1200
    ]
];
echo "<table border='2px' cellpadding= '5px' cellspacing= '0'>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Designation</th>
      <th>salary</th>
    </tr>";
foreach ($emp as list("id" =>$a, "Name" =>$b, "Designation" =>$c, "salary" =>$d)) {
    echo "<tr><td>$a</td><td> $b </td> <td>$c</td> <td> $d</td></tr>";
}
echo "<table>";
