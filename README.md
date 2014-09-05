# Luxifer/RabbitmqManagementBundle

[![Latest Stable Version](https://poser.pugx.org/luxifer/rabbitmq-management-bundle/v/stable.svg)](https://packagist.org/packages/luxifer/rabbitmq-management-bundle) [![Total Downloads](https://poser.pugx.org/luxifer/rabbitmq-management-bundle/downloads.svg)](https://packagist.org/packages/luxifer/rabbitmq-management-bundle)

Symfony bundle to bridge `richardfullmer/rabbitmq-management-api`

## Install

```
composer require luxifer/rabbitmq-management-bundle
```

Add `LuxiferRabbitmqManagementBundle` to `app/AppKernel.php`:

```php
<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Luxifer\RabbitmqManagementBundle\LuxiferRabbitmqManagementBundle(),
        );
    }
}
```

## Usage

```php
<?php

$rabbitmqManagement = $this->get('luxifer_rabbitmq_management');
```

## Doc

See https://github.com/richardfullmer/php-rabbitmq-management-api#php-rabbitmq-management-api
