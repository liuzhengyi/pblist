<?php
require_once('../pb4php/parser/pb_parser.php');

$parser = new PBParser();
$parser->parse('class.proto');
?>
