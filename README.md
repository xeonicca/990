
# Installation

Checkout repository:

    git clone git@project.url:/path/to/990

Update Composer:

    ./composer.phar update

FuelPHP initialize:

    php oil refine install

if no error occurs, checkout home page then.

# DB Initialize

Edit fuel/app/config/development/db.php (or production/db.php). Fill in database name and DB user identify.

Migrate DB schema:

    php oil refine migrate




