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

*Margins(m) and Paddings(p)*




* `t`:  for classes that set` margin-top` or `padding-top`
* `b`:  for classes that set `margin-bottom` or `padding-bottom`
* `l`:  for classes that set `margin-left` or `padding-left`
* `r`:  for classes that set `margin-right` or `padding-right`
* `x`:  for classes that set both `*-left` and `*-right`
* `y`:  for classes that set both `*-top` and `*-bottom`

*Margins(m)*
* `m-0`: assigns `margin: 0` property
* `m-1x`: assigns `margin: 1rem` property
* `mt-1x`: assigns `margin-top: 1rem` property
* `mb-1x`: assigns `margin-bottom: 1rem` property
* `ml-1x`: assigns `margin-left: 1rem` property
* `mr-1x`: assigns `margin-right: 1rem` property
* `mx-1x`: assigns `margin-left: 1rem; margin-right: 1rem` property
* `my-1x`: assigns `margin-top: 1rem; margin-bottom: 1rem` property

* `m-x-25`: assigns `margin: 0.25rem` property
* `m-x-50`: assigns `margin: 0.5rem` property
* `m-x-75`: assigns `margin: 0.75rem` property

* `m-1x-25`: assigns `margin: 1.25rem` property
* `m-1x-50`: assigns `margin: 1.5rem` property
* `m-1x-75`: assigns `margin: 1.75rem` property
* `m-1x-*`: assigns `margin-*: 1.25rem` property

* `m-2x`: assigns `margin: 1.75rem` property
* `m-3x`: assigns `margin: 1.75rem` property
* `m-4x`: assigns `margin: 1.75rem` property

and variants `md`: `m*-md-*x`
....

*Paddings(m)*
* `p-0`: assigns `padding: 0` property
* `p-1x`: assigns `padding: 1rem` property
* `pt-1x`: assigns `padding-top: 1rem` property
* `pb-1x`: assigns `padding-bottom: 1rem` property
* `pl-1x`: assigns `padding-left: 1rem` property
* `pr-1x`: assigns `padding-right: 1rem` property
* `px-5`: assigns `padding-left: 1rem; padding-right: 1rem` property
* `py-1x`: assigns `padding-top: 1rem; padding-bottom: 1rem` property

* `p-x-25`: assigns `padding: 0.25rem` property
* `p-x-50`: assigns `padding: 0.5rem` property
* `p-x-75`: assigns `padding: 0.75rem` property

* `p-1x-25`: assigns `padding: 1.25rem` property
* `p-1x-50`: assigns `padding: 1.5rem` property
* `p-1x-75`: assigns `padding: 1.75rem` property
* `p-1x-*`: assigns `padding-*: 1.25rem` property

* `p-2x`: assigns `padding: 1.75rem` property
* `p-3x`: assigns `padding: 1.75rem` property
* `p-4x`: assigns `padding: 1.75rem` property

and variants `md`: `p*-md-*x`


#### CSS Helpers for Text

Text CSS Helpers contain set of text styling classes for text display and size.

*Text Alignment Responsive*

* `.text-left`: assigns `text-align: left` property
* `.text-right`: assigns `text-align: right` property
* `.text-center`: assigns `text-align: center` property

variants
* `.text-sm-*`: assigns `text-align: *` property
* `.text-md-*`: assigns `text-align: *` property
* `.text-lg-*`: assigns `text-align: *` property
* `.text-xlg-*`: assigns `text-align: *` property

*Text Alignment*

* `.text-justify`: assigns `font-align: justify` property
* `.text-nowrap`: assigns `font-align: nowrap` property

*Text Weight and italics*
* `.text-bold`: assigns `font-weight: bold` property
* `.text-normal`: assigns `font-weight: normal` property
* `.text-italic`: assigns `font-weight: italic` property

*Text Transform*
* `.text-uppercase`: assigns `font-transform: uppercase` property
* `.text-lowercase`: assigns `font-transform: lowercase` property
* `.text-capitalize`: assigns `font-transform: capitalize` property
* `.text-none`: assigns `font-transform: none` property



*Text Size*
* `.fs-1x`: assigns `font-size: 1em` property
* `.fs-1x-25`: assigns `font-size: 1.25em` property
* `.fs-1x-50`: assigns `font-size: 1.5em` property
* `.fs-1x-75`: assigns `font-size: 1.75em` property
...
...
...
* `.fs-5x`: assigns `font-size: 1.75em` property

and variants
* `sm`: `fs-sm-*x-*`
* `md`: `fs-md-*x-*`
* `lg`: `fs-lg-*x-*`
* `xlg`: `fs-xlg-*x-*`
...


#### CSS Helpers for Border Radius

*Border Radius*
* `.rounded-circle`: assigns `border-radius: 50%` property
* `.rounded-0`: assigns `border-radius: 0` property
* `.rounded-5`: assigns `border-radius: 5` property
* `.rounded-10`: assigns `border-radius: 10` property
* `.rounded-15`: assigns `border-radius: 15` property
* `.rounded-20`: assigns `border-radius: 20` property

* `.rounded-top`
* `.rounded-right`
* `.rounded-bottom`
* `.rounded-left`
* `.rounded-top-left`
* `.rounded-top-right`
* `.rounded-bottom-left`
* `.rounded-bottom-right`
* `.rounded-diagonal-1`
* `.rounded-diagonal-2`


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
