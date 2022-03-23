<?php

$input = ('1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM@#$%&*');

$password = substr(str_shuffle($input),4,16);


echo "Your password is: {$password}";
