#!/usr/bin/env php
<?php

$n = 624;
$m = 397;

if($argc < 2)
{
	print($argv[0] . ' <seed>' . "\n");
	print('' . "\n");
	print('Parameters:' . "\n");
	print('  seed:   Seed to initialize mt_rand() with' . "\n");
	print(' output' . "\n");
	print('' . "\n");
	print('Output:' . "\n");
	print('  <M-1>\'s call to mt_rand() and <N-1>\'s call');
	print(' to mt_rand() and <N-M>\'s call to mt_rand()' . "\n");
	exit();
}

mt_srand($argv[1]);
$ret1=$ret2=$ret3=0;
for($i=0;$i<$n;$i++){
	if ($i == $m-1)$ret1 = mt_rand();
	else if($i == $n-1)$ret2 = mt_rand();
	else if($i == $n-$m)$ret3 = mt_rand();
	else mt_rand(); 
}
print $ret1 . ' ' . $ret2 . ' ' . $ret3 . "\n";
