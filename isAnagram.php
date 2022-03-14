<?php
// valid anagrams
// given two strings s1 ans s2, check if both strings has same alphabets with same frequency

function isAnagram($s1, $s2) {
    if(strlen($s1) != strlen($s2)) return false;
    
    return (freqHashMap($s1) == freqHashMap($s2));
}

function freqHashMap($string) {
    $freqArr = [];
    for ($i=0; $i<strlen($string); $i++) {
        if(isset($freqArr[$string[$i]])) $freqArr[$string[$i]] +=1;
        
        $freqArr[$string[$i]] = 1;
    }
    
    return $freqArr;
}
var_dump(isAnagram('danger', 'garden'));
?>
