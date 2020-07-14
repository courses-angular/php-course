<?php
// --------------------------------------------------------------------
# substr()
// $output = substr('Hello',1,3); // Start from 1 and End to 3 index;
$output = substr('Hello',-2); // Start from  the last index ;
// echo $output;
// --------------------------------------------------------------------
# strlen()  length of string
$output = strlen('Hello');
// echo $output;
// --------------------------------------------------------------------
# strpos() - find position of the letter(first occurence of all same letters) in string
$output = strpos('Hello World','o');
// echo $output;
// --------------------------------------------------------------------
# strrpos() - find position of the letter(last occurence of all same letters) in string
$output = strrpos('Hello World','o');
// echo $output;
// --------------------------------------------------------------------
# trim() - remove spaces on the string
$text = 'Hello World              ';
$trimmed = trim($text);
// var_dump($trimmed);
// --------------------------------------------------------------------
# strtoupper() - make string uppercase
$output = 'Hello World              ';
$output = strtoupper($output);
// echo($output);
// --------------------------------------------------------------------
# strtolower() - make string lowecase
$output = 'Hello World';
$output = strtolower($output);
// echo($output);
// --------------------------------------------------------------------
# ucwords() - make every first letter of each word to be capitalized
$output = 'hello world';
$output = ucwords($output);
// echo($output);
// --------------------------------------------------------------------
# str_replace() - Replace all occurances of a search string with a replacement
$output = 'hello world';
$output = str_replace('world','Yevgeny',$output); // 1.what word to replace;2.with which word to replace;3.Whole string
// echo($output);
// --------------------------------------------------------------------
#is_string() - check if the variable is string or not
$output = 'hello world';
$output = is_string($output); // return 1 if it's true else return nothing
// echo($output);
$values = array(true,false,23,'23','',' ',22.3,'22.3',0,'0');
foreach ($values as $value) {
   if(is_string($value)){
    //    echo "{$value} is a string<br>";
   }
}
// --------------------------------------------------------------------
# gzcompress() - compress a string
$string = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo laborum tempore fuga unde quis fugiat odio ab illum quasi incidunt velit, optio quod recusandae vitae, saepe explicabo sequi pariatur dolorem? Praesentium, omnis cum? Quia aliquam distinctio blanditiis itaque, adipisci sed debitis aspernatur nulla nemo molestias ratione similique, velit nihil expedita?";

$compressed = gzcompress($string);
echo $compressed.'<br>';

# gzuncompress() - uncompress a string
$original = gzuncompress($compressed);
echo $original;
// --------------------------------------------------------------------
