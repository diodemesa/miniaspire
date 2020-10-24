<?php

namespace spec\Predmond\Calculator;

use Predmond\Calculator\Markdown;
use Predmond\Calculator\Markdown\Writer;
use PhpSpec\ObjectBehavior;

class MarkdownSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Markdown::class);
    }

    function it_converts_plain_text_to_html_paragraphs()
    {
        $this->toHtml("Hi, there")->shouldReturn("<p>Hi, there</p>");
    }
    function it_outputs_converted_text(Writer $writer)
    {
        $this->beConstructedWith($writer);
        $writer->writeText("<p>Hi, there</p>")->shouldBeCalled();

        $this->outputHtml("Hi, there");
    }
}
