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

use PhpGedcom\Record\Indi\Name;
use PhpGedcom\Record\NoteRef;

class Indi
{
    public static function writeIndi(array $indi): string
    {
        $text = "";

        /** @var $value \PhpGedcom\Record\Indi */
        foreach ($indi as $key => $value) {
            $text .= "0 @$key@ INDI\n";
            $text .= "1 RIN " . $value->getRin() . "\n";

            /** @var $name Name */
            foreach ($value->getName() as $name) {
                $text .= $name->getName() ? "1 NAME " . $name->getName() . "\n" : "";
                $text .= $name->getSurn() ? "2 SURN " . $name->getSurn() . "\n" : "";
                $text .= $name->getGivn() ? "2 GIVN " . $name->getGivn() . "\n" : "";
                $text .= $name->getNpfx() ? "2 NPFX " . $name->getNpfx() . "\n" : "";
                $text .= $name->getNsfx() ? "2 NSFX " . $name->getNsfx() . "\n" : "";
            }

            $text .= "1 SEX " . $value->getSex() . "\n";

            $famc = $value->getFamc();
            if (count($famc)) {
                $text .= "1 FAMC @" . $famc[0]->getFamc() . "@\n";
            }

            foreach ($value->getEven() as $event) {
                $text .= "1 " . $event->getType() . "\n";
                $text .= $event->getDate() ?  "2 DATE " . $event->getDate() . "\n" : "";
                $text .= $event->getPlac() ? "2 PLAC " . $event->getPlac()->getPlac() . "\n" : "";
            }

            /** @var $note NoteRef */
            foreach ($value->getNote() as $note) {
                $content = explode("\n", $note->getNote());
                $text .= "1 NOTE $content[0] \n";
                for ($i = 1; $i < sizeof($content); $i++) {
                    $text .= "2 CONT $content[$i]\n";
                }
            }

            if ($value->getChan()) {
                $text .= "1 CHAN\n";
                $text .= "2 DATE " . $value->getChan()->getDate() . "\n";
                $text .= "2 TIME " . $value->getChan()->getTime() . "\n";
            }

            $text .= count($value->getFams()) ? "1 FAMS @" . $value->getFams()[0]->getFams() . "@\n" : "";
        }

        return $text;
    }
}