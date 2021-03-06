Typography 0.8.20
=================
Typographic enhancements.

<p align="center"><img src="typography-screenshot.png?raw=true" width="795" height="836" alt="Screenshot"></p>

## How to style the title of the page

Change in the template (e.g. in `layouts/default.html`) `$this->yellow->page->getHtml("titleContent")` with `$this->yellow->page->get("titleContent")` and use markdown to style the title of the page.

## How to insert proper quotations marks and other characters

Write `"` and `'` for quotations marks, `'` for apostrophe, `...` for ellipsis, `--` and `---` for dashes, `\'` for prime, `\"` for double prime. These characters will be converted to the proper typographic ones.

## How to hyphenate words at end of line

Add in the stylesheet the property `hyphens: auto`. With this extension the property is implied also when `text-align: justify` is set. Hyphenation will occur even in browsers that do not natively support it.

## Examples

Content file with styled title:

    ---
    Title: We make things for **people**
    Published: 2020-04-07
    Author: Datenstrom
    ---

    We think people should be in the centre. Machines should support you.

Template for styled titles:

    <?php $this->yellow->layout("header") ?>
    <div class="content">
    <div class="main" role="main">
    <h1><?php echo $this->yellow->page->get("titleContent") ?></h1>
    <?php echo $this->yellow->page->getContent() ?>
    </div>
    </div>
    <?php $this->yellow->layout("footer") ?>

Text with quotation marks and other special characters:

    "We have three guidelines for our products..." she said. 
    "Technology is useful in function and aesthetic. Technology 
    is simple to use and adjust. Technology is made for people 
    -- like you".

Stylesheet rule for hyphenating words when needed at end of line:

    .content p {
        text-align: justify;
        hyphens: auto;
    }

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`TypographyTitleParser` (default `safemarkdown`) = how titles are styled (possible values: `markdown`, `safemarkdown` without HTML, `none`)  
`TypographySubstitutions` (default `quotes, apostrophe, dash, dots, space`) = which characters will be converted (`space` is useful only in French texts)  
`TypographyHyphenation` (default `1`) = enable hyphenation  

## Installation

[Download extension](https://github.com/GiovanniSalmeri/yellow-typography/archive/master.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

This extension uses [Hyphenopoly 4.12.0](https://github.com/mnater/Hyphenopoly) by Mathias Nater.

## Developer

Giovanni Salmeri. [Get help](https://github.com/GiovanniSalmeri/yellow-autopublish/issues).
