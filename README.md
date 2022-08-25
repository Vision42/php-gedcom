# php-gedcom

## Requirements

* php-gedcom 1.0+ requires PHP 7.4 (or later).

## Installation

There are two ways of installing php-gedcom.

### Composer

To install php-gedcom in your project using composer, simply add the following require line to your project's `composer.json` file:

    {
        "require": {
            "vision42/php-gedcom": "1.0.*"
        }
    }

### Usage

To parse a GEDCOM file and load it into a collection of PHP Objects, simply instantiate a new Parser object and pass it the file name to parse. The resulting Gedcom object will contain all the information stored within the supplied GEDCOM file:

```php
$parser = new \PhpGedcom\Parser();
$gedcom = $parser->parse('tmp\gedcom.ged');

foreach ($gedcom->getIndi() as $individual) {
    echo $individual->getId() . ': ' . current($individual->getName())->getSurn() .
        ', ' . current($indi->$individual())->getGivn();
}

//export to gedcom file
$writer = new Writer($gedcom);
$writer->writeToFile("tests/output/test.ged");
```
