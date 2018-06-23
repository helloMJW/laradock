<?php
include("/home/php-script/env.php");
passthru("php {$projectUrl}/artisan install:password");
