<?php

namespace library\Gedcom;

use PhpGedcom\Parser;
use PhpGedcom\Writer;
use PHPUnit\Framework\TestCase;

class WriterTest extends TestCase
{
    public function testWrite() : void
    {
        $parser = new Parser();
        $file = $parser->parse("tests/stresstestfiles/FBFB_Abgabe-8.ged");

        $writer = new Writer($file);
        var_dump($writer->writeToString());
    }

    public function testSaveWrite(): void
    {
        $parser = new Parser();
        $file = $parser->parse("tests/stresstestfiles/FBFB_Abgabe-8.ged");

        $writer = new Writer($file);
        $writer->writeToFile("tests/output/test.ged");
    }
}