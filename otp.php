<?php

$code = str_shuffle('0123456789');

$otp = substr($code, 2,4);

echo "Your OTP is {$otp}";