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

/**
 *
 *
 */
class Fam extends \PhpGedcom\Record implements Noteable, Sourceable, Objectable
{
    /**
     *
     */
    protected $_id   = null;

    /**
     *
     */
    protected $_chan = null;

    /**
     *
     */
    protected $_husb = null;

    /**
     *
     */
    protected $_wife = null;

    /**
     *
     */
    protected $_nchi = null;

    /**
     *
     */
    protected $_chil = array();

    /**
     *
     */
    protected $_even = array();

    /**
     *
     */
    protected $_slgs = array();

    /**
     *
     */
    protected $_subm = array();

    /**
     *
     */
    protected $_refn = array();

    /**
     *
     */
    protected $_rin  = null;

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
    protected $_obje = array();

    /**
     *
     */
    public function addEven(\PhpGedcom\Record\Fam\Even $even)
    {
        $this->_even[] = $even;
    }

    /**
     *
     */
    public function addSlgs(\PhpGedcom\Record\Fam\Slgs $slgs)
    {
        $this->_slgs[] = $slgs;
    }

    /**
     *
     *
     */
    public function addRefn(\PhpGedcom\Record\Refn $refn)
    {
        $this->_refn[] = $refn;
    }

    /**
     *
     */
    public function addNote(\PhpGedcom\Record\NoteRef $note)
    {
        $this->_note[] = $note;
    }

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
    public function addObje(\PhpGedcom\Record\ObjeRef $obje)
    {
        $this->_obje[] = $obje;
    }

    /**
     * @return null
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @return null
     */
    public function getChan()
    {
        return $this->_chan;
    }

    /**
     * @return null
     */
    public function getHusb()
    {
        return $this->_husb;
    }

    /**
     * @return null
     */
    public function getWife()
    {
        return $this->_wife;
    }

    /**
     * @return null
     */
    public function getNchi()
    {
        return $this->_nchi;
    }

    /**
     * @return array
     */
    public function getChil(): array
    {
        return $this->_chil;
    }

    /**
     * @return array
     */
    public function getEven(): array
    {
        return $this->_even;
    }

    /**
     * @return array
     */
    public function getSlgs(): array
    {
        return $this->_slgs;
    }

    /**
     * @return array
     */
    public function getSubm(): array
    {
        return $this->_subm;
    }

    /**
     * @return array
     */
    public function getRefn(): array
    {
        return $this->_refn;
    }

    /**
     * @return null
     */
    public function getRin()
    {
        return $this->_rin;
    }

    /**
     * @return array
     */
    public function getNote(): array
    {
        return $this->_note;
    }

    /**
     * @return array
     */
    public function getSour(): array
    {
        return $this->_sour;
    }

    /**
     * @return array
     */
    public function getObje(): array
    {
        return $this->_obje;
    }

    /**
     * @param null $id
     */
    public function setId($id): void
    {
        $this->_id = $id;
    }

    /**
     * @param null $chan
     */
    public function setChan($chan): void
    {
        $this->_chan = $chan;
    }

    /**
     * @param null $husb
     */
    public function setHusb($husb): void
    {
        $this->_husb = $husb;
    }

    /**
     * @param null $wife
     */
    public function setWife($wife): void
    {
        $this->_wife = $wife;
    }

    /**
     * @param null $nchi
     */
    public function setNchi($nchi): void
    {
        $this->_nchi = $nchi;
    }

    /**
     * @param array $chil
     */
    public function setChil(array $chil): void
    {
        $this->_chil = $chil;
    }

    /**
     * @param string $indiId
     * @return void
     */
    public function addChilToList(string $indiId): void
    {
        $this->_chan[] = $indiId;
    }

    /**
     * @param array $even
     */
    public function setEven(array $even): void
    {
        $this->_even = $even;
    }

    /**
     * @param array $slgs
     */
    public function setSlgs(array $slgs): void
    {
        $this->_slgs = $slgs;
    }

    /**
     * @param array $subm
     */
    public function setSubm(array $subm): void
    {
        $this->_subm = $subm;
    }

    /**
     * @param array $refn
     */
    public function setRefn(array $refn): void
    {
        $this->_refn = $refn;
    }

    /**
     * @param null $rin
     */
    public function setRin($rin): void
    {
        $this->_rin = $rin;
    }

    /**
     * @param array $note
     */
    public function setNote(array $note): void
    {
        $this->_note = $note;
    }

    /**
     * @param array $sour
     */
    public function setSour(array $sour): void
    {
        $this->_sour = $sour;
    }

    /**
     * @param array $obje
     */
    public function setObje(array $obje): void
    {
        $this->_obje = $obje;
    }

}
