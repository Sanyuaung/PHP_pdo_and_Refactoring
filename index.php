<?php
require './bootstrap.php';

$tasks=$query->sellectAll("users");
// dd($tasks);
require 'index.view.php';