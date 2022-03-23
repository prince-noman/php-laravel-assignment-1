<?php

$input = ('1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM');

$captcha = str_shuffle($input);

$captcha = substr($captcha, 5,4);

echo "Please enter the captcha: {$captcha}";