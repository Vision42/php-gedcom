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

namespace PhpGedcom;

use PhpGedcom\Writer\Fam;
use PhpGedcom\Writer\Head;
use PhpGedcom\Writer\Indi;

class Writer
{
    private Gedcom $gedcom;

    public function __construct(Gedcom $gedcom)
    {
        $this->gedcom = $gedcom;
    }

    public function writeToString(): string
    {
        $text = Head::writeHead($this->gedcom->getHead());
        $text .= Indi::writeIndi($this->gedcom->getIndi());
        $text .= Fam::writeFAM($this->gedcom->getFam());
        $text .= "0 TRLR";

        return $text;
    }

    public function writeToFile($filePath){
        $text = $this->writeToString();

        $outputFile = fopen($filePath, "w");
        fwrite($outputFile, $text);
        fclose($outputFile);
    }
}