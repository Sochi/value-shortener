<?php

define('CHARACTERS_CASE_INSENSITIVE', '0123456789abcdefghijklmnopqrstuvwxyz');
define('CHARACTERS_CASE_SENSITIVE', CHARACTERS_CASE_INSENSITIVE . 'ABCDEFGHIJKLMNOPQRSTUVWXYZ');

// Necessary definitions
require sprintf('%s/functions.php', __DIR__);

// Array-example
$examples = array();

// Generate examples 
for ($i = 0; $i < 16; ++$i) {
    $randomNumber = mt_rand();
    $examples[$randomNumber] = encode(CHARACTERS_CASE_SENSITIVE, $randomNumber);
}

// 
$exampleSets = array(
    CHARACTERS_CASE_INSENSITIVE, 
    CHARACTERS_CASE_SENSITIVE,
    '0123456789abcdefghijklmnopqrstuvwxyzabc',
    '0123456789abcde12345fghijkl',
);

?>
<pre>
<?php foreach ($exampleSets as $characters): ?>
<?php if (hasDuplicates($characters)): ?>
Unsuitable character set: <?=$characters; ?> (containing duplicate characters)
<?php else: ?>
Suitable character set: <?=$characters; ?> 
<?php endif; ?>
<?php endforeach; ?>
-----
<?php foreach ($examples as $number => $encoded): ?>
Randomly-generated: <?=$number; ?> 
Shortened output: <?=$encoded; ?> 
Reverse check: <?=decode(CHARACTERS_CASE_SENSITIVE, $encoded); ?> 
--
<?php endforeach; ?>
</pre>
