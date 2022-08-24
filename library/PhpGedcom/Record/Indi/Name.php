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

/**
 *
 */
class Name extends \PhpGedcom\Record implements \PhpGedcom\Record\Sourceable
{
    protected $_name = null;
    protected $_npfx = null;
    protected $_givn = null;
    protected $_nick = null;
    protected $_spfx = null;
    protected $_surn = null;
    protected $_nsfx = null;

    /**
     *
     */
    protected $_note = array();

    /**
     *
     */
    protected $_sour = array();

    /**
     *
     */
    public function addSour(\PhpGedcom\Record\SourRef $sour)
    {
        $this->_sour[] = $sour;
    }

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
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param null $name
     */
    public function setName($name): void
    {
        $this->_name = $name;
    }

    /**
     * @return null
     */
    public function getNpfx()
    {
        return $this->_npfx;
    }

    /**
     * @param null $npfx
     */
    public function setNpfx($npfx): void
    {
        $this->_npfx = $npfx;
    }

    /**
     * @return null
     */
    public function getGivn()
    {
        return $this->_givn;
    }

    /**
     * @param null $givn
     */
    public function setGivn($givn): void
    {
        $this->_givn = $givn;
    }

    /**
     * @return null
     */
    public function getNick()
    {
        return $this->_nick;
    }

    /**
     * @param null $nick
     */
    public function setNick($nick): void
    {
        $this->_nick = $nick;
    }

    /**
     * @return null
     */
    public function getSpfx()
    {
        return $this->_spfx;
    }

    /**
     * @param null $spfx
     */
    public function setSpfx($spfx): void
    {
        $this->_spfx = $spfx;
    }

    /**
     * @return null
     */
    public function getSurn()
    {
        return $this->_surn;
    }

    /**
     * @param null $surn
     */
    public function setSurn($surn): void
    {
        $this->_surn = $surn;
    }

    /**
     * @return null
     */
    public function getNsfx()
    {
        return $this->_nsfx;
    }

    /**
     * @param null $nsfx
     */
    public function setNsfx($nsfx): void
    {
        $this->_nsfx = $nsfx;
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
