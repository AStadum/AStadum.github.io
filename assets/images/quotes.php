<?php $quotes = file("quotes.txt");
srand((double)microtime() * 1000000);
$ranNum = rand(0, count($quotes)-1); ?>


