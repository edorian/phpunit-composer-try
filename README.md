#Todo

 - Maybe add post install script that links the phpunit-wrapper script into the project root
 - Gather more feedback

#Usage

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

