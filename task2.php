
<?php
$arr = ["Daisy", "Rose", "Hyacinth", "Poppy"];
$result='';
for ( $i = 0; ; $i++)
    {
        $finished = true;
        foreach ($arr as $word)
        {
            if ($i < strlen($word))
            {
                $result .= $word[$i];
                $finished = false;
            }
        }
        if ($finished) break;
    }
echo $result;
?>