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
class Date extends \PhpGedcom\Record
{
    protected $_date = null;
    protected $_time = null;

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
    public function getTime()
    {
        return $this->_time;
    }

    /**
     * @param null $time
     */
    public function setTime($time): void
    {
        $this->_time = $time;
    }

}
