# Helper CSS

Common CSS helper classes.

## Usage

Include `css/helper-css.min.css` style in your page and start using css helper classes.

### CSS Helper Classes

CSS helper classes: Alignments, Display, Text Aling, Margins, Paddings, Border Radius, Rotates

#### CSS Helpers for margin and Padding

All _margin_ and _padding_ have properties for distances 0, .25rem(*-1), .5rem(*-2), 1rem(*-3), 1.5rem(*-4), 3rem(*-5).

Margin classes starts with `m-`, padding classes starts `p-`.

Following is the number that represents space in pixels and (optional) direction. Direction can be `t`, `l`, `r` and `b`.

Example:

*Margins(m) and Paddings(p)* BY BOOTSTRAP

* `t`:  for classes that set` margin-top` or `padding-top`
* `b`:  for classes that set `margin-bottom` or `padding-bottom`
* `l`:  for classes that set `margin-left` or `padding-left`
* `r`:  for classes that set `margin-right` or `padding-right`
* `x`:  for classes that set both `*-left` and `*-right`
* `y`:  for classes that set both `*-top` and `*-bottom`

*Margins(m)*

Where size is one of:

* `0` - for classes that eliminate the `margin` or `padding` by setting it to 0
* `1` - (by default) for classes that set the `margin` or `padding` to `$spacer * .25`
* `2` - (by default) for classes that set the `margin` or `padding` to `$spacer * .5`
* `3` - (by default) for classes that set the `margin` or `padding` to `$spacer`
* `4` - (by default) for classes that set the `margin` or `padding` to `$spacer * 1.5`
* `5` - (by default) for classes that set the `margin` or `padding` to `$spacer * 3`

auto - for classes that set the margin to auto

for example($space = 1rem by default)
* `m-0`: assigns `margin: 0` property

* `m-1`: assigns `margin: 0.25rem` property
* `mt-1`: assigns `margin-top: 0.25rem` property
* `mb-1`: assigns `margin-bottom: 0.25rem` property
* `ml-1`: assigns `margin-left: 0.25rem` property
* `mr-1`: assigns `margin-right: 0.25rem` property
* `mx-1`: assigns `margin-left: 0.25rem; margin-right: 0.25rem` property
* `my-1`: assigns `margin-top: 0.25rem; margin-bottom: 0.25rem` property
...
* `m-2`: assigns `margin: 0.5rem` property
* `m-3`: assigns `margin: 1rem` property
* `m-4`: assigns `margin: 1.5rem` property
* `m-5`: assigns `margin: 3rem` property

and variants `md`: `m*-md-*`
....

*Paddings(m)*

* `p-0`: assigns `padding: 0` property

* `p-1`: assigns `padding: 0.25rem` property
* `pt-1`: assigns `padding-top: 0.25rem` property
* `pb-1`: assigns `padding-bottom: 0.25rem` property
* `pl-1`: assigns `padding-left: 0.25rem` property
* `pr-1`: assigns `padding-right: 0.25rem` property
* `px-1`: assigns `padding-left: 0.25rem; padding-right: 0.25rem` property
* `py-1`: assigns `padding-top: 0.25rem; padding-bottom: 0.25rem` property
...
* `p-2`: assigns `padding: 0.5rem` property
* `p-3`: assigns `padding: 1rem` property
* `p-4`: assigns `padding: 1.5rem` property
* `p-5`: assigns `padding: 3rem` property
* `p-5`: assigns `padding: 3.5rem` property

and variants `md`: `p*-md-*`
....


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
* `.fs-4x`: assigns `font-size: 4em` property

and variants
* `sm`: `fs-sm-*x-*`
* `md`: `fs-md-*x-*`
* `lg`: `fs-lg-*x-*`
* `xlg`: `fs-xlg-*x-*`
...


#### CSS Helpers for Border Radius

*Border Radius*
* `.radius-circle`: assigns `border-radius: 50%` property
* `.radius-sm`: assigns `border-radius: .125rem` property
* `.radius`: assigns `border-radius: .25rem` property
* `.radius-md`: assigns `border-radius: 0.5rem` property
* `.radius-lg`: assigns `border-radius: 1rem` property
* `.radius-0`: assigns `border-radius: 0` property
* `.radius-x`: assigns custom  `border-radius: x` property

* `.radius-top`
* `.radius-right`
* `.radius-bottom`
* `.radius-left`
* `.radius-top-left`
* `.radius-top-right`
* `.radius-bottom-left`
* `.radius-bottom-right`
* `.radius-diagonal-1`
* `.radius-diagonal-2`


#### CSS Helpers for Rotates

*Transform*
* `.rotate-0`: assigns `transform: rotate(0deg)` property
* `.rotate-x-0`: assigns `transform: rotate(0deg)` property
* `.rotate-y-0`: assigns `transform: rotate(0deg)` property
* `.rotate-90`: assigns `transform: rotate(90deg)` property
* `.rotate-x-90`: assigns `transform: rotate(90deg)` property
* `.rotate-y-90`: assigns `transform: rotate(90deg)` property
* `.rotate-180`: assigns `transform: rotate(180deg)` property
* `.rotate-x-180`: assigns `transform: rotate(180deg)` property
* `.rotate-y-180`: assigns `transform: rotate(180deg)` property
* `.rotate-270`: assigns `transform: rotate(270deg)` property
* `.rotate-x-270`: assigns `transform: rotate(270deg)` property
* `.rotate-y-270`: assigns `transform: rotate(180deg)` property
* `.rotate-360`: assigns `transform: rotate(360deg)` property
* `.rotate-x-360`: assigns `transform: rotate(360deg)` property
* `.rotate-y-360`: assigns `transform: rotate(360deg)` property

---

As any other classes, helper classes can be combined together.

### Usage example:

For given `div` element:

```
<div class="m-all-20 text-center p-t-10 fs-2x-sm">
    ...
</div>
```
