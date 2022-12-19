<?php
/*The only difference between these function is that htmlspecialchars() function convert the special 
characters to HTML entities whereas htmlentities() function convert all applicable characters to HTML entities.


htmlentities convert all applicable character:

" & < > ¡ ¢ £ ¤ ¥ ¦ § ¨ © ª « ¬ ­ ® ¯ ° ± ² ³ ´ µ ¶ · ¸ ¹ º » ¼ ½ ¾ ¿ À Á Â Ã Ä Å Æ Ç È É Ê Ë Ì Í Î Ï Ð Ñ Ò Ó Ô Õ Ö × Ø Ù 
Ú Û Ü Ý Þ ß à á â ã ä å æ ç è é ê ë ì í î ï ð ñ ò ó ô õ ö ÷ ø ù ú û ü ý þ ÿ Œ œ Š š Ÿ ƒ ˆ ˜ Α Β Γ Δ Ε Ζ Η Θ Ι Κ 
Λ Μ Ν Ξ Ο Π Ρ Σ Τ Υ Φ Χ Ψ Ω α β γ δ ε ζ η θ ι κ λ μ ν ξ ο π ρ ς σ τ υ φ χ ψ ω ϑ ϒ ϖ  
 – — ‘ ’ ‚ “ ” „ † ‡ • … ‰ ′ ″ ‹ › ‾ ⁄ € ℑ ℘ ℜ ™ ℵ ← ↑ → ↓ ↔ ↵ ⇐ ⇑ ⇒ ⇓ ⇔ ∀ ∂ ∃ ∅ ∇ ∈ ∉ ∋ ∏ ∑ − ∗ √ ∝ ∞ ∠
  ∧ ∨ ∩ ∪ ∫ ∴ ∼ ≅ ≈ ≠ ≡ ≤ ≥ ⊂ ⊃ ⊄ ⊆ ⊇ ⊕ ⊗ ⊥ ⋅ ⌈ ⌉ ⌊ ⌋ ⟨ ⟩ ◊ ♠ ♣ ♥ ♦


htmlspecialchars:

' " & < >



*/



// $str = "A 'quote' & £  Γ is <b>blod<b>";
// echo $str."<br><br>";
//  echo htmlentities($str);//return as string is...and convert all applicable character to html entity codes.
//normally when we used htmlentities function it convert all applicable character and 8.1 php also convert single quotation

// $str = "<a href='https://www.facebook.com'<br>> Facebook ^</a>";
// echo $str."<br><br>";
//we don't used ENT_QUOTES beacuse after php 8.1 it convert single quotation by default
//echo htmlentities($str,ENT_NOQUOTES);//convert all applicable character except single and double quotation


// $str = "<a href='https://www.facebook.com'> Facebook</a>";
// echo $str."<br><br>";

//echo htmlspecialchars($str)."<br>";//convert all special characters
//echo htmlspecialchars($str,ENT_NOQUOTES);//convert all sepcial character except first quotation and second quotation


//html entity decode
// $str = "<a href='https://www.facebook.com'> Facebook</a>";
// echo $str."<br>";
// $htmlent= htmlentities($str);
// echo $htmlent."<br>";
// echo html_entity_decode($htmlent);//remove the htmlentities codes


// //html special decode
// $str = "<a href='https://www.facebook.com'> Facebook</a>";
// echo $str."<br>";
// $htmlent = htmlspecialchars($str);
// echo $htmlent."<br>";
// echo htmlspecialchars_decode($htmlent);


// to check tag for entities and special characters
echo "<pre>";
print_r(get_html_translation_table(HTML_ENTITIES));
echo "</pre>";

echo "<pre>";
print_r(get_html_translation_table(HTML_SPECIALCHARS));
echo "</pre>";


?>