# Button

```html
<x-button
    color="red"
    icon="trash"
    icon-set="heroicon"
    icon-side="left"
    content="Delete your account"
/>
```

* `color`: required, the color must be one of tailwind's colors (teal, orange, indigo...), it can also be a custom color as long as it follows the same format.
* `icon`: optional, refer to the [icon component documentation]()
* `icon-set`:  optional, defaults to heroicon, refer to the [icon component documentation]()
* `icon-side`: optional, defauts to left, places the icon either at the left or the right side of the content
* `content`: optional, defaults to the main slot's content, it's like a slot but for raw text only.

### Disabled state
The button automatically looks disabled by using the `disabled` attribute, no additional work needed.

### Alpine
The button is not an alpine component but can be converted just by adding the standard `x-data`. We also bind a reference on the icon and the content:

* `$refs.icon`
* `$refs.content`