## Unicode block checker

## Requirements
-  PHP >= 7.0
-  JSON PHP mbstring

## Install
```bash
composer require benemohamed/Unicodeblock
```

## Usage

```php
<?php
// Import Unicodeblock
use Benemohamed\UnicodeBlock;

var_dump(UnicodeBlock::Arabic('يبيسب'));

/*
 -- outputs:
 array(5) {
  'is' =>
  bool(true)
  'block1' =>
  int(1536)
  'block2' =>
  int(1791)
  'Unicode_name' =>
  string(6) "Arabic"
  'check_list' =>
  array(1) {
    [0] =>
    array(255) {
      (more elements)...
      (more elements)...

      [118] =>
      string(2) "ٶ"
      [119] =>
      string(2) "ٷ"
      [120] =>
      string(2) "ٸ"
      [121] =>
      string(2) "ٹ"
      [122] =>
      string(2) "ٺ"
      [123] =>
      string(2) "ٻ"
      [124] =>
      string(2) "ټ"
      [125] =>
      string(2) "ٽ"
      [126] =>
      string(2) "پ"
      [127] =>
      string(2) "ٿ"

      (more elements)...
      (more elements)...
    }
  }
}
*/

```

>  All methods return a array

## List methods

```php
<?php
use Benemohamed\UnicodeBlock;

var_dump(get_class_methods(UnicodeBlock::class));

```
> Supported all Unicode Block
> Total Block 280

## Data
data Unicode blocks[Source](https://wiki.contextgarden.net/List_of_Unicode_blocks)

https://www.php.net/manual/en/mbstring.supported-encodings.php
