<?php
$emp = [
    [1,"apu","Manager",5000],
    [2,"asif","salesman",2000],
    [3,"rony","computer operator",1500],
    [4, "tanim","driver",1200]
];
// echo $emp[3][1];

//using foreach loop for printing multidimensonal array
echo "<table border = '2px' cellpadding = '5px' cellspacing = '0'>";
echo "<tr>
<th>Emp Id </th>
<th>Emp Name </th>
<th> Designation </th>
<th>Emp salary </th>
</tr>";
foreach( $emp as $v1){
    echo "<tr>";
    foreach($v1 as $v2){

        echo "<td> $v2 </td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "<br>";

//using for loop for showing multidimensonal array
for($row=0;$row<4;$row++){
    for($col=0;$col<4;$col++){
        echo $emp[$row][$col]." ";
    }
    echo "<br>";
}
//printing method for multidimension  array
echo "<pre>";
print_r($emp);
echo "</pre>"
?>