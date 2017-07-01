# Entity Attacher Bundle [![Build Status](https://travis-ci.org/geosocio/entity-attacher-bundle.svg?branch=develop)](https://travis-ci.org/geosocio/entity-attacher) [![Coverage Status](https://coveralls.io/repos/github/geosocio/entity-attacher-bundle/badge.svg)](https://coveralls.io/github/geosocio/entity-attacher)
A Syfmony Bundle for the [Entity Attacher](https://github.com/geosocio/entity-attacher) library.

## Installation

### Step 1: Download the Bundle
Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
composer require geosocio/entity-attacher-bundle
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

### Step 2: Enable the Bundle
Then, enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...

            new GeoSocio\EntityAttacherBundle\GeoSocioEntityAttacherBundle(),
        );

        // ...
    }

    // ...
}
```
