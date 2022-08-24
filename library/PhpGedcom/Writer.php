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

use PhpGedcom\Writer\Head;

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

        return $text;
    }
}