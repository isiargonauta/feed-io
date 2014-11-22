<?php
/*
 * This file is part of the feed-io package.
 *
 * (c) Alexandre Debril <alex.debril@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FeedIo\Parser\Rule;


use FeedIo\Feed\ItemInterface;
use FeedIo\Parser\RuleAbstract;

class OptionalField extends RuleAbstract
{

    const NODE_NAME = 'default';

    /**
     * @param ItemInterface $item
     * @param \DOMElement $element
     * @return $this
     */
    public function set(ItemInterface $item, \DOMElement $element)
    {
        $item->getOptionalFields()->set($element->nodeName, $element->nodeValue);

        return $this;
    }

}