<?php

namespace ProseMirror\Test;

class ConvertJsonToHtmlTest extends TestCase
{
    /** @test */
    public function html_is_rendered_to_json()
    {
        $html = (new \ProseMirror\ProseMirror)->json([
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
        ])->toHtml();

        $this->assertEquals($html, '<p>Example Text</p>');
    }
    /** @test */
    public function html_is_rendered_to_json_via_static_method()
    {
        $html = \ProseMirror\ProseMirror::jsonToHtml([
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

        $this->assertEquals($html, '<p>Example Text</p>');
    }
}
