<?php

namespace ProseMirror;

use HtmlToProseMirror\Renderer as JsonRenderer;
use ProseMirrorToHtml\Renderer as HtmlRenderer;

class ProseMirror
{
    protected $html;

    protected $json;

    public function html($value)
    {
        $this->html = $value;

        return $this;
    }

    public function json($value)
    {
        $this->json = $value;

        return $this;
    }

    public function toJson()
    {
        return (new JsonRenderer)->render($this->html);
    }

    public function toHtml()
    {
        return (new HtmlRenderer)->render($this->json);
    }
}
