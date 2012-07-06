#Todo

 - Maybe add post install script that links the phpunit-wrapper script into the project root
 - Gather more feedback

#Usage

##Installing

You need to include the following into your `composer.json`:

```json
{
  "repositories": [
      {
          "type": "vcs",
          "url":  "https://github.com/edorian/phpunit-composer-try"
      },
      {                                                                                                                 
          "type": "pear",                                                                                               
          "url":  "pear.phpunit.de"                                                                                     
      },                                                                                                                
      {                                                                                                                 
          "type": "pear",                                                                                               
          "url":  "pear.symfony-project.com"                                                                            
      }   
  ],
  "require-dev": {
      "phpunit-testing/phpunit": "dev-master"
  }
}
```

and run

    php composer.phar install --dev

##Running phpunit

To execute your unit tests run:

    php vendor/bin/phpunit-wrapper.php

or symlink that into your root folder. I'm looking for a way to automate this properly that works for everyone (win/linux/mac).

