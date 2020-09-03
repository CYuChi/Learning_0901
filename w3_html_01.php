<!-- html basic  

1.The <!DOCTYPE> declaration represents the document type, and helps browsers to display web pages correctly.
It must only appear once, at the top of the page (before any HTML tags).
The <!DOCTYPE> declaration is not {case sensitive} >大小寫.

2.HTML Headings
HTML headings are defined with the <h1> to <h6> tags.

3.HTML Paragraphs
HTML paragraphs are defined with the <p>

4.HTML Links
HTML links are defined with the <a>

5.HTML Images
HTML images are defined with the <img> tag.
The source file (src), alternative text (alt), width, and height are provided as attributes

6.The HTML <pre> element defines preformatted text.
The text inside a <pre> element is displayed in a fixed-width font (usually Courier), and it preserves both spaces and line breaks

7.The HTML style attribute is used to add styles to an element, such as color, font, size, and more.


-->


<!doctype>
<html>
<head>
    <meta charset = "utf-8">
    <!-- use <h></h> + php -->
    <?php
        for($i=1 ; $i<=6 ;$i++)
            echo "<h$i> Try html + php </h$i>";
            
    ?>
</head>
<body>
    <!-- use <p></p> -->
    <p>I love this class.</p>
    <!-- use <a href></a> -->
    <a href = "https://github.com/">github</a><br>
    <!-- use <img></img>-->
    <img src="2.jpg" alt="照片" width="720" height="480">
    <!-- use <pre></pre>-->
    <pre>
1
111
11111
1111111
111111111
11111111111
    </pre>
    <!-- use style-->
    <p style="color:firebrick">Ya try it</p>
    <p style="background-color:firebrick">Ya try it</p>
    <p style="font-size:160%">Ya try it</p>
    <p style="font-family:courier;">Ya try it</p>
    <p style="text-align:center;">Ya try it</p>
    <!-- use <b> & <strong> -->
    <p><b>Ya try it</b></p>
    <p><strong>Ya try it</strong></p>
    <!-- use <i> & <em> & <small> & <mark> & <del> & <ins> & <sub> & <sup> -->
    <p><i>Ya try it</i></p>
    <p><em>Ya try it</em></p>
    <p><small>Ya try it</small></p>
    <p><mark>Ya</mark> try it</p>
    <p><del>Ya</del> try it</p>
    <p><ins>Ya</ins> try it</p>
    <p><sub>Ya</sub> try it</p>
    <p><sup>Ya</sup> try it</p>
</body>
</html>

