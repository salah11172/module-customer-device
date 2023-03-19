
## Table of contents

- [Summary](#summary)
- [Installation](#installation)

## Summary


This module adds more detailed information to the admin order grid. Initially, a new column is added to the order grid Which contains the type of device that placed the order

## Installation

```
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy -f
php bin/magento cache:flush

```

