hiqdev/yii2-hiart commits history
---------------------------------

## 0.0.2 Under development

- Fixed minor issues
    - 7218232 2015-10-26 improved README (sol@hiqdev.com)
    - 7e95cbe 2015-10-26  * Command::perform - changed request type from PUT to POST (d.naumenko.a@gmail.com)
    - 9d72ad6 2015-10-26  - Removed ActiveRecord::arrayAttributes method (d.naumenko.a@gmail.com)
- Changed default limit to ALL
    - b097fdf 2015-10-26  x QueryBuilder::buildLimit() - added conversion of `-1` limit to `ALL` (d.naumenko.a@gmail.com)
    - 2eb1a29 2015-10-22  + Implemented relations population using `with`, `joinWith`  * Changed default limit to ALL :!: (d.naumenko.a@gmail.com)
- Added recursive joining
    - 7bf29fe 2015-10-23  + ActiveQuery added recusion population of joined relation (d.naumenko.a@gmail.com)
- Added lt/gt to QueryBuilder
    - 1445eb0 2015-10-25 php-cs-fixed (sol@hiqdev.com)
    - 86796b5 2015-10-08 QueryBuilder - added lt, gt condition handling (d.naumenko.a@gmail.com)
- Fixed translation, redone Re::l to Yii::t (sol@hiqdev.com)
    - d286a03 2015-09-21 fixed translation, redone Re::l to Yii::t (sol@hiqdev.com)
- Removed gl_key, gl_value
    - e60f2da 2015-09-14 ActiveRecord - removed gl_key, gl_value (d.naumenko.a@gmail.com)
- Added second argument to ActiveQuery::all that will be passed to Command::search
    - 8f703e7 2015-09-01 ActiveQuery::all - added second argument that will be passed to Command::search (d.naumenko.a@gmail.com)
- Fixed 'raw' processing
    - 3a11077 2015-08-28 fixed back 'raw' processing (sol@hiqdev.com)
- Fixed PHP warnings
    - 9e108ab 2015-09-10 fixed PHP warning (sol@hiqdev.com)
    - b89f0c8 2015-08-27 fixed PHP warning (sol@hiqdev.com)

## 0.0.1 2015-08-26

- Added Connection::errorChecker callback to test if API response was error
    - 2913e20 2015-08-26 + Connection::errorChecker callback to test if API response was error (sol@hiqdev.com)
- Fixed PHP warnings
    - 161858f 2015-08-25 Fix warnings (andreyklochok@gmail.com)
- Changed: moved to src
    - 1218ec5 2015-08-26 fixed project description (sol@hiqdev.com)
    - fb39db4 2015-08-26 php-cs-fixed (sol@hiqdev.com)
    - f8ece0b 2015-08-26 moved to src (sol@hiqdev.com)
    - f63b354 2015-08-26 rehideved (sol@hiqdev.com)
- Added basics
    - e534bea 2015-08-25 Added Connection (d.naumenko.a@gmail.com)
    - 93c054e 2015-08-25 Added ErrorResponseException, HiResException~>HiArtException, added global checking of error responses, other minor (d.naumenko.a@gmail.com)
    - 3d87c1a 2015-08-19 Fixed QueryBuiled in condition - force type casting to array (d.naumenko.a@gmail.com)
    - ae4b098 2015-08-06 * Collection: + count and populate from selection (sol@hiqdev.com)
    - 104c0fb 2015-08-02 Collection::set now can accept single item (d.naumenko.a@gmail.com)
    - e054b8c 2015-07-30 + Collection::getIds (sol@hiqdev.com)
    - 84ba01e 2015-07-30 Throw exception when update find an error (andreyklochok@gmail.com)
    - eb75e05 2015-07-29 crutch for strange php compiler error (sol@hiqdev.com)
    - 68ea22c 2015-07-17 In collection - try to add delete mothod with after and before events. In Command fix hard-core Serach (andreyklochok@gmail.com)
    - ba36245 2015-06-24 Bulk operations (andreyklochok@gmail.com)
    - 2cba726 2015-06-11 getScenarioCommand - enh of work with arrays (d.naumenko.a@gmail.com)
    - fd386c9 2015-06-10 Fixed validate() - fail if one of models failed to validate (d.naumenko.a@gmail.com)
    - 3cfe245 2015-06-03 Fix findOne method (andreyklochok@gmail.com)
    - a9eb1cd 2015-05-28 Collection triggers events of each model to saved (d.naumenko.a@gmail.com)
- Changed: renamed to hiart
    - cec1ad7 2015-05-24 renamed hiart <- hiar in files (sol@hiqdev.com)
    - 9f25b4a 2015-05-24 RENAMED to hiart (sol@hiqdev.com)
    - 672c3ca 2015-05-22 Fixed inCond (d.naumenko.a@gmail.com)
    - 7ffd179 2015-05-19 Collection added EVENT_BEFORE/AFTER_LOAD (d.naumenko.a@gmail.com)
    - d3db42c 2015-05-15 Collection will not save, if empty (d.naumenko.a@gmail.com)
    - ff7903c 2015-05-12 PHPdoc enhancements (d.naumenko.a@gmail.com)
    - ee60010 2015-05-12 PHPdoc updated (d.naumenko.a@gmail.com)
    - 23c808d 2015-05-08 Collection unsed variabled deleted (d.naumenko.a@gmail.com)
    - 1a909ad 2015-04-24 Merge confilct resolve (andreyklochok@gmail.com)
    - 39fe2be 2015-04-24 Display API URL in debug panel (andreyklochok@gmail.com)
    - 0eec13c 2015-04-24 Display API URL in debug panel (andreyklochok@gmail.com)
    - 63a1673 2015-04-23  Collection - now recognises 3 different types of POST request data structure (d.naumenko.a@gmail.com)
    - 9748652 2015-04-22 DebugPanel name fix (andreyklochok@gmail.com)
    - 2c7aac4 2015-04-21 Change Re namespace (andreyklochok@gmail.com)
    - a012d32 2015-04-20  * ActiveRecord - added PrimaryValue conception  * Collection - added methods hasErrors, isEmpty (d.naumenko.a@gmail.com)
    - 9fcb34e 2015-04-17 Restore Re class (andreyklochok@gmail.com)
    - 04e2366 2015-04-17 Remove use Re (andreyklochok@gmail.com)
    - 92d2b45 2015-04-17 fixed namespace to hiqdev\hiar (sol@hiqdev.com)
    - c6d7f10 2015-04-17 First commit (andreyklochok@gmail.com)

## Development started 2015-04-17

