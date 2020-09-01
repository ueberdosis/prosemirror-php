> We need your support to maintain this package. 💖 https://github.com/sponsors/ueberdosis

# ProseMirror PHP

This package enables you to work with ProseMirro JSON in PHP. Convert it to HTML, or convert HTML to ProseMirror compatible JSON.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ueberdosis/prosemirror-php.svg)](https://packagist.org/packages/ueberdosis/prosemirror-php)
[![Integrate](https://github.com/ueberdosis/prosemirror-php/workflows/Integrate/badge.svg?branch=main)](https://github.com/ueberdosis/prosemirror-php/actions)
[![Total Downloads](https://img.shields.io/packagist/dt/ueberdosis/prosemirror-php.svg?style=flat-square)](https://packagist.org/packages/ueberdosis/prosemirror-php)
[![Sponsor](https://img.shields.io/static/v1?label=Sponsor&message=%E2%9D%A4&logo=GitHub)](https://github.com/sponsors/ueberdosis)

## Installation

```bash
composer require ueberdosis/prosemirror-php
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

Output:
```html
<p>Example Text</p>
```


## Contributing

Pull Requests are welcome.

## Credits

- [Hans Pagel](https://github.com/hanspagel)
- [All Contributors](../../contributors)

## Related Packages
- [ueberdosis/html-to-prosemirror](https://github.com/ueberdosis/html-to-prosemirror)
- [ueberdosis/prosemirror-to-html](https://github.com/ueberdosis/prosemirror-to-html)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
