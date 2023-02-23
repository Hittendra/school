<?php
  echo '<h3> Including files in PHP </h3>
     <ul>
         <li> include "header.php": - Pull the file in here. </li>
         <li> include_once "header.php": - Pull the file in here unless it has already been pulled in before </li>
         <li> require "header.php": - Pull in the file here and die if it is missing </li>
         <li> reqiuire_once "header.php" - You can guess what this means... </li>
         <li> These can look like functions - require_once("header.php") </li>
    </ul>';