# SecurityEncode
Security Encode cannot decryption for Pocketmine-MP
## How to use?
Write this line at the top of your plugin:
```php
use LootSpace369\SecurityEncode\encode;
```
### Example
Array encoding by:
```php
$array = ["a","b"];
$encode = (new encode($array))->run();
```
String encoding by:
```php
$str = "LootSpace369";
$encode = (new encode($str))->run();
```
