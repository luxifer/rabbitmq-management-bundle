# Luxifer/RabbitmqManagementBundle

Symfony bundle to bridge `richardfullmer/rabbitmq-management-api`

## Install

```
composer require luxifer/rabbitmq-management-bundle
```

Add `LuxiferRabbitmqManagementBundle` to `app/AppKernel.php`:

```php
<?php

            new Luxifer\RabbitmqManagementBundle\LuxiferRabbitmqManagementBundle(),
```

## Usage

```php
<?php

$rabbitmqManagement = $this->get('luxifer_rabbitmq_management');
```

## Doc

See https://github.com/richardfullmer/php-rabbitmq-management-api#php-rabbitmq-management-api
