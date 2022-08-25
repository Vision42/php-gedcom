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

namespace PhpGedcom\Record;

use \PhpGedcom\Record\Sourceable;

/**
 *
 */
class NoteRef extends \PhpGedcom\Record implements Sourceable
{
    /**
     *
     */
    protected $_isRef   = false;

    /**
     *
     */
    protected $_note    = '';

    /**
     *
     */
    protected $_sour = array();

    /**
     *
     */
    public function setIsReference($isReference = true)
    {
        $this->_isRef = $isReference;
    }

    /**
     *
     */
    public function getIsReference()
    {
        return $this->_isRef;
    }

    /**
     *
     */
    public function addSour(\PhpGedcom\Record\SourRef $sour)
    {
        $this->_sour[] = $sour;
    }

    /**
     * @return bool
     */
    public function isIsRef(): bool
    {
        return $this->_isRef;
    }

    /**
     * @param bool $isRef
     */
    public function setIsRef(bool $isRef): void
    {
        $this->_isRef = $isRef;
    }

    /**
     * @return string
     */
    public function getNote(): string
    {
        return $this->_note;
    }

    /**
     * @param string $note
     */
    public function setNote(string $note): void
    {
        $this->_note = $note;
    }

    /**
     * @return array
     */
    public function getSour(): array
    {
        return $this->_sour;
    }

    /**
     * @param array $sour
     */
    public function setSour(array $sour): void
    {
        $this->_sour = $sour;
    }

}
