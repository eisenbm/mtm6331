# MTM6331: Server-Side Web Development
## Week 9: Integrating the Contact Book Database and App

Now that we have a database with tables and data, we are ready to integrate into our App. To do this we will be using the PHP Data Object (PDO) to connect to the database a make our queries.

## Documentation

### Connecting to database using PDO
Connections are established by creating instances of the PDO base class, and constructing a Database Source Name (DSN). The DSN may be structure differently depending on Database Management System use are using. For MySql, it would look something like this:

```
$pdo =  new PDO('mysql:host=localhost;dbname=test', 'username', 'password');
```
Now practice, it common to the database specific attributes (host, database name, username, and password) in separate variable so that can be easily changed. Then use those variables to build the DSN.

```
$dbname = "mtm6331-contacts";
$dbuser = "root";
$dbpass = "root";
$dbhost = "localhost";

$pdo = new PDO("mysql:host=" . $dbhost . ";dbname=" . $dbname, $dbuser, $dbpass);
```
The variable `$pdo` will hold an instances of the PDO class, which will be directly connected to the database. We will use this variable to make any query to database.

One final step we should take when connecting to the database is provide an error message if the connection fails. We can do this using a `try/catch` block. The `try` block contains code to be executed, like connecting to a database using PDO. If the connection fails, the PDO class will throw an exception, which is then sent back to the `try/catch` statement, and only then will the code in the `catch` block be executed. Adding a `try/catch` block to our existing code would look something like this.

```
try {
    $pdo = new PDO("mysql:host=" . $dbhost . ";dbname=" . $dbname, $dbuser, $dbpass);
} catch (PDOException $err) {
    header('HTTP/1.1: 500');
    echo "Database connection problem" . $err->getMessage();
    exit();
}
```

### Sending a Basic Query
Once a PDO instances has been created and the connection the database has been established, it is possible to send queries to the database, using PDO.

First start by writing the desired SQL query as a string and saving it the variable `$sql`.

```
$sql = "SELECT * FROM `contacts`;";
```
Next we use the PDO method `query()`, to send the SQL query to the database. The `query()` method will return a PDO Statement object containing the results of the query.

```
$result = $pdo->query($sql);
```

The PDO Statement object contains both a `fetch()` method, which "fetches" the resulting query on row at a time, and `fetchAll()` method, which returns an array of all of result set rows. When working with Twig, as we are with the Contact Book App, we want use `fetchAll()`.

By default, the `fetch()` and `fetchAll()` methods return an array containing both indexed with numbers and with database column names. We can change this behavior by adding the following parameters:
- _PDO::FETCH_ASSOC_: returns an array indexed by column name
- _PDO::FETCH_NUM_: returns an array indexed by column number   

Put it all together and it would look something like this:

```
$sql = "SELECT * FROM `contacts`;";
$result = $pdo->query($sql);
$contacts = $result->fetchAll(PDO::FETCH_ASSOC);
```

## Additional Resources

For more information about what we will be cover, check out the following:
- [PDO Documentation](http://php.net/manual/en/book.pdo.php)
- [PHP: Accessing Databases with PDO and MySQLi (Lynda.com)](https://www.lynda.com/PHP-tutorials/Accessing-Databases-Object-Oriented-PHP/169106-2.html)
- [PHP Exceptions](http://php.net/manual/en/language.exceptions.php)
- [PDO Query]
- [PDO Fetch](http://php.net/manual/en/pdostatement.fetch.php)
- [PDO FetchAll]
