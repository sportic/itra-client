# SPORTIC ITRA API

[![Latest Stable Version](https://poser.pugx.org/sportic/itra-client /v/stable.svg)](https://packagist.org/packages/sportic/itra-client )
[![Total Downloads](https://poser.pugx.org/sportic/itra-client /downloads.svg)](https://packagist.org/packages/sportic/itra-client )
[![License](https://poser.pugx.org/sportic/itra-client /license.svg)](https://packagist.org/packages/sportic/itra-client )
[![Code Coverage](https://coveralls.io/repos/sportic/itra-client /badge.svg?branch=master)](https://coveralls.io/r/sportic/itra-client ?branch=master)

## Composer
You can install the bindings via [Composer](http://getcomposer.org/). Run the following command:

```bash
composer require sportic/itra-client 
```

To use the bindings, use Composer's [autoload](https://getcomposer.org/doc/01-basic-usage.md#autoloading):
```php
require_once('vendor/autoload.php');
```


## Getting Started

Simple usage looks like:

```php
$client = new \Sportic\Itra\ItraClient();
$client->setAuthToken('ITRA_AUTH_TOKEN');

$result = $client->runnerlist()->find(\Sportic\Itra\RunnerList\RunnerListRequest::fromArray([
            'RunnerID' => 2704,
        ]));
        
$athlete = $return->getFirstResult();
echo $athlete->getId();
echo $athlete->getFirstName();
echo $athlete->getLastName();
echo $athlete->getPerformanceIndex();        
```
