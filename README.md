> We need your support to maintain this package. 💖 https://github.com/sponsors/ueberdosis

# ProseMirror PHP

Takes ProseMirror JSON and outputs HTML.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ueberdosis/prosemirror-to-html.svg)](https://packagist.org/packagesueberdosis/prosemirror-to-html)
[![Integrate](https://github.com/ueberdosis/html-to-prosemirror/workflows/Integrate/badge.svg?branch=main)](https://github.com/ueberdosis/html-to-prosemirror/actions)
[![Total Downloads](https://img.shields.io/packagist/dt/ueberdosis/prosemirror-to-html.svg?style=flat-square)](https://packagist.org/packages/ueberdosis/prosemirror-to-html)
[![Sponsor](https://img.shields.io/static/v1?label=Sponsor&message=%E2%9D%A4&logo=GitHub)](https://github.com/sponsors/ueberdosis)

## Installation

```bash
composer require ueberdosis/prosemirror-to-html
```

## Usage

Convert HTML to ProseMirror JSON:
```php
(new \ProseMirror\ProseMirror)->html('<p>Example Text</p>')->toJson();
```

Output:
```json
{
    "type": "doc",
    "content": [
        {
            "type": "paragraph",
            "content": [
                {
                    "type": "text",
                    "text": "Example Text"
                }
            ]
        }
    ]
}
```

Convert ProseMirror JSON to HTML:
```php
(new \ProseMirror\ProseMirror)->json([
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
```

```html
<p>Example Text</p>
```


## Contributing

Pull Requests are welcome.

## Credits

- [Hans Pagel](https://github.com/hanspagel)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
