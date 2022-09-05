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

use PhpGedcom\Record\Fam\Even;

class Fam
{
    public static function writeFAM($fams){
        $text = "";

        /** @var \PhpGedcom\Record\Fam $fam */
        foreach ($fams as $key => $fam) {
            $text .= "0 @$key@ FAM\n";
            $text .= "1 HUSB @" . $fam->getHusb() . "@\n";
            $text .= "1 WIFE @" . $fam->getWife() . "@\n";

            foreach ($fam->getEven() as $event){
                $text .= "1 " . $event->getType() . "\n";
                $text .= $event->getDate() ? "2 DATE " . $event->getDate() . "\n" : "";
                $text .= $event->getPlac() ? "2 PLAC " . $event->getPlac()->getPlac() . "\n" : "";
            }

            foreach ($fam->getChil() as $child){
                $text .= "1 CHIL @$child@\n";
            }
        }

        return $text;
    }
}