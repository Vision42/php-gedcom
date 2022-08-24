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

namespace PhpGedcom\Record\Head\Sour;

/**
 *
 */
class Corp extends \PhpGedcom\Record
{
    protected $_corp = null;
    protected $_addr = null;

    protected $_phon = array();

    /**
     *
     *
     */
    public function addPhon($phon)
    {
        $this->_phon[] = $phon;
    }

    /**
     * @return null
     */
    public function getCorp()
    {
        return $this->_corp;
    }

    /**
     * @param null $corp
     */
    public function setCorp($corp): void
    {
        $this->_corp = $corp;
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

}
