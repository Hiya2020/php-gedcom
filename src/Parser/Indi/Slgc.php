<?php
/**
 * php-gedcom.
 *
 * php-gedcom is a library for parsing, manipulating, importing and exporting
 * GEDCOM 5.5 files in PHP 5.3+.
 *
 * @author          Kristopher Wilson <kristopherwilson@gmail.com>
 * @copyright       Copyright (c) 2010-2013, Kristopher Wilson
 * @license         MIT
 *
 * @link            http://github.com/mrkrstphr/php-gedcom
 */

namespaceGedcom\Parser\Indi;

class Slgc extends Lds
{
    public static function parseFamc($parser, $slgc)
    {
        $record = $parser->getCurrentLineRecord();
        $slgc->setFamc($parser->normalizeIdentifier($record[2]));
    }
}