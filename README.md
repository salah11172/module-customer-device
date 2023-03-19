
## Table of contents

- [Summary](#summary)
- [Installation](#installation)

## Summary


This module adds more detailed information to the admin order grid. Initially, a new column is added to the order grid Which contains the type of device that placed the order

## Installation
1-Dwonload Extansion code <br>
2-Create a folder and name it <strong>Teeela</strong> <br>
3-Inside Teeela Folder Create a folder and name it <strong>CustomerDevice</strong><br>
4-Copy the contents of the folder you downloaded into CustomerDevice Folder
5-Run Following  Commands

```
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy -f
php bin/magento cache:flush

```

