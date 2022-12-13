    <?php
    $food = ["orange","banana","apple","grapes"];

    echo "<b>Current : </d>".current($food)."<br>";//return frist index value because by default pointer indicate 0 index
    echo "<b>Key : </d>".key($food)."<br>";
    echo "<b>Position : </d>".pos($food)."<br>";//same as current

    next($food);//move pointer next value
    echo "<b>Current : </d>".current($food)."<br>";

    next($food);
    echo "<b>Current : </d>".current($food)."<br>";

    prev($food);//move pointer previous value
    echo "<b>Current : </d>".current($food)."<br>";

    end($food);//return the last index value of array
    echo "<b>Current : </d>".current($food)."<br>";
    echo "<b>Key : </d>".key($food)."<br>";
     
     reset($food);
     echo "<b>Current : </d>".current($food)."<br>";
    ?>