<?php
require './bootstrap.php';

$tasks=$query->sellectAll("tasks");
require 'index.view.php';