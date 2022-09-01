<?php
/*
 * php-gedcom
 * File created by Philipp Limmer
 *
 *  php-gedcom is a library for parsing, manipulating, importing and exporting
 *  GEDCOM 5.5 files in PHP 7.4+.
 *
 *  @author  Philipp Limmer
 *  @package  php-gedcom
 *  @license  MIT
 *  @link  https://github.com/Vision42/php-gedcom
 *
 */

namespace library\Gedcom;

use PhpGedcom\Parser;
use PhpGedcom\Record\Indi;
use PHPUnit\Framework\TestCase;

class GedcomTest extends TestCase
{
    public function testUpdate(): void
    {
        $parser = new Parser();
        $file = $parser->parse("tests/stresstestfiles/FBFB_Abgabe-8.ged");

        /** @var Indi $indi */
        $indi = $file->getIndi()["I1"];

        $name = new Indi\Name();
        $name->setGivn("test");
        $name->setNick("test");

        $indi->setName([$name]);
        $file->updateIndi("I1", $indi);
    }
}