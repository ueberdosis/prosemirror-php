<?php

namespace ProseMirror\Test;

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
}
