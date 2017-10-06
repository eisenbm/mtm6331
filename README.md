# MTM6331: Server-Side Web Development
## Week 6: Creating a Contact Book Part 2

Today we will be continuing to create a Contact Book using PHP. We will learn how to create includes in Twig, how to manage when a user mistypes the URL, and how to create clean urls. We will also create an Add Contact function to our Contact Book.

### Installing Twig
To use the Twig Templating Engine, you must first install it. The easiest way to install Twig is using composer. (See [Twig Installation](https://twig.symfony.com/doc/2.x/installation.html))

Open your Bash Terminal (Git Bash on Windows or Terminal on macOS) and navigate to your week5 directory. It would look something like this:

** macOS: **
```
cd /Application/MAMP/htdocs/mtm6331/week5
```

** Windows: **
```
cd /c/MAMP/htdocs/mtm6331/week5
```

Once in the week5 directory run the following command.

```
composer require twig/twig:~2.0
```
This will create a folder named "vendor" containing all the necessary files for using Twig.


### Additional Resources

For more information about what we will be cover, check out the following:
- [file_put_contents](http://php.net/manual/en/function.file-put-contents.php)
- [json_encode](http://php.net/manual/en/function.json-encode.php)
- [Twig](https://twig.symfony.com/doc/2.x/)
- [PHP: Clean URLs on Apache Server](https://www.lynda.com/PHP-tutorials/Clean-PHP-URLs-Apache-Server/482052-2.html)
- [Using htaccess Files for Pretty URLS](https://code.tutsplus.com/tutorials/using-htaccess-files-for-pretty-urls--net-6049)
- [How to Redirect your 404 error to a Custom Page](http://www.htaccessbasics.com/404-custom-error-page/)
