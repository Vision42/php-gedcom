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

namespace PhpGedcom\Record\Fam;

use \PhpGedcom\Record\Objectable;
use \PhpGedcom\Record\Sourceable;
use \PhpGedcom\Record\Noteable;

/**
 *
 */
class Even extends \PhpGedcom\Record implements Objectable, Sourceable, Noteable
{
    protected $_type = null;
    protected $_date = null;
    protected $_plac = null;
    protected $_caus = null;
    protected $_age  = null;

    protected $_addr = null;

    protected $_phon = array();

    protected $_agnc = null;

    protected $_husb = null;
    protected $_wife = null;

    /**
     *
     */
    protected $_obje = array();

    /**
     *
     */
    protected $_sour = array();

    /**
     *
     */
    protected $_note = array();

    /**
     *
     */
    public function addPhon(\PhpGedcom\Record\Phon $phon)
    {
        $this->_phon[] = $phon;
    }

    /**
     *
     */
    public function addObje(\PhpGedcom\Record\ObjeRef $obje)
    {
        $this->_obje[] = $obje;
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
    public function addNote(\PhpGedcom\Record\NoteRef $note)
    {
        $this->_note[] = $note;
    }

    /**
     * @return null
     */
    public function getType()
    {
        return $this->_type;
    }

    /**
     * @param null $type
     */
    public function setType($type): void
    {
        $this->_type = $type;
    }

    /**
     * @return null
     */
    public function getDate()
    {
        return $this->_date;
    }

    /**
     * @param null $date
     */
    public function setDate($date): void
    {
        $this->_date = $date;
    }

    /**
     * @return null
     */
    public function getPlac()
    {
        return $this->_plac;
    }

    /**
     * @param null $plac
     */
    public function setPlac($plac): void
    {
        $this->_plac = $plac;
    }

    /**
     * @return null
     */
    public function getCaus()
    {
        return $this->_caus;
    }

    /**
     * @param null $caus
     */
    public function setCaus($caus): void
    {
        $this->_caus = $caus;
    }

    /**
     * @return null
     */
    public function getAge()
    {
        return $this->_age;
    }

    /**
     * @param null $age
     */
    public function setAge($age): void
    {
        $this->_age = $age;
    }

    /**
     * @return null
     */
    public function getAddr()
    {
        return $this->_addr;
    }

    /**
     * @param null $addr
     */
    public function setAddr($addr): void
    {
        $this->_addr = $addr;
    }

    /**
     * @return array
     */
    public function getPhon(): array
    {
        return $this->_phon;
    }

    /**
     * @param array $phon
     */
    public function setPhon(array $phon): void
    {
        $this->_phon = $phon;
    }

    /**
     * @return null
     */
    public function getAgnc()
    {
        return $this->_agnc;
    }

    /**
     * @param null $agnc
     */
    public function setAgnc($agnc): void
    {
        $this->_agnc = $agnc;
    }

    /**
     * @return null
     */
    public function getHusb()
    {
        return $this->_husb;
    }

    /**
     * @param null $husb
     */
    public function setHusb($husb): void
    {
        $this->_husb = $husb;
    }

    /**
     * @return null
     */
    public function getWife()
    {
        return $this->_wife;
    }

    /**
     * @param null $wife
     */
    public function setWife($wife): void
    {
        $this->_wife = $wife;
    }

    /**
     * @return array
     */
    public function getObje(): array
    {
        return $this->_obje;
    }

    /**
     * @param array $obje
     */
    public function setObje(array $obje): void
    {
        $this->_obje = $obje;
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
