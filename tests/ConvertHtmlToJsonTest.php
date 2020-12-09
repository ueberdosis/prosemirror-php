<?php

namespace ProseMirror\Test;

use PHPUnit\Framework\TestCase;

class ConvertHtmlToJsonTest extends TestCase
{
    /** @test */
    public function html_is_rendered_to_json()
    {
        $json = (new \ProseMirror\ProseMirror)->html('<p>Example Text</p>')->toJson();

        $this->assertEquals($json, [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'paragraph',
                    'content' => [
                        [
                            'type' => 'text',
                            'text' => 'Example Text',
                        ],
                    ],
                ],
            ],
        ]);
    }
    /** @test */
    public function html_is_rendered_to_json_via_static_method()
    {
        $json = \ProseMirror\ProseMirror::htmlToJson('<p>Example Text</p>');

        $this->assertEquals($json, [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'paragraph',
                    'content' => [
                        [
                            'type' => 'text',
                            'text' => 'Example Text',
                        ],
                    ],
                ],
            ],
        ]);
    }
}
