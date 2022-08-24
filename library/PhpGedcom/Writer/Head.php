<?php
/*
 * php-gedcom
 * File created by Philipp Limmer
 *
 *  php-gedcom is a library for parsing, manipulating, importing and exporting
 *  GEDCOM 5.5 files in PHP 5.3+.
 *
 *  @author  Philipp Limmer
 *  @package  php-gedcom
 *  @license  MIT
 *  @link  https://github.com/Vision42/php-gedcom
 *
 */

namespace PhpGedcom\Writer;

class Head
{
    public static function writeHead(\PhpGedcom\Record\Head $head): string
    {
        $text = "0 HEAD\n";
        $text .= "1 SOUR " . $head->getSour()->getSour() . "\n";
        $text .= "2 VERS " . $head->getSour()->getVers() . "\n";
        $text .= "2 CORP " . $head->getSour()->getCorp()->getCorp() . "\n";
        $text .= "1 DATE " . $head->getDate()->getDate() . "\n";
        $text .= "2 TIME " . $head->getDate()->getTime() . "\n";
        $text .= "1 SUBM @SUBM@\n";
        $text .= "1 FILE " . $head->getFile() . "\n";

        $text .= "1 GEDC\n";
        $text .= "2 VERS 5.5.1\n";
        $text .= "2 FORM LINEAGE-LINKED\n";
        $text .= "1 CHAR UTF-8\n";
        $text .= "1 _NAVM 2\n";
        $text .= "2 _NAVI @I1@\n";
        $text .= "1 _HOME @I1@\n";

        return $text;
    }
}