-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1
-- Genereringstid: 28. 10 2022 kl. 09:33:34
-- Serverversion: 10.4.22-MariaDB
-- PHP-version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini_cms`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `posts`
--

CREATE TABLE `posts` (
  `id` int(13) NOT NULL,
  `post_title` varchar(70) NOT NULL,
  `post_image` varchar(500) NOT NULL,
  `post_resume` varchar(500) NOT NULL,
  `post_content` longtext NOT NULL,
  `post_author` int(13) NOT NULL,
  `post_published` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Data dump for tabellen `posts`
--

INSERT INTO `posts` (`id`, `post_title`, `post_image`, `post_resume`, `post_content`, `post_author`, `post_published`) VALUES
(1, 'The history of HTML', 'html.png', '...', ' <p>The HyperText Markup Language or HTML is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets (CSS) and scripting languages such as JavaScript.</p>\r\n\r\n<p>Web browsers receive HTML documents from a web server or from local storage and render the documents into multimedia web pages. HTML describes the structure of a web page semantically and originally included cues for the appearance of the document.</p>\r\n\r\n<p>HTML elements are the building blocks of HTML pages<br />\r\nHTML elements are the building blocks of HTML pages. With HTML constructs, images and other objects such as interactive forms may be embedded into the rendered page. HTML provides a means to create structured documents by denoting structural semantics for text such as headings, paragraphs, lists, links, quotes and other items. HTML elements are delineated by tags, written using angle brackets. Tags such as and directly introduce content into the page. Other tags such as</p>\r\n\r\n<p>surround and provide information about document text and may include other tags as sub-elements. Browsers do not display the HTML tags but use them to interpret the content of the page.</p>\r\n\r\n<p>HTML CSS and JavaScript<br />\r\nHTML can embed programs written in a scripting language such as JavaScript, which affects the behavior and content of web pages. Inclusion of CSS defines the look and layout of content. The World Wide Web Consortium (W3C), former maintainer of the HTML and current maintainer of the CSS standards, has encouraged the use of CSS over explicit presentational HTML since 1997. A form of HTML, known as HTML5, is used to display video and audio, primarily using the element, in collaboration with javascript.</p>\r\n\r\n<p><a href=\"https://en.wikipedia.org/wiki/HTML\" target=\"_blank\">https://en.wikipedia.org/wiki/HTML</a></p>\r\n', 1, '2022-10-10 11:07:29'),
(2, 'CSS was invented by a Norwegian', 'css.png', '...', '<p>Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language such as HTML or XML (including XML dialects such as SVG, MathML or XHTML).&nbsp;CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.</p>\r\n\r\n<h3>Separation of presentation and content</h3>\r\n\r\n<p>CSS is designed to enable the separation of presentation and content, including layout, colors, and fonts.&nbsp;This separation can improve content accessibility; provide more flexibility and control in the specification of presentation characteristics; enable multiple web pages to share formatting by specifying the relevant CSS in a separate .css file, which reduces complexity and repetition in the structural content; and enable the .css file to be cached to improve the page load speed between the pages that share the file and its formatting.</p>\r\n\r\n<h3>Separation of formatting and content&nbsp;</h3>\r\n\r\n<p>Separation of formatting and content also makes it feasible to present the same markup page in different styles for different rendering methods, such as on-screen, in print, by voice (via speech-based browser or screen reader), and on Braille-based tactile devices. CSS also has rules for alternate formatting if the content is accessed on a mobile device.</p>\r\n\r\n<p>The name cascading comes from the specified priority scheme to determine which style rule applies if more than one rule matches a particular element. This cascading priority scheme is predictable.</p>\r\n\r\n<p>The CSS specifications are maintained by the World Wide Web Consortium (W3C). Internet media type (MIME type) text/css is registered for use with CSS by RFC 2318 (March 1998). The W3C operates a free CSS validation service for CSS documents.</p>\r\n\r\n<p><a href=\"https://en.wikipedia.org/wiki/CSS\" target=\"_blank\">https://en.wikipedia.org/wiki/CSS</a></p>\r\n', 1, '2022-10-10 11:07:29'),
(3, 'JavaScript was developed in 10 days', 'js.png', '...', ' <p>The first web browser with a graphical user interface, Mosaic, was released in 1993. Accessible to non-technical people, it played a prominent role in the rapid growth of the nascent World Wide Web. The lead developers of Mosaic then founded the Netscape corporation, which released a more polished browser, Netscape Navigator, in 1994. This quickly became the most-used.</p>\r\n\r\n<h3>Dynamic web pages</h3>\r\n\r\n<p>During these formative years of the Web, web pages could only be static, lacking the capability for dynamic behavior after the page was loaded in the browser. There was a desire in the flourishing web development scene to remove this limitation, so in 1995, Netscape decided to add a scripting language to Navigator. They pursued two routes to achieve this: collaborating with Sun Microsystems to embed the Java programming language, while also hiring Brendan Eich to embed the Scheme language.</p>\r\n\r\n<h3>Brendan Eich</h3>\r\n\r\n<p>Netscape management soon decided that the best option was for Eich to devise a new language, with syntax similar to Java and less like Scheme or other extant scripting languages.&nbsp;Although the new language and its interpreter implementation were called LiveScript when first shipped as part of a Navigator beta in September 1995, the name was changed to JavaScript for the official release in December.</p>\r\n\r\n<p>The choice of the JavaScript name has caused confusion, implying that it is directly related to Java. At the time, the dot-com boom had begun and Java was the hot new language, so Eich considered the JavaScript name a marketing ploy by Netscape.</p>\r\n\r\n<p><a href=\"https://en.wikipedia.org/wiki/JavaScript\" target=\"_blank\">https://en.wikipedia.org/wiki/JavaScript</a></p>\r\n', 1, '2022-10-10 11:09:32'),
(4, 'PHP: A general-purpose scripting language', 'php.png', '...', ' <p>PHP is a general-purpose scripting language geared toward web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994.&nbsp;The PHP reference implementation is now produced by The PHP Group. PHP originally stood for Personal Home Page, but it now stands for the recursive initialism PHP: Hypertext Preprocessor.</p>\r\n\r\n<p>PHP code is usually processed on a web server by a PHP interpreter implemented as a module, a daemon or as a Common Gateway Interface (CGI) executable. On a web server, the result of the interpreted and executed PHP code &ndash; which may be any type of data, such as generated HTML or binary image data &ndash; would form the whole or part of an HTTP response. Various web template systems, web content management systems, and web frameworks exist which can be employed to orchestrate or facilitate the generation of that response. Additionally, PHP can be used for many programming tasks outside the web context, such as standalone graphical applications&nbsp;and robotic drone control. PHP code can also be directly executed from the command line.</p>\r\n\r\n<p>The standard PHP interpreter, powered by the Zend Engine, is free software released under the PHP License. PHP has been widely ported and can be deployed on most web servers on a variety of operating systems and platforms.</p>\r\n\r\n<p>The PHP language evolved without a written formal specification or standard until 2014, with the original implementation acting as the de facto standard which other implementations aimed to follow. Since 2014, work has gone on to create a formal PHP specification.</p>\r\n\r\n<p>W3Techs reports that, as of January 2022, &quot;PHP is used by 78.1% of all the websites whose server-side programming language we know.&quot; PHP version 7.4 is the most used version. Support for version 7.3 was dropped on 6 December 2021.</p>\r\n\r\n<p>PHP development began in 1994 when&nbsp;Rasmus Lerdorf&nbsp;wrote several&nbsp;Common Gateway Interface&nbsp;(CGI) programs in C, which he used to maintain his&nbsp;personal homepage. He extended them to work with&nbsp;web forms&nbsp;and to communicate with&nbsp;databases, and called this implementation &quot;Personal Home Page/Forms Interpreter&quot; or PHP/FI.</p>\r\n\r\n<p>PHP/FI could be used to build simple,&nbsp;dynamic web applications. To accelerate&nbsp;bug&nbsp;reporting and improve the code, Lerdorf initially announced the release of PHP/FI as &quot;Personal Home Page Tools (PHP Tools) version 1.0&quot; on the&nbsp;Usenet&nbsp;discussion group&nbsp;comp.infosystems.www.authoring.cgi&nbsp;on June 8, 1995.&nbsp;This release already had the basic functionality that PHP has today. This included&nbsp;Perl-like variables, form handling, and the ability to embed&nbsp;HTML. The&nbsp;syntax&nbsp;resembled that of&nbsp;Perl, but was simpler, more limited and less consistent.</p>\r\n\r\n<p><a href=\"https://en.wikipedia.org/wiki/PHP\" target=\"_blank\">https://en.wikipedia.org/wiki/PHP</a></p>\r\n', 1, '2022-10-10 11:09:32'),
(5, 'MySQL: Most popular open-source database', 'sql.png', '...', ' <p>MySQl&nbsp;is an open-source relational database management system (RDBMS).&nbsp;Its name is a combination of &quot;My&quot;, the name of co-founder Michael Widenius&#39;s daughter My and &quot;SQL&quot;, the abbreviation for Structured Query Language. A relational database organizes data into one or more data tables in which data may be related to each other; these relations help structure the data. SQL is a language programmers use to create, modify and extract data from the relational database, as well as control user access to the database. In addition to relational databases and SQL, an RDBMS like MySQL works with an operating system to implement a relational database in a computer&#39;s storage system, manages users, allows for network access and facilitates testing database integrity and creation of backups.</p>\r\n\r\n<p>MySQL is free and open-source software under the terms of the GNU General Public License, and is also available under a variety of proprietary licenses. MySQL was owned and sponsored by the Swedish company MySQL AB, which was bought by Sun Microsystems (now Oracle Corporation).&nbsp;In 2010, when Oracle acquired Sun, Widenius forked the open-source MySQL project to create MariaDB.</p>\r\n\r\n<p>MySQL has stand-alone clients that allow users to interact directly with a MySQL database using SQL, but more often, MySQL is used with other programs to implement applications that need relational database capability. MySQL is a component of the LAMP web application software stack (and others), which is an acronym for Linux, Apache, MySQL, Perl/PHP/Python. MySQL is used by many database-driven web applications, including Drupal, Joomla, phpBB, and WordPress. MySQL is also used by many popular websites, including Facebook,&nbsp;Flickr,&nbsp;MediaWiki,&nbsp;Twitter,&nbsp;and YouTube.</p>\r\n\r\n<h3>Overview</h3>\r\n\r\n<p>MySQL is written in C and C++. Its SQL parser is written in yacc, but it uses a home-brewed lexical analyzer.&nbsp;MySQL works on many system platforms, including AIX, BSDi, FreeBSD, HP-UX, ArcaOS, eComStation, IBM i, IRIX, Linux, macOS, Microsoft Windows, NetBSD, Novell NetWare, OpenBSD, OpenSolaris, OS/2 Warp, QNX, Oracle Solaris, Symbian, SunOS, SCO OpenServer, SCO UnixWare, Sanos and Tru64. A port of MySQL to OpenVMS also exists.</p>\r\n\r\n<p>The MySQL server software itself and the client libraries use dual-licensing distribution. They are offered under GPL version 2, or a proprietary license.</p>\r\n\r\n<p>Support can be obtained from the official manual.&nbsp;Free support additionally is available in different IRC channels and forums. Oracle offers paid support via its MySQL Enterprise products. They differ in the scope of services and in price. Additionally, a number of third party organisations exist to provide support and services.</p>\r\n\r\n<p>MySQL has received positive reviews, and reviewers noticed it &quot;performs extremely well in the average case&quot; and that the &quot;developer interfaces are there, and the documentation (not to mention feedback in the real world via Web sites and the like) is very, very good&quot;.&nbsp;It has also been tested to be a &quot;fast, stable and true multi-user, multi-threaded SQL database server&quot;.</p>\r\n\r\n<h3>History</h3>\r\n\r\n<p>MySQL was created by a Swedish company, MySQL AB, founded by Swedes David Axmark, Allan Larsson and Finland Swede Michael &quot;Monty&quot; Widenius. Original development of MySQL by Widenius and Axmark began in 1994.&nbsp;The first version of MySQL appeared on 23 May 1995. It was initially created for personal usage from mSQL based on the low-level language ISAM, which the creators considered too slow and inflexible. They created a new SQL interface, while keeping the same API as mSQL. By keeping the API consistent with the mSQL system, many developers were able to use MySQL instead of the (proprietarily licensed) mSQL antecedent.</p>\r\n\r\n<p><a href=\"https://en.wikipedia.org/wiki/MySQL\" target=\"_blank\">https://en.wikipedia.org/wiki/MySQL</a></p>\r\n', 1, '2022-10-10 11:11:49'),
(6, 'Full-stack JavaScript with Node.js', 'nodejs.png', '...', ' <p>As an asynchronous event-driven JavaScript runtime, Node.js is designed to build scalable network applications. In the following &quot;hello world&quot; example, many connections can be handled concurrently. Upon each connection, the callback is fired, but if there is no work to be done, Node.js will sleep.</p>\r\n\r\n<p>This is in contrast to today&#39;s more common concurrency model, in which OS threads are employed. Thread-based networking is relatively inefficient and very difficult to use. Furthermore, users of Node.js are free from worries of dead-locking the process, since there are no locks. Almost no function in Node.js directly performs I/O, so the process never blocks except when the I/O is performed using synchronous methods of Node.js standard library. Because nothing blocks, scalable systems are very reasonable to develop in Node.js.</p>\r\n\r\n<h3>The event model&nbsp;</h3>\r\n\r\n<p>Node.js is similar in design to, and influenced by, systems like Ruby&#39;s Event Machine and Python&#39;s Twisted. Node.js takes the event model a bit further. It presents an event loop as a runtime construct instead of as a library. In other systems, there is always a blocking call to start the event-loop. Typically, behavior is defined through callbacks at the beginning of a script, and at the end a server is started through a blocking call like EventMachine::run(). In Node.js, there is no such start-the-event-loop call. Node.js simply enters the event loop after executing the input script. Node.js exits the event loop when there are no more callbacks to perform. This behavior is like browser JavaScript &mdash; the event loop is hidden from the user.</p>\r\n\r\n<p>HTTP is a first-class citizen in Node.js, designed with streaming and low latency in mind. This makes Node.js well suited for the foundation of a web library or framework.</p>\r\n\r\n<p>Node.js being designed without threads doesn&#39;t mean you can&#39;t take advantage of multiple cores in your environment. Child processes can be spawned by using our child_process.fork() API, and are designed to be easy to communicate with. Built upon that same interface is the cluster module, which allows you to share sockets between processes to enable load balancing over your cores.</p>\r\n\r\n<p><a href=\"https://nodejs.org/en/\" target=\"_blank\">Official homepage</a></p>\r\n\r\n<h3>Node.js is open-source</h3>\r\n\r\n<p>Node.js is an open-source, cross-platform, back-end JavaScript runtime environment that runs on a JavaScript Engine (i.e. V8 engine) and executes JavaScript code outside a web browser, which was designed to build scalable network applications. Node.js lets developers use JavaScript to write command line tools and for server-side scripting&mdash;running scripts server-side to produce dynamic web page content before the page is sent to the user&#39;s web browser. Consequently, Node.js represents a &quot;JavaScript everywhere&quot; paradigm,&nbsp;unifying web-application development around a single programming language, rather than different languages for server-side and client-side scripts.</p>\r\n\r\n<h3>Asynchronous I/O</h3>\r\n\r\n<p>Node.js has an event-driven architecture capable of asynchronous I/O. These design choices aim to optimize throughput and scalability in web applications with many input/output operations, as well as for real-time Web applications (e.g., real-time communication programs and browser games).</p>\r\n\r\n<p>The Node.js distributed development project was previously governed by the Node.js Foundation,&nbsp;and has now merged with the JS Foundation to form the OpenJS Foundation, which is facilitated by the Linux Foundation&#39;s Collaborative Projects program.</p>\r\n\r\n<p>Corporate users of Node.js software include GoDaddy,&nbsp;Groupon, IBM,&nbsp;LinkedIn,&nbsp;Microsoft,&nbsp;Netflix,&nbsp;PayPal,&nbsp;Rakuten, SAP,&nbsp;Walmart,&nbsp;Yahoo!,&nbsp;and Amazon Web Services.</p>\r\n\r\n<p><a href=\"https://en.wikipedia.org/wiki/Node.js\" target=\"_blank\">https://en.wikipedia.org/wiki/Node.js</a></p>\r\n', 1, '2022-10-10 11:11:49'),
(11, 'Svelte: A modern JavaScript framework', 'svelte.png', ' …', '<p>Svelte is a radical new approach to building user interfaces. Whereas traditional frameworks like React and Vue do the bulk of their work in the browser, Svelte shifts that work into a compile step that happens when you build your app. Instead of using techniques like virtual DOM diffing, Svelte writes code that surgically updates the DOM when the state of your app changes.</p>  <p>We&#39;re proud that Svelte was recently voted the most loved web framework with the most satisfied developers in a pair of industry surveys. We think you&#39;ll love it too. Read the introductory blog post to learn more.</p>  <h3>Similar to JavaScript frameworks such as React and Vue</h3>  <p>Svelte is a tool for building fast web applications. It is similar to JavaScript frameworks such as React and Vue, which share a goal of making it easy to build slick interactive user interfaces. But there&#39;s a crucial difference: Svelte converts your app into ideal JavaScript at build time, rather than interpreting your application code at run time. This means you don&#39;t pay the performance cost of the framework&#39;s abstractions, and you don&#39;t incur a penalty when your app first loads.</p>  <p>You can build your entire app with Svelte, or you can add it incrementally to an existing codebase. You can also ship components as standalone packages that work anywhere, without the overhead of a dependency on a conventional framework.</p>  <p><a href=\"https://svelte.dev\" target=\"_blank\">Official homepage</a></p>  <h3>Wikipedia about Svelte</h3>  <p>Svelte is a free and open-source front end compiler created by Rich Harris and maintained by the Svelte core team members.&nbsp;Svelte is not a monolithic JavaScript library imported by applications: instead, Svelte compiles HTML templates to specialized code that manipulates the DOM directly, which may reduce the size of transferred files and give better client performance;[5] application code is also processed by the compiler, inserting calls to automatically recompute data&nbsp;and re-render UI elements when the data they depend on is modified.&nbsp;This also avoids the overhead associated with runtime intermediate representations, such as virtual DOM,&nbsp;unlike traditional frameworks (such as React and Vue) which carry out the bulk of their work at runtime, i.e in the browser. The compiler itself is written in TypeScript. Its source code is licensed under MIT License and hosted on GitHub.</p>', 1, '2022-10-26 09:59:51');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `users`
--

CREATE TABLE `users` (
  `id` int(13) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `created` datetime NOT NULL,
  `gender` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Data dump for tabellen `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `created`, `gender`) VALUES
(23, 'b', 's', 'a', '1234', '2022-10-13 09:16:51', 'a'),
(24, 'a', 's', 'a', '1', '2022-10-13 13:22:56', 'a');

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tilføj AUTO_INCREMENT i tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
