# Telegram schema in PHP

**WARNING**

Please do not use it in your project unless you know what are you doing. This **never** was really tested in the real world.

---------------------------------------------------------------------------------------------------------------------------------------

This project is for generating a bunch of PHP classes, according to the [td_api.tl](https://github.com/tdlib/td/blob/master/td/generate/scheme/td_api.tl) documentation.

Use the `bin/console app:generate-telegram-classes` command to generate PHP classes in the `App\Telegram\Types` namespace.

Those classes are supposed to use them with the `tdlib` and Symfony Serializer. 
