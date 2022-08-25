<?php

/**
 * php-gedcom
 *
 * php-gedcom is a library for parsing, manipulating, importing and exporting
 * GEDCOM 5.5 files in PHP 5.3+.
 *
 * @author          Kristopher Wilson <kristopherwilson@gmail.com>
 * @copyright       Copyright (c) 2010-2013, Kristopher Wilson
 * @package         php-gedcom
 * @license         MIT
 * @link            http://github.com/mrkrstphr/php-gedcom
 */

namespace PhpGedcom\Record\Indi;

use \PhpGedcom\Record\Noteable;

/**
 *
 */
class Fams extends \PhpGedcom\Record implements Noteable
{
    /**
     *
     */
    protected $_fams = null;

    /**
     *
     */
    protected $_note = array();

    /**
     *
     */
    public function addNote(\PhpGedcom\Record\NoteRef $note)
    {
        $this->_note[] = $note;
    }

    /**
     * @return null
     */
    public function getFams()
    {
        return $this->_fams;
    }

    /**
     * @param null $fams
     */
    public function setFams($fams): void
    {
        $this->_fams = $fams;
    }

    /**
     * @return array
     */
    public function getNote(): array
    {
        return $this->_note;
    }

    /**
     * @param array $note
     */
    public function setNote(array $note): void
    {
        $this->_note = $note;
    }

}
