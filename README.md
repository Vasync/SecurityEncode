# SecurityEncode
Security Encode cannot decryption for Pocketmine-MP
## How to use?
Write this line at the top of your plugin:
```
use LootSpace369\SecurityEncode\encode;
```
### Example
Array encoding by:
```
$array = ["a","b"];
$encode = new encode($array);
```
String encoding by:
```
$str = "LootSpace369";
$encode = new encode($str);
```
