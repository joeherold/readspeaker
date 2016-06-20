# readspeaker

A readspeaker implementation for Contao CMS.

## new release

the readspeaker module is now available for contao 3.5 LTS (currently 3.5.14)

## installation guide for contao 4.X
Currently, there is no ER Backend in Contao 4.X (last checked 20.06.2014 Contao version:4.1.3)
But you may install Contao 3.x modules manually in Contao 4.0, with a few tweaks.
 
1. go to the Contao ER and search for the *readspeaker* module (Link: [Contao Extension Repository](https://contao.org/de/erweiterungsliste/find/readspeaker.html) ) 
2. scoll down to the bottom of the page and download the ZIP file and save it to your computer.
3. unzip the package
4. copy the unziped ***readspeaker folder*** to the following contao 4.x path: ***TL_ROOT/system/modules/readspeaker*** by FTP to your webserver
5. open this file of Contao 4.X: TL_ROOT/app/ **AppKernel.php** for edit in your prefered editor
6. add 2 Lines of Code: SEE CODEBLOCK BELOW
7. login to contao backend and go to maintaince
8. select "empty internal cache" & "recreate symlinks"
9. then go to the contao install tool (your.domain.com/install.php) and update the database tables
   (if the table does not provide any update, you may clear the chache by the contao 4 app console: **app/console cache:clear --env=prod** and then  **app/console cache:warmup -e prod**)
10. the module now should be enabled in the backend of contao.

### codeblock for AppKernel.php
```php
<?php

// FILE: TL_ROOT/app/AppKernel.php


/**
 * This file is part of Contao.
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */

// ADDED CODE
// add this line, to enable loading of Contao 3.X Modules
use Contao\CoreBundle\HttpKernel\Bundle\ContaoModuleBundle;


class AppKernel extends Kernel
{
    /**
     * {@inheritdoc}
     */
    public function registerBundles()
    {
        $bundles = [
            ...
            
            // ADDED CODE
            // add this line to register the module in Contao 4
            new ContaoModuleBundle('readspeaker', $this->getRootDir()),
        ];

        ...
    }

    ...
}

```

## quote from readspeaker.com

***Make your content talk!***
Use the power of ReadSpeaker text to speech to give a voice to your
websites, mobile apps, digital books, elearning materials, documents, and more!

![readspeaker](https://contao.org/files/repository/readspeaker/10000009/picture.jpg)
