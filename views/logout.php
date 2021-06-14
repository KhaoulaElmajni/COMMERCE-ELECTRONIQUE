<?php

$user = new UsersController();
$user->logout();
Redirect::to("home");

