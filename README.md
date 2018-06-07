# Helper CSS

Common CSS helper classes.

## Usage

Include `css/helper-css.min.css` style in your page and start using css helper classes.

### CSS Helper Classes

CSS helper classes: Alignments, Display, Text Aling, Margins, Paddings, Border Radius, Rotates

#### CSS Helpers for margin and Padding

All _margin_ and _padding_ have properties for distances 0, 5, 10, 15, 20, 30, 40, 50 px.

Margin classes starts with `m-`, padding classes starts `p-`.

Following is the number that represents space in pixels and (optional) direction. Direction can be `t`, `l`, `r` and `b`.

Example:

*Margins*
* `m-0`: assigns `margin: 0` property
* `m-all-5`: assigns `margin: 5px` property
* `m-t-5`: assigns `margin-top: 5px` property
* `m-r-5`: assigns `margin-right: 5px` property
* `m-b-5`: assigns `margin-bottom: 5px` property
* `m-l-5`: assigns `margin-left: 5px` property
* `m-t-b-5`: assigns `margin-top: 5px; margin-bottom: 5px` property
* `m-l-r-5`: assigns `margin-left: 5px; margin-right: 5px` property
* `m-x-5`: assigns `margin: 5px 0` property
* `m-y-5`: assigns `margin: 0 5px` property
...

*Paddings*
* `p-0`: assigns `padding: 0` property
* `p-all-5`: assigns `padding: 5px` property
* `p-t-5`: assigns `padding-top: 5px` property
* `p-r-5`: assigns `padding-right: 5px` property
* `p-b-5`: assigns `padding-bottom: 5px` property
* `p-l-5`: assigns `padding-left: 5px` property
* `p-t-b-5`: assigns `padding-top: 5px; padding-bottom: 5px` property
* `p-l-r-5`: assigns `padding-left: 5px; padding-right: 5px` property
* `p-x-5`: assigns `padding: 5px 0` property
* `p-y-5`: assigns `padding: 0 5px` property
...


#### CSS Helpers for Text

Text CSS Helpers contain set of text styling classes for text display and size.

*Text Align*

* `.text-left`: assigns `text-align: left` property
* `.text-right`: assigns `text-align: right` property
* `.text-center`: assigns `text-align: center` property
* `.text-justify`: assigns `font-align: justify` property

*Text Style*
* `.text-bold`: assigns `font-weight: bold` property
* `.text-normal`: assigns `font-weight: normal` property
* `.text-italic`: assigns `font-weight: italic` property

*Text Transform*
* `.text-upper`: assigns `font-transform: uppercase` property
* `.text-lower`: assigns `font-transform: lowercase` property
* `.text-capitalize`: assigns `font-transform: capitalize` property
* `.text-none`: assigns `font-transform: none` property



*Text Size*
* `.fs-1x`: assigns `font-size: 1em` property
* `.fs-1x-sm`: assigns `font-size: 1.25em` property
* `.fs-1x-md`: assigns `font-size: 1.5em` property
* `.fs-1x-lg`: assigns `font-size: 1.75em` property
...


#### CSS Helpers for Border Radius

*Border Radius*
* `.b-rounded`: assigns `border-radius: 50%` property
* `.b-r-0`: assigns `border-radius: 0` property
* `.b-r-4`: assigns `border-radius: 4` property
* `.b-r-8`: assigns `border-radius: 8` property
* `.b-r-10`: assigns `border-radius: 10` property
* `.b-r-15`: assigns `border-radius: 15` property


#### CSS Helpers for Rotates

*Transform*
* `.rotate-45`: assigns `transform: rotate(45deg)` property
* `.rotate-90`: assigns `transform: rotate(90deg)` property
* `.rotate-180`: assigns `transform: rotate(180deg)` property
* `.rotate-270`: assigns `transform: rotate(270deg)` property

---

As any other classes, helper classes can be combined together.

### Usage example:

For given `div` element:

```
<div class="m-all-20 text-center p-t-10 fs-2x-sm">
    ...
</div>
```
