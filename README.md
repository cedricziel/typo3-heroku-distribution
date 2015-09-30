# TYPO3 CMS Composer Distribution for use on Heroku

This is a work-in-progress to research how TYPO3 CMS
can be run on Heroku using the current cedar stack.

[![Deploy](https://www.herokucdn.com/deploy/button.png)](https://heroku.com/deploy?template=https://github.com/cedricziel/typo3-heroku-distribution)


## Initialization

1. install heroku cli
2. login through ``heroku login``
3. create heroku app with ``heroku create``. This registers git remote ``heroku``
4. push to heroku ``git push heroku master``
5. open in browser and complete setup with ``heroku open``
   make sure to delete ``web/FIRST_INSTALL`` afterwards
   
## Customization

php.ini values will be picked up from a ``.user.ini`` file in ``web``. Go there if 
you need to adjust values. Placing it there has [no performance penalty](https://devcenter.heroku.com/articles/custom-php-settings#user-ini-files-recommended).

## Installing extensions

Due to the immutable file system (it gets resetted on every push) and the way
TYPO3 determines the extensions it should load, a special "flow" for enabling
an extension is needed.

1. require the extension with composer
2. push the app, install it via the extension manager
3. manually activate the package in ``typo3conf/PackageStates.php``

This flow is needed to keep the various mechanisms in sync after push.

## Tips

1. run ``composer update`` only with the ``--prefer-dist`` flag as currently 
   it would download the whole TYPO3 repository
2. accessing the install tool is only possible when the ENABLE_INSTALL_TOOL
   marker file is present
