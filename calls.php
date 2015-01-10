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

?>
<pre>
<?php foreach ($examples as $number => $encoded): ?>
Randomly-generated: <?=$number; ?> 
Shortened output: <?=$encoded; ?> 
Reverse check: <?=decode(CHARACTERS_CASE_SENSITIVE, $encoded); ?> 
--
<?php endforeach; ?>
</pre>
