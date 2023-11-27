Typography 0.8.20
=================
Typographic enhancements.

<p align="center"><img src="SCREENSHOT.png?raw=true" alt="Screenshot"></p>

## How to install an extension

[Download ZIP file](https://github.com/GiovanniSalmeri/yellow-typography/archive/refs/heads/main.zip) and copy it into your `system/extensions` folder. [Learn more about extensions](https://github.com/annaesvensson/yellow-update).

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
    <?php echo $this->yellow->page->getContentHtml() ?>
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

`TypographyTitleParser` = how titles are styled, `markdown`, `safemarkdown` without HTML, `none`  
`TypographySubstitutions` = which characters will be converted (`space` is useful only in French texts)  
`TypographyHyphenation` = enable hyphenation  

## Acknowledgements

This extension includes [Hyphenopoly 4.12.0](https://github.com/mnater/Hyphenopoly) by Mathias Nater. Thank you for the good work.

## Developer

Giovanni Salmeri. [Get help](https://datenstrom.se/yellow/help/).
