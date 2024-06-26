<?php require_once "../controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>EIRA | CSS</title>
    <link rel="icon" type="images/x-icon" href="img/css.png" />
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

    <link rel="stylesheet" href=".scss/bootstrap.scss" />
    <link rel="stylesheet" href="coursepage.css">
</head>
<body>
    <nav>
        <!--NAVIGATION MENU-->
        <div class="container-fluid" style="background-color:#0205a1;">
            <div class="container">
                <nav class="navbar navbar-dark navbar-expand-lg py-0">
                    <a href="index.html" class="navbar-brand">
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
            <img src="img/css.png" alt="img">
                <nav class="nav d-block list-unstyled border-bottom w-75 p-2" id="tabContent">
                        <li class="nav-item">
                            <a href="#" onclick="showTab('basics')">CSS Basics</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" onclick="showTab('layout')">Making Layout</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" onclick="showTab('design')">Responsive Design</a>                    
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </aside>

    <section>
        <div class="tab-content">
            <!--CSS BASICS-->
            <div class="lessons active" id="basics">
                <h1>CSS Basics</h1>
                    <p>
                        CSS, short for <code>Cascading Style Sheet</code>, is a stylesheet language used to describe the presentation of a document 
                        written in a markup language. It is used to define the layout, colors, fonts, and other visual elements of a website, 
                        and how they interact with one another. CSS allows developers to separate the presentation from the content, making 
                        it easier to maintain and update the visual design of a website without changing the underlying code. CSS can be 
                        written directly in the HTML file, or in a separate file that is linked to the HTML file. 
                    </p>
                <h3>Why Use CSS?</h3>
                    <p>
                        It allows developers to separate the content of a page from its visual presentation, making it easier to maintain and update 
                        page designs. CSS also supports responsive design, which allows pages to be optimized for different screen sizes and devices.
                    </p>
                <h3 class="text-white bg-primary p-2">Selectors</h3>
                    <p>
                        As elements are added to a web page, they may be styled using CSS. A selector designates exactly which element or elements 
                        within our HTML to target and apply styles (such as color, size, and position) to.<br>
                    </p>
                <h6>Syntax:</h6>
                    <p><code>selector {Property : value;}</code></p>
                <p class="mt-4">Every declaration has a CSS property name and a value, separated by a <code>colon(:)</code> and is surrounded by <code>curly braces({ })</code>. 
                    For declaring the multiple CSS properties, it can be separated by the <code>semicolon(;)</code>.</p>
                    <h6>Let's define each of these:</h6>
                    <ol>
                        <li>
                            <p><span class="font-weight-bold">Declaration:</span>
                                A combination of a property and its corresponding value.
                            </p>
                        </li>
                        <li>
                            <p><span class="font-weight-bold">Selector:</span>
                            Used to target and select specific HTML elements to apply styles to.
                            </p>
                        </li>
                        <li>
                            <p><span class="font-weight-bold">Property:</span>
                                Defines the specific aspect or characteristic of an element that you want to modify.
                            </p>
                        </li>
                        <li>
                            <p><span class="font-weight-bold">Value:</span>
                            Assigned setting or parameter for a given property, determining how the selected element should appear or behave.
                            </p>
                        </li>
                    </ol>
                <h6>Example:</h6>
                    <img src="img/css_document.jpg" alt="img">
                <h4 class="text-white p-2 mt-3" style="background-color:darkorange;">Element Selector</h4>
                    <p>The element selector selects HTML elements based on the element name.</p>
                        <code>
                            p {
                                text-align: center;<br/>
                                color: red;
                            }
                        </code>
                <h4 class="text-white p-2 mt-3" style="background-color:darkorange;">ID Selector</h4>
                    <p>The id selector uses the id attribute of an HTML element to select a specific element. 
                        To select an element with a specific id, write a hash (#) character, followed by the id of the element.</p>
                        <code>
                            #para1 {
                                text-align: center;<br/>
                                color: red;
                            }
                        </code>
                <h4 class="text-white p-2 mt-3" style="background-color:darkorange;">Class Selector</h4>
                    <p>The class selector selects HTML elements with a specific class attribute.
                        To select elements with a specific class, write a period (.) character, followed by the class name.</p>
                        <code>
                            .center {
                                text-align: center;<br/>
                                color: red;
                            }
                        </code>
                <h4 class="text-white p-2 mt-3" style="background-color:darkorange;">Universal Selector</h4>
                    <p>The universal selector (*) selects all HTML elements on the page.</p>
                        <code>
                            * {
                                text-align: center;<br/>
                                color: blue;
                            }
                        </code>
                <h3 class="text-white bg-primary p-2 mt-4">CSS Insertion</h3>
                    <h5>There are three ways to add CSS to HTML:</h5>
                        <ul>
                            <li class="p-3">
                                <p><span class="font-weight-bold text-decoration-underline">Inline CSS:</span>
                                    places the CSS inside an HTML tag and affects only that element.</p>
                                <img src="img/css_document2.jpg" alt="img">
                            </li>
                            <li class="p-3">
                                <p><span class="font-weight-bold text-decoration-underline">Internal CSS:</span>
                                    is placed inside a <code>style</code> element, which goes inside the <code>head</code> of the HTML document.
                                </p>
                                <img src="img/css_document3.jpg" alt="img">
                            </li>
                            <li class="p-3">
                                <p><span class="font-weight-bold text-decoration-underline">External CSS:</span>
                                    exists in a separate file called an external stylesheet, and requires a <code>link</code> element placed inside the head section of an HTML file.
                                </p>
                                <img src="img/css_document4.jpg" alt="img" class="d-inline p-2">
                                <img src="img/css_document5.jpg" alt="img" class="d-inline p-2">
                            </li>
                            <button class="quizbutton" onclick="document.getElementById('quiz1').submit();">Take the Quiz</button>
                                <form method="POST" autocomplete="off" id="quiz1" style="display:none;">
                                    <input type="hidden" name="quizstart">
                                    <input type="hidden" name="course" value="CSS">
                                    <input type="hidden" name="quiz" value="quiz1">
                                </form>
                        </ul>
            </div> 

            <!--MAKING LAYOUTS-->
            <div class="lessons" id="layout">
                <h1>Making Layouts</h1>
                    <p>
                        CSS page layout techniques allow us to take elements contained in a web page and control where they're positioned relative to the 
                        following factors: their default position in normal layout flow, the other elements around them, their parent container, and the 
                        main viewport/window.<br><br>
                        The page layout techniques we'll be covering in more detail in this are:
                    </p>
                        <ul>
                            <li>Display Property</li>
                            <li>Flexbox</li>
                            <li>Grid</li>
                            <li>Float</li>
                            <li>Position</li>
                        </ul>
                <h3 class="text-white bg-primary p-2">Display Property</h3>
                    <p>
                        Standard values such as block, inline or inline-block can change how elements behave in normal flow, for example, by making a 
                        block-level element behave like an inline-level element.<br><br>
                        You can change this default display behavior. For example, the <code>&lt;li&gt;</code> element is display: block by default, meaning that list items 
                        display one below the other in our English document. If we were to change the display value to inline they would display next 
                        to each other, as words would do in a sentence.
                    </p>
                <h3 class="text-white bg-primary p-2">Flexbox</h3>
                    <p>
                        Flexbox is the short name for the Flexible Box Layout CSS module, designed to make it easy for us to lay things out in one 
                        dimension — either as a row or as a column. To use flexbox, you apply display: flex to the parent element of the elements you 
                        want to lay out; all its direct children then become flex items.
                    </p>
                        <ul>
                            <li>Block</li>
                            <li>Inline</li>
                            <li>Table</li>
                            <li>Positioned</li>
                        </ul>
                    <p>
                        The flexible box layout module, usually referred to as flexbox, was designed as a one-dimensional layout model, and as a method 
                        that could offer space distribution between items in an interface and powerful alignment capabilities.
                    </p>
                <h3 class="text-white bg-primary p-2">Grid</h3>
                    <p>
                        Similar to flexbox, we enable Grid Layout with its specific display value — <code>display: grid</code>. The below example uses similar markup 
                        to the flex example, with a container and some child elements. In addition to using <code>display: grid</code>, we also define some row and 
                        column tracks for the parent using the <code>grid-template-rows</code> and <code>grid-template-columns</code> properties respectively.
                    </p>
                        <div class="container-fluid w-75">
                            <img src="img/css_document7.jpg" alt="img" class="float-left">
                            <img src="img/css_document6.jpg" alt="img" class="float-right">
                            <img src="img/css_document8.jpg" alt="img">
                        </div>
                <h3 class="text-white bg-primary p-2">Float</h3>
                    <p>
                        Floating an element changes the behavior of that element and the block level elements that follow it in normal flow. The floated 
                        element is moved to the left or right and removed from normal flow, and the surrounding content floats around it.<br><br>
                        The float property has four possible values:
                    </p>
                        <ul>
                            <li><p><code>left</code> -
                                    Floats the element to the left.
                                </p>
                            </li>
                            <li><p><code>right</code> - 
                                    Floats the element to the right.
                                </p>
                            </li>
                            <li><p><code>inherit</code> -
                                    Specifies that the value of the float property should be inherited from the element's parent element.
                                </p>
                            </li>
                            <li><p><code>none</code> -
                                    Specifies no floating at all. This is the default value.
                                </p>
                            </li>
                        </ul>
                <h3 class="text-white bg-primary p-2">Position</h3>
                    <p>
                        Positioning allows you to move an element from where it would otherwise be placed in normal flow over to another location. 
                        Positioning isn't a method for creating the main layouts of a page; it's more about managing and fine-tuning the position of 
                        specific items on a page. Understanding positioning also helps in understanding normal flow, and what it means to move an item 
                        out of the normal flow. <br><br>
                        There are five types of positioning you should know about:
                    </p>
                        <ul>
                            <li><span class="font-weight-bold">Static Position</span>
                                <p>
                                    the default that every element gets. It just means "put the element into its normal position in the document layout 
                                    flow — nothing special to see here".
                                </p>
                            </li>
                            <li><span class="font-weight-bold">Relative Position</span>
                                <p>
                                    allows you to modify an element's position on the page, moving it relative to its position in normal flow, as well 
                                    as making it overlap other elements on the page.
                                </p>
                            </li>
                            <li><span class="font-weight-bold">Absolute Position</span>
                                <p>
                                    moves an element completely out of the page's normal layout flow, like it's sitting on its own separate layer. This 
                                    is useful for creating complex layout effects, such as tabbed boxes where different content panels sit on top of one 
                                    another and are shown and hidden as desired, or information panels that sit off-screen by default.
                                </p>
                            </li>
                            <li><span class="font-weight-bold">Fixed Position</span>
                                <p>
                                    very similar to absolute positioning except that it fixes an element relative to the browser viewport, not another 
                                    element. This is useful for creating effects such as a persistent navigation menu that always stays in the same place 
                                    on the screen as the rest of the content scrolls.
                                </p>
                            </li>
                            <li><span class="font-weight-bold">Sticky Position</span>
                                <p>
                                    a newer positioning method that makes an element act like position: relative until it hits a defined offset from the 
                                    viewport, at which point it acts like position: fixed.
                                </p>
                            </li>
                        </ul>
                        <button class="quizbutton" onclick="document.getElementById('quiz2').submit();">Take the Quiz 2</button>
                                <form method="POST" autocomplete="off" id="quiz2" style="display:none;">
                                    <input type="hidden" name="quizstart">
                                    <input type="hidden" name="course" value="CSS">
                                    <input type="hidden" name="quiz" value="quiz2">
                                </form>
            </div>

            <!--RESPONSIVE DESIGN-->
            <div class="lessons" id="design">
                <h1>Responsive Design</h1>
                    <p>
                        Responsive design is an approach to web design that allows websites to adapt to different screen sizes and resolutions. CSS 
                        (Cascading Style Sheets) is a style sheet language used for describing the layout, colors, fonts, and other visual elements of a 
                        webpage. In responsive design, CSS is used to create media queries, which allow different styles to be applied depending on the 
                        size of the device being used to view the webpage. Web pages can be viewed using many different devices: desktops, tablets, and
                        phones. Your web page should look good, and be easy to use, regardless of the device.<br><br>
                        Web pages should not leave out information to fit smaller devices, but rather adapt its content to fit any device:
                    </p>
                        <img src="img/css_document9.jpg" alt="img">
                    <p>
                        It is called responsive web design when you use CSS and HTML to resize, hide, shrink, enlarge, or move the content to make it 
                        look good on any screen.
                    </p>
                    <button class="quizbutton" onclick="document.getElementById('quiz3').submit();">Take the Quiz 3</button>
                                <form method="POST" autocomplete="off" id="quiz3" style="display:none;">
                                    <input type="hidden" name="quizstart">
                                    <input type="hidden" name="course" value="CSS">
                                    <input type="hidden" name="quiz" value="quiz3">
                                </form>
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
