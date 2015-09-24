# TYPO3 CMS Composer Distribution for use on Heroku

This is a work-in-progress to research how TYPO3 CMS
can be run on Heroku using the current cedar stack.

## Initialization

1. install heroku cli
2. login through ``heroku login``
3. create heroku app with ``heroku create``. This registers git remote ``heroku``
4. push to heroku ``git push heroku master``
5. open in browser and complete setup with ``heroku open``
   make sure to delete ``web/FIRST_INSTALL`` afterwards

## Tips

1. run ``composer update`` only with the ``--prefer-dist`` flag as currently 
   it would download the whole TYPO3 repository
