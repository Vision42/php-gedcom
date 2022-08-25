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
class Famc extends \PhpGedcom\Record implements Noteable
{
    protected $_famc = null;
    protected $_pedi = null;

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
    public function getFamc()
    {
        return $this->_famc;
    }

    /**
     * @param null $famc
     */
    public function setFamc($famc): void
    {
        $this->_famc = $famc;
    }

    /**
     * @return null
     */
    public function getPedi()
    {
        return $this->_pedi;
    }

    /**
     * @param null $pedi
     */
    public function setPedi($pedi): void
    {
        $this->_pedi = $pedi;
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
