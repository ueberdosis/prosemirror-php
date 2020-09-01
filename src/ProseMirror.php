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
        return self::htmlToJson($this->html);
    }

    public function toHtml()
    {
        return self::jsonToHtml($this->json);
    }

    public static function jsonToHtml($value)
    {
        return (new HtmlRenderer)->render($value);
    }

    public static function htmlToJson($value)
    {
        return (new JsonRenderer)->render($value);
    }
}
