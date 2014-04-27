<?php
/**
 * Sastrawi (https://github.com/sastrawi/sastrawi)
 *
 * @link      http://github.com/sastrawi/sastrawi for the canonical source repository
 * @license   https://github.com/sastrawi/sastrawi/blob/master/LICENSE The MIT License (MIT)
 */

namespace Sastrawi\Stemmer\Context;

interface RemovalInterface
{
    /**
     * @return Visitor\VisitorInterface
     */
    public function getVisitor();

    /**
     * @return string
     */
    public function getSubject();

    /**
     * @return string
     */
    public function getResult();

    /**
     * @return string
     */
    public function getRemovedPart();

    /**
     * @return string
     */
    public function getAffixType();
}
