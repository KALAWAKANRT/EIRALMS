<?php require_once "../controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>EIRA | PHP</title>
    <link rel="icon" type="images/x-icon" href="img/php.png" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I"
        crossorigin="anonymous"
    />
    <script
        src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"
    ></script>

    <script src="https://kit.fontawesome.com/95c10202b4.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="scss/bootstrap.scss" />
    <link rel="stylesheet" href="coursepage.css">
</head>
<body>
    <nav>
        <!--NAVIGATION MENU-->
        <div class="container-fluid" style="background-color:#0205a1;">
            <div class="container">
                <nav class="navbar navbar-dark navbar-expand-lg py-0">
                    <a href="index.php" class="navbar-brand">
                        <img src="img/Rectangle 13.png" alt="img" class="h-50 w-75">
                    </a>
                    <div class="collapse navbar-collapse bg-transparent">
                        <div class="navbar-nav ms-auto mx-xl-auto">
                            <a href="index.php" class="nav-item active">Home</a>
                            <a href="index.php" class="nav-item">Training</a>
                            <a href="https://eira.erovoutika.ph/certificate.php" class="nav-item">Certificates</a>
                        </div>
                    </div>
                    <i class="nav-item float-right btn-square py-3 bg-primary rounded-circle fa-solid fa-user" style="width: 60px; height: 60px;" onclick="document.getElementById('dashboard').submit();"></i>
                        <form id="dashboard" method="POST" autocomplete="off" style="display: none;">
                        <input class="text nav-text" type="hidden" name="dashboard" value="dashboard">
                        </form> 
                </nav>     
            </div>
        </div>
    </nav>

<main>
    <aside>
        <div class="container-fluid">
            <div class="sidenav">
            <img src="img/php.png" alt="img">
                <nav class="nav d-block list-unstyled border-bottom w-75 p-2" id="tabContent">
                        <li class="nav-item">
                            <a href="#" onclick="showTab('basics')">PHP Basics</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" onclick="showTab('database')">Databases</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" onclick="showTab('security')">Security</a>                    
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </aside>

    <section>
        <div class="tab-content">
            <!--PHP BASICS-->
                <div class="lessons active" id="basics">
                    <h1>PHP Basics</h1>
                        <p>
                            PHP (Hypertext Preprocessor) is a server-side scripting language used for web development. It can be embedded in HTML pages or 
                            used as a standalone scripting language. PHP allows developers to create dynamic web pages, handle user authentication and 
                            transactions, interact with databases, and perform other tasks necessary for web development.<br><br>
                            It is integrated with a number of popular databases, including MySQL, PostgreSQL, Oracle, Sybase, Informix, and Microsoft SQL Server.
                        </p>
                    <h3 class="text-white bg-primary p-2">Escaping to PHP</h3>  
                        <p>
                            he PHP parsing engine needs a way to differentiate PHP code from other elements in the page. The mechanism for doing so is known 
                            as 'escaping to PHP'. There are four ways to do this -
                        </p>         
                            <h2>Canonical PHP tags</h2>
                                <p>
                                    The most universally effective PHP tag style is -<br>
                                    <span class="bg-light m-2 font-weight-bold">&lt;?php...?&gt;</span><br>
                                    If you use this style, you can be positive that your tags will always be correctly interpreted.
                                </p>
                            <h2>Short-open (SGML-style) tags </h2>
                                <p>
                                    Short or short-open tags look like this -<br>
                                    <span class="bg-light m-2 font-weight-bold">&lt;?...?&gt;</span><br>
                                    Short tags are, as one might expect, the shortest option You must do one of two things to enable PHP to recognize the tags - 
                                    Choose the --enable-short-tags configuration option when you're building PHP. Set the short_open_tag setting in your 
                                    php.ini file to on. This option must be disabled to parse XML with PHP because the same syntax is used for XML tags.
                                </p>
                            <h2>ASP-style tags</h2>
                                <p>
                                    ASP-style tags mimic the tags used by Active Server Pages to delineate code blocks. ASP-style tags look like this -<br>
                                    <span class="bg-light m-2 font-weight-bold">&lt;%...%&gt;</span><br>
                                    To use ASP-style tags, you will need to set the configuration option in your php.ini file.
                                </p>
                            <h2>HMTL script tags</h2>
                                <p>
                                    HTML script tags look like this -<br>
                                    <span class="bg-light m-2 font-weight-bold">&lt;script languange = "PHP"&gt;...&lt;/script&gt;</span>
                                </p>
                    <h3 class="text-white bg-primary p-2">Whitespace insensitive</h3>
                        <p>
                            Whitespace is the stuff you type that is typically invisible on the screen, including spaces, tabs, and carriage returns 
                            (end-of-line characters).<br><br>
                            PHP whitespace insensitive means that it almost never matters how many whitespace characters you have in a row.one whitespace 
                            character is the same as many such characters.
                        </p>
                </div>

            <!--DATABASES-->
                <div class="lessons" id="database">
                    <h1>PHP Databases</h1>
                        <p>
                            One of the most common uses of PHP is interacting with databases, allowing developers to create and query databases to store and 
                            retrieve data. There are several PHP database management libraries available, including MySQLi, PDO, and SQLite. These libraries 
                            make it easy to work with databases in PHP and provide a range of features for querying and manipulating data. If you're new to 
                            working with databases in PHP, it's a good idea to choose a simple library and learn the basics before moving on to more complex 
                            tasks.
                        </p>
                    <h3 class="text-white bg-primary p-2">MySQL Extension</h3>
                        <p>
                            MySQL extension for PHP is a powerful tool that allows PHP developers to interact with MySQL databases directly from the PHP code. 
                            This means that the data and functionality of the database can be accessed, modified, and queried using PHP functions and syntax. 
                            The MySQL extension is specifically designed to work with MySQL databases and provides a wide range of functions to manipulate 
                            and query data. <br><br>
                            By using the MySQL extension, developers can create highly dynamic and interactive web applications that can handle large amounts 
                            of data.
                        </p>
                    <h3 class="text-white bg-primary p-2">PDO Extension</h3>
                        <p>
                            PDO is a database connection abstraction library — built into PHP since 5.1.0 — that provides a common interface to talk with many 
                            different databases. PDO will not translate your SQL queries or emulate missing features; it is purely for connecting to multiple 
                            types of database with the same API.<br><br>
                            More importantly, PDO allows you to safely inject foreign input (e.g. IDs) into your SQL queries without worrying about database 
                            SQL injection attacks. This is possible using PDO statements and bound parameters.
                        </p>
                            <div class="container-fluid w-75 text-center mb-4">
                                <img src="img/php_document.jpg" alt="img">
                            </div>
                        <p>
                            PDO will not translate your SQL queries or emulate missing features; it is purely for connecting to multiple types of database 
                            with the same API.<br><br> 
                            More importantly, PDO allows you to safely inject foreign input (e.g. IDs) into your SQL queries without worrying about database 
                            SQL injection attacks. This is possible using PDO statements and bound parameters.
                        </p>
                </div>
                
            <!--SECURITY-->
                <div class="lessons" id="security">
                    <h1>Security</h1>
                        <p>
                            As with any language used to create software, it can potentially be vulnerable to security threats if not properly secured. 
                            To ensure the security of PHP scripts, it is recommended to follow secure coding best practices, such as using prepared 
                            statements and input validation, to prevent common web vulnerabilities such as SQL injection and cross-site scripting (XSS) 
                            attacks. 
                        </p>
                    <h3 class="text-white bg-primary p-2">Password Hashing</h3>
                        <p>
                            Eventually everyone builds a PHP application that relies on user login. Usernames and passwords are stored in a database and 
                            later used to authenticate users upon login. It is important that you properly hash passwords before storing them. Hashing and 
                            encrypting are two very different things that often get confused.<br><br>
                            Hashing is an irreversible, one-way function. This produces a fixed-length string that cannot be feasibly reversed. This means 
                            you can compare a hash against another to determine if they both came from the same source string, but you cannot determine the 
                            original string. If passwords are not hashed and your database is accessed by an unauthorized third-party, all user accounts are 
                            now compromised.
                        </p>
                            <div class="container-fluid w-75 text-center">
                                <img src="img/php_document2.jpg" alt="img" class="mb-4">
                            </div>
                    <h3 class="text-white bg-primary p-2">Data Filtering</h3>
                        <p>
                            Data filtering in PHP is performed to remove or manipulate unwanted data from an input array or string. This can be done using 
                            arrays, loops, and conditional statements. There are also built-in functions like array_filter() and array_map() that can be used 
                            for more complex data filtering operations. In addition, it's important to keep in mind security considerations when filtering 
                            user input to prevent malicious attacks.<br><br>
                            The PHP filter extension has many of the functions needed for checking user input, and is designed to make data validation 
                            easier and quicker.
                        </p>
                            <ul>
                                <li>filter_list()</li>
                                <li>filter_var()
                                    <ul>
                                        <li>Sanitize a String</li>
                                        <li>Validate an Integer</li>
                                        <li>Validate an IP Address</li>
                                        <li>Sanitize and Validate an Email Address</li>
                                        <li>Sanitize and Validate a URL</li>
                                    </ul>
                                </li>
                            </ul>
                    <h3 class="text-white bg-primary p-2">Configuration Files</h3>
                            <p>
                                When creating configuration files for your applications, best practices recommend that one of the following methods be followed:
                            </p>
                                <ul>
                                    <li>
                                        It is recommended that you store your configuration information where it cannot be accessed directly and pulled 
                                        in via the file system.</li>
                                    <li>
                                        If you must store your configuration files in the document root, name the files with a .php extension. This ensures 
                                        that, even if the script is accessed directly, it will not be output as plain text.</li>
                                    <li>
                                        Information in configuration files should be protected accordingly, either through encryption or group/user file 
                                        system permissions.</li>
                                    <li>
                                        It is a good idea to ensure that you do not commit configuration files containing sensitive information e.g. 
                                        passwords or API tokens to source control.</li>
                                </ul>
                    <h3 class="text-white bg-primary p-2">Register Globals</h3>
                        <p>
                            The register_globals configuration setting makes several types of variables (including ones from $_POST, $_GET and $_REQUEST) 
                            available in the global scope of your application. This can easily lead to security issues as your application cannot effectively 
                            tell where the data is coming from.<br><br>
                            For example: <code>$_GET['foo']</code> would be available via $foo, which can override variables that have been declared.<br><br>
                            If you are using PHP &Lt; 5.4.0 make sure that register_globals is off.
                        </p>
                    <h3 class="text-white bg-primary p-2">Error Reporting</h3>
                        <p>
                            Error logging can be useful in finding the problem spots in your application, but it can also expose information about the 
                            structure of your application to the outside world. To effectively protect your application from issues that could be caused by 
                            the output of these messages, you need to configure your server differently in development versus production (live).
                        </p>
                </div>
        </div>
    </section>
</main>
<script type="module" src=".js/main.js"></script>
<script>
       function showTab(lessonId) {
        var lessons = document.querySelectorAll('.lessons');
        lessons.forEach(function(lessons) {
            lessons.classList.remove('active');
        });
        var selectedLesson = document.getElementById(lessonId);
        selectedLesson.classList.add('active');
    }
</script>
</body>
</html>
