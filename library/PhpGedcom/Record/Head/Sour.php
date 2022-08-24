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

namespace PhpGedcom\Record\Head;

/**
 *
 */
class Sour extends \PhpGedcom\Record
{
    /**
     *
     */
    protected $_sour = null;

    /**
     *
     */
    protected $_vers = null;

    /**
     *
     */
    protected $_name = null;

    /**
     *
     */
    protected $_corp = null;

    /**
     *
     */
    protected $_data = null;

    /**
     *
     * @param Sour\Corp $corp
     */
    public function setCorp(\PhpGedcom\Record\Head\Sour\Corp $corp)
    {
        $this->_corp = $corp;
    }

    /**
     *
     * @return Sour\Corp
     */
    public function getCorp()
    {
        return $this->_corp;
    }

    /**
     *
     * @param \PhpGedcom\Record\Head\Sour\Data $data
     */
    public function setData(\PhpGedcom\Record\Head\Sour\Data $data)
    {
        $this->_data = $data;
    }

    /**
     *
     * @return \PhpGedcom\Record\Head\Sour\Data
     */
    public function getData()
    {
        return $this->_data;
    }

    /**
     * @return null
     */
    public function getSour()
    {
        return $this->_sour;
    }

    /**
     * @param null $sour
     */
    public function setSour($sour): void
    {
        $this->_sour = $sour;
    }

    /**
     * @return null
     */
    public function getVers()
    {
        return $this->_vers;
    }

    /**
     * @param null $vers
     */
    public function setVers($vers): void
    {
        $this->_vers = $vers;
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

}
