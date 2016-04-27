<?php

/**
 * This file is part of Pachico/MarkdownWriter. (https://github.com/pachico/markdownwriter)
 *
 * @link https://github.com/pachico/markdownwriter for the canonical source repository
 * @copyright Copyright (c) 2016 Mariano F.co Benítez Mulet. (https://github.com/pachico/)
 * @author Mariano F.co Benítez Mulet <pachicodev@gmail.com>
 * @license https://raw.githubusercontent.com/pachico/markdownwriter/master/LICENSE.md MIT
 */

namespace Pachico\MarkdownWriter\Element;

/**
 * Blockquote element
 *
 * @see http://daringfireball.net/projects/markdown/syntax#blockquote
 */
class Blockquote implements ElementInterface
{

    /**
     * @var string Content of blockquote
     */
    private $content;

    /**
     * Creates instance of Blockquote
     *
     * @param string $content Content of blockquote
     */
    public function __construct($content)
    {
        $this->content = trim($content);
    }

    /**
     * {@inheritdoc}
     */
    public function toMarkDown()
    {
        return '> ' . $this->content . PHP_EOL . PHP_EOL;
    }
}
