<?php
/**
 * Converts lines of string into a table
 *
 * @param [string] $string
 * @return 
 */
  function linesToArray($string) {
    return explode(PHP_EOL, $string);
  }