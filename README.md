<style>

    
    *{
        
        font-size:14px;
    }
    html body code{
        font-family: jetbrains mono !important;freesans,sans-serif;
        font-size: 14px !important;
        background: inherit !important
    }

    code {
    white-space : pre-wrap !important;
    word-break: break-word;
  }

    html body pre code, html body pre tt {
         display: flex;  
  flex-wrap: wrap;
        font-family: font: "Helvetica Neue",Helvetica,"Segoe UI",Arial,freesans,sans-serif !important;
        font-size: 14px !important;
        background: inherit !important
    }

    body{
        color: #000 !important
    }

    li>code:first-child{
        font-size: 14px !important;
        font-weight: bolder;
    }
    
    html body code{
        
        font-size: 14px !important;
    }

    #firstline{
        font-size: 16px;
        font-weight: bolder;
        color: #000;
    }

    
</style>
<h2 id ="header_" align="center">Practical 2</h2>
<span id="firstline">a. Demonstrate following tags in HTML. Create a simple html file to demonstrate the use of different tags listed below</span>
<br><br>

1. `<!--...-->`
- **Description:**
The comment tag is used to insert comments in the source code. Comments are not displayed in the browsers.
- **Attributes:**
The  comment tag does not support any standard attributes.

2. ```<a>```

- **Description:**
Anchor  tag.  The  `<a>`  tag  defines  a  hyperlink,  which  is  used  to  link  from  one  page  to another.  The  most  important  attribute  of  the  `<a>`  element  is  the  href  attribute,  which indicates the link's  destination.

- **Attributes:**

| Attribute      | Value | Description
| :-----------: | :-----------: | :-----: |
| href      | text       | Specifies  the  location  of  the  destination  document  or web  resource  (such  as  an  image,  PDF,  or  other media  file).
| name   | text        | Specifies the name of an anchor. Use the global attribute id instead.
|target|_blank <br> _parent <br> _self <br>_top| Defines  a  target  to  open  the  linked  resource specified in the href  attribute.
|type|content-type| Specifies  the  content  type  (MIME  type)  of  the  linked content–for  example,  "image/jpeg",  "text/html"  etc.


3. `<address>`
- **Description:**
 `<address>` tag  defines  the  contact  information  for  the  author/owner  of  a  document or an  article.
The contact information can be an email address, URL, physical address, phone number, social media handle, etc.
- **Attributes:**
The  `<address>`  tag  does  not  have  any  specific  attribute.  It  supports  global  and  event attributes of  html.

4. `<b>, <i>, <u>, <sup>, <sub>`
- **Description:** 
`<b>,<u> ,<i>,<sup>` and `<sub>` are HTML formatting elements.
`<b>` - Bold Text
`<i>` - Italic Text
`<u>` - Underlined Text
`<sub>` - Defines subscripted text
`<sup>` - Defines superscripted text

- **Attributes:**
These tags do not have any specific attributes.

5. `<body>`
- **Description:**
The  <body>  tag  defines  the  document's  body.  The  <body>  element  contains  all  the contents  of  an  HTML  document,  such  as  headings,  paragraphs,  images,  hyperlinks, tables, lists,  etc.
- **Attributes:**

| Attribute  | Value | Description |
| :-----------: | :------: |  :-----------------------------:|
|bgcolor|color|Color of the background of your page
|text|color|Color of the text on your webpage
|alink| color |Color of text for links
|link |color |Color of text for links that are not visited
|vlink|color|Color of the text visited links
|background |filename|Image to be used as a background

6. `<head>`
- **Description:**
The  `<head>`  element  is  a  container  for  metadata  (data  about  data)  and  is  placed between  the  `<html> ` tag  and  the  `<body>`  tag.  Metadata  is  data  about  the  HTML document. Metadata is not displayed. Metadata typically define the document title, character  set,  styles,  scripts,  and  other  meta  information.
The following elements can go inside the `<head>` element:
`<title>` (required in every HTML document)
`<style>`
`<base>`
`<link>`
`<meta>`
`<script>`

- **Attributes:**

| Attribute | Value | Description |
| :----: | :----: | :---: |
|clear|none<br>left<br>right<br>all|Specifies where the next line should appear after the line break caused by this element.

7. `<center>`

- **Description:** 
The `<center>` tag is used to center-align text.

- **Attributes:**
  
|Attribute|Value|Description
|:-:|:-:|:-:|
|size|pixels|Specifies the height of the rule
|width|pixels%|Specifies the height of the rule.

`<head>`
-**Description:**
The `<html>` tag represents the root of an HTML document. The `<html>` tag is the container for all other HTML elements (except for the <!DOCTYPE> tag).

8. `<p>`
-**Description:**
The `<p>` HTML element represents a paragraph. Paragraphs are usually represented in visual media as blocks of text separated from adjacent blocks by blank lines and/or first- line indentation, but HTML paragraphs can be any structural grouping of related content, such as images or form fields.

- **Attributes:**

| Attribute    | Value   | Description |
|:---:|:-:|:-:|
|align|left<br>right<br>center<br>justify|Aligns the content inside a heading element.

9. ```<pre>```
- **Description:**
The `<pre>` tag defines preformatted text. Text in a `<pre>` element is displayed in a fixed-width font, and the text preserves both spaces and line breaks. The text will be displayed exactly as written in the HTML source code.

- **Attributes:**

|Attribute|Value|Description|
|:-:|:-:|:-:|
|width|number|Specifies the maximum number of characters per line.

10. `<img>`
- **Description:**
The `<img>` tag is used to embed an image in an HTML page. Images are not technically inserted into a web page; images are linked to web pages. The `<img>` tag creates a holding space for the referenced image.

- **Attributes:**

|Attribute|Value|Description|
|:-:|:-:|:-:|
alt|text|Provides an alternate text for an image.
src|URL|Specifies the URL of the image file to be displayed.
align|left<br>right<br>top<br>middle<br>bottom|Specifies the alignment of an image with respect to the surrounding elements.
border|pixels|Specifies the width of the border around the image.
height|length|height	length	Specifies the height of the image.
hspace|pixels|hspace	pixels	Specifies the amount of whitespace on left and right side of an image.
vspace|pixels|Specifies the amount of whitespace on top and bottom side of the image.
width|length|Specifies the width of the image.

11. `<ul>`
- **Description:**
The `<ul>` element is for grouping a collection of items that do not have a numerical ordering, and their order in the list is meaningless. The `<ul>` tag defines an unordered (bulleted) list. Use the `<ul>` tag together with the `<li>` tag to create unordered lists.

- **Attributes:**

|Attribute|Value|Description|
|:-:|:-:|:-:|
type|circle<br>disc<br>square|Defines the shape of the bullets used for each list item.

12. `<ol>`
- **Description:**
HTML Ordered List or Numbered List displays elements in numbered format. We can use ordered list to represent items either in numerical order format or alphabetical order format, or any format where an order is emphasized. There can be different types of numbered list.

- **Attributes:**

|Attribute|Value|Description|
|:-:|:-:|:-:|
type|1,A,a,l,i|Specify the bullet or numbering type for the list item.
start|number|Specifies the starting number of the first item
in an ordered list.
reversed|reversed|reversed	reversed	This Boolean attribute specifies that the items of the list are specified in the reverse order.

13. `<li>`
- **Description:**
HTML Lists are used to specify lists of information. All lists may contain one or more list elements. There are three different types of HTML lists:
    1. Ordered List or Numbered List (ol)
    2. Unordered List or Bulleted List (ul)
    3. Description List or Definition List (dl)

- **Attributes:**
  
|Attribute|Value|Description|
|:-:|:-:|:-:|
type|Circle, disc, square, a, A, i, l, 1|Specify the bullet or numbering type for the list item.
value|number|Sets the number of the current list item (only for ordered lists).

14. `<table>`

- **Description:**
The `<table>` tag is used to represents data in a grid-like fashion (in rows and columns).

- **Attributes:**

|Attribute|Value|Description|
|:-:|:-:|:-:|
align|left<br>center<br>right|Specifies the alignment of the table with respect to the document.
cellpadding|length|Specifies the space between the edge of a cell and its content.
cellspacing|length|Specifies the amount of space between individual cells.
border|1, 0|Specifies whether the table cells should have borders or not
bgcolor|color|Sets the background color of the table.

15. `<td>, <th>`
- **Description:**
A Table cells may contain two types of information: header information and data.
The `<td>` (short for table data) tag defines a data cell in a table.
The `<th>` (short for table head) tag defines a cell that contains header information.

- **Attributes:**
  
|Attribute|Value|Description|
|:-:|:-:|:-:|
colspan|number|Specifies the number of columns spanned by the current cell.
rowspan	|number	|Specifies the number of rows spanned by the current cell.
align	|left <br>right <br>center<br> justify <br> char|Specifies the alignment of cell contents.
bgcolor	|color	|Sets the background color of a table cell.
height|	length|	Sets the height of the table cell.
width	|length|	Sets the width of a table cell.

16. `<tr>`
- **Description:**
The `<tr>` (short for table row) element defines a row of cells in a table.
The `<tr>` element acts as a container for table cells and contains one or more `<th>` or `<td>` elements.

- **Attributes:**

|Attribute|Value|Description|
|:-:|:-:|:-:|
align	|left<br> right<br> center<br> justify<br>char|	Specifies the horizontal alignment of each cell content within the table row.
bgcolor |	color|	Sets the background color of each cell of the table row.

17. `<caption`
- **Description:**
The `<caption>` tag defines the title of a table. The caption text should describe the nature of the table. The caption tag only permitted immediately after the `<table>` start tag. A `<table>` element may only contain one `<caption>` element.

- **Attributes:**

|Attribute|Value|Description|
|:-:|:-:|:-:|
align|	top<br> bottom<br> left<br>right|	Specifies the position of the caption with respect to the table.

18. `<frameset>`
- **Description:**
The `<frameset>` tag in HTML is used to define the frameset. The `<frameset>` element contains one or more frame elements. It is used to specify the number of rows and columns in frameset with their pixel of spaces. Each element can hold a separate document. The `<frameset>` tag is not supported in HTML5.

- **Attributes:**

|Attribute|Value|Description|
|:-:|:-:|:-:|
cols|	pixels%|Specifies the layout of horizontal frames. It is a comma-separated list of pixels, percentages, and relative lengths. The default value is 100%, meaning one row.
rows|	pixels%|Specifies the layout of vertical frames. It is a comma- separated list of pixels, percentages, and relative lengths. The default value is 100%, meaning one column.

19. `<frame>`

- **Description:**
The `<frame>` tag defines a specific window, a frame, where we can load another web page. Use the src attribute to define the address of this web page. The web page can have several such frames. The `<frame>` tag is used with the `<frameset>` element, which defines how to divide the window into frames.
 
- **Attributes:**

|Attribute|Value|Description|
|:-:|:-:|:-:|
src|	URL	|Specifies the location of the document to show inside a frame.
scrolling	|yes<br> no <br> auto	|Specifies whether overflowing content in frame causes scroll bars to appear or not.
name	|text	|Assigns a name to the current frame.
noresize|	noresize |	This boolean attribute specifies that the frame window is not resizable by the users.
frameborder|	0<br> 1|	Instructs the browser whether or not to display a border around the frame. The default value 1.

20. `<form>`

- **Description:**
The `<form>`tag defines an HTML form that contains interactive controls which enable a user to submit information to a web server. The `<form>` element can contain one or more of the following form elements.
An HTML form is a section of a document which contains controls such as text fields, password fields, checkboxes, radio buttons, submit button, menus etc. An HTML form facilitates the user to enter data that is to be sent to the server for processing such as name, email address, password, phone number, etc.
- **Attributes:**
  
|Attribute|Value|Description|
|:-:|:-:|:-:|
action|	URL	|Specifies the URL of a program that processes the information submitted via the form.
method	|get <br> post|	Specifies which HTTP method will be used to submit the form data.
name	|text	|Specifies the name of a form.
target	|_blank <br>_parent <br>_self<br> _top<br> framename|	Specifies a target to display the response that is received after submitting the form

21. `<input>`
- **Description:**
The `<input>` tag is used to create interactive controls within a form.
An `<input>` element can vary in the way it appears and the attributes it uses or requires depending on the type attribute specified.
 
- **Attributes:**

|Attribute|Value|Description|
|:-:|:-:|:-:|
type	|button,checkbox color,date datetime,email file,hidden image,month number,password radio,range reset,search submit,text, time,url,week|	Specifies the type of control to create.
src	|URL	|Specifies the location of the image to use as a submit button (for type="image").
value	|text	|Specifies the initial value of the input control.
align	|left, right top, middle, bottom	|Specifies the alignment of an image input (for type="image").
alt|	text|	Specifies an alternative text to use when image is not available (for type="image").
checked	|checked	|This boolean attribute specifies that the control is selected by default (for type="radio" or type="checkbox").
disabled	|disabled|	This Boolean attribute disables the control for user input or interaction.
formtarget|	_blank<br> _self<br> _parent<br>_top <br>framename|	Specifies a target to display the response that is received after submitting the form (for type="submit" and type="image")
name	|text|	Assign a name to an input control.
align|	left<br> right<br> top<br> middle<br> bottom|	Specifies the alignment of an image input (for type="image").
form	|form-id|	Specifies the `<form>` element that the input element is associated with (its form owner).
required	|required	|This Boolean attribute specifies that the user must fill in a value before submitting the form.
 
22. `<textarea>`

- **Description:**
The `<textarea>` tag defines a multi-line text input control. The `<textarea>` element is often used in a form, to collect user inputs like comments or reviews. A text area can hold an unlimited number of characters, and the text renders in a fixed-width font.

- **Attributes:**

|Attribute|Value|Description|
|:-:|:-:|:-:|
cols	|number|	Specifies the number of visible text lines.
disabled	|disabled|	This boolean attribute disables the textarea for user input or interaction.
name	|unique-name	|Assign a name to the textarea control.
required|	required|	This Boolean attribute specifies that the user must fill in a value before submitting the form.
rows|	number|	Specifies the visible width in average character widths.
maxlength|	number|	Specifies the maximum number of characters that the user can enter in the textarea.
minlength	|number|	Specifies the minimum number of characters required that the user should enter in the textarea.

23. `<select>`
- **Description:**
The `<select>` element is used to create a drop-down list. The `<select>` element is most often used in a form, to collect user input.

- **Attributes:**

|Attribute|Value|Description|
|:-:|:-:|:-:|
multiple|	multiple|	This Boolean attribute indicates that multiple options can be selected in the list.
name|	unique-name|	Defines the name for the select element.
required	|required|	This Boolean attribute indicates that an option with
a non-empty value must be selected before form submission.
size	|number|	Specifies the number of options to show to the user.
disabled|	disabled|	This Boolean attribute indicates that drop-down list
is disabled i.e. the drop-down list is not selectable.
form	|form-id	|Specifies the form that the select element is associated with i.e. its "form owner".
 
24. `<option>`

- **Description:**
The `<option>` element represents an option in a dropdown list defined by the `<select> `element. A dropdown list must contain at least one `<option>` element.

- **Attributes:**

|Attribute|Value|Description|
|:-:|:-:|:-:|
label	|text|	Specifies a short label for an option.
disabled	|disabled|	This Boolean attribute indicates that the enclosed option is disabled i.e. the option is not selectable.
selected	|selected|	This Boolean attribute indicates that the option is initially selected.
value	|option-value|Defines a value for an option. If it is not defined, the value of an `<option>` element is the text content of the element.

25. `<marquee>`

- **Description:**
The HTML `<marquee>` tag is used for scrolling piece of text or image displayed either horizontally across or vertically down your web site page depending on the settings.
- **Attributes:**

|Attribute|Value|Description|
|:-:|:-:|:-:|
behavior|	scroll <br>slide<br> alternate |Defines the type of scrolling.
direction|	up<br> down<br> left<br> right|	Defines the direction of scrolling the content.
scrolldelay	|seconds|	Defines how long to delay between each jump.
scrollamount|	number|	Defines how how far to jump.
width	|pixels or %|	Defines the width of marquee.
height|	pixels or %|	Defines the height of marquee.
hspace	|pixels	|Specifies horizontal space around the marquee.
vspace	|pixels|	Specifies vertical space around the marquee.
loop	|number	|Specifies how many times to loop. The default value is INFINITE, which means that the marquee loops endlessly.
bgcolor	|Color Name|	Define the background color of the marquee.

<br><br>

**CODE:**
```
<!-- this is a comment -->
<html>
    <head>
        <title>Document</title>
    </head>
    <body>
        <h1>Welcome to the Page</h1>
        <br>
        <a href="www.google.com">Google</a>
        <br><br>
        <address class="">
            444 RoundBurrow<br>
            near Saint rows park<br>
            Somecountry
        </address>
        <br>
        <b>This is a bold tag</b>
        <br>
        <i>This is an italics tag</i>
        <h1>This is h1</h1>
        <h2>This is h2</h2>
        <h3>This is h3</h3>
        <h4>This is h4</h4>
        <h5>This is h5</h5>
        <h6>This is h6</h6>
        <hr>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
        <pre>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</pre>
        <img src="https://picsum.photos/536/354" alt="https://picsum.photos/200/300">
        <ol>
         <li>Coffee</li>
         <li>Tea</li>
         <li>Milk</li>
        </ol>
        <ul>
         <li>Coffee</li>
         <li>Tea</li>
         <li>Milk</li>
        </ul>
```
```
        <table border="1">
            <caption>hello</caption>
            <th>col1</th>
            <th>col2</th>
            <th>col3</th>
            <th>col4</th>
            <tr>

                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
            </tr>
            <tr>

                <td>5</td>
                <td>6</td>
                <td>7</td>
                <td>8</td>
            </tr>
        </table>

        <iframe src="https://picsum.photos/200/300" width="300" height="200"></iframe>
        <br><br><br>
        <form action="index.html" method="post">
            <input type="text" name="Name" value="Enter name">
        </form>



    </body>
</html> 
```

<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

**Output:**<br>
![alltag](/assets/alltag.png)

<br><br><br><br><br><br>
**2.Frame**

**CODE:**

```
<!DOCTYPE html>
<html>    
    <head>
        <title>frameset attribute</title>
        <style>
            frameset{
                vertical-align: top;
            }
        </style>
    </head>
         
    <frameset cols = "20%, 30%, 30%, 20%">
         <frameset rows="100 , 200, 130">
            <frame/>
            <frame />
            <frame />
         </frameset>
         <frameset rows="170 , 130">
            <frame />
            <frame />
         </frameset>
         <frameset rows="130 , 170">
            <frame />
            <frame />
         </frameset>
         <frameset rows="100, 150 , 60">
            <frame />
            <frame />
            <frame />
         </frameset>
    </frameset>
</html>
```
<br><br><br><br><br><br><br><br><br><br><br><br>

**Output:**
![framesfor1](/assets/framesfor1.png)
<br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<span id="firstline">b. Demonstrate use of DIV and SPAN tag.</span>

- `<div>`
The `<div>` tag defines a division or a section in an HTML document. The `<div>` tag is used as a container for HTML elements - which is then styled with CSS or manipulated with JavaScript. The `<div>` tag is easily styled by using the class or id attribute. Any sort of content can be put inside the `<div>` tag!
<br>
- `<span>`
The `<span>` tag is an inline container used to mark up a part of a text, or a part of a document. The `<span>` tag is easily styled by CSS or manipulated with JavaScript using the class or id attribute. The `<span>` tag is much like the `<div>` element, but `<div> `is a block- level element and `<span>` is an inline element.

**CODE:**

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>My mother has <span style="color:blue">blue</span> eyes.</p> 
    <div style="border:1px solid pink;padding:20px;font-size:20px">  
        <p>This is the first paragraph</p>  
        <p>This is second paragraph</p>  
        </div> 
</body>
</html>
```
<br>
**Output:**

![divspan](/assets/divspan_2duze5gpx.png)

<br><br><br>

<span id="firstline">c. Demonstrate Types of Hyperlinks in HTML(use of anchor tag).</span>
- **Inline Link:**
Inline linking (also known as hotlinking, leeching, piggy-backing, direct linking, offsite image grabs) is the use of a linked object, often an image, on one site by a web page belonging to a second site. One site is said to have an inline link to the other site where the object is located.
Inline link is a clickable hyperlink that directs the user to another page or resource on the internet, or even within the same web page.

- **Absolute Link:**
An absolute link is a hyperlink that specifies the full URL or web address of the destination page or resource. It includes the protocol, domain name, and path to the resource, such as the following example: https://www.example.com/page.html
Absolute hyperlinks are used when linking to pages outside of the current site that have a different domain name.

- **Relative Link:**
Relative hyperlinks are addresses that are relative to the current domain or location. They only contain the name of the target page prefixed with any necessary folder moves (for example, default.html).

**Output:**

![abslink](/assets/abslink.png)
<br><br><br><br><br><br><br><br><br><br><br><br>

<span id="firstline"> d. Design a page of small picture album. And when you click on image it should display picture in new browser window.</span>

**CODE:**

<div class="force-word-wrap">

```
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <style>
            body{
                background-color: grey;
            }
            img {
                width: 300px;
                height: 250px;
                border: 2px solid blue
            }
            p{
                
                color: green;
                font-size: 1.3rem;
                margin-bottom: 0;
            
            }
            hr{
                line-height: 0px;
                margin-bottom: 15px;
                border-top: 3px solid red;
                width: 80%
            }
            h1,h2{
                color: yellow;
            }
            
        </style>
    </head>
    <body style="font-family: sans-serif;">
        <h1 align="center">A Simple Photo Album</h1>
        <p align="center">Some random text that I can't read</p>
        <hr>
        <div class="first" align="center">
            <a href="https://plus.unsplash.com/premium_photo-1675446084550-8b4ca9522bc8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8d2lsZGxpZmV8ZW58MHx8MHx8&auto=format&fit=crop&w=1000&q=60"target="_blank"><img src="https://plus.unsplash.com/premium_photo-1675446084550-8b4ca9522bc8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8d2lsZGxpZmV8ZW58MHx8MHx8&auto=format&fit=crop&w=1000&q=60"></a>
```
```
            <a href="https://images.unsplash.com/photo-1575550959106-5a7defe28b56?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8d2lsZGxpZmV8ZW58MHx8MHx8&auto=format&fit=crop&w=1000&q=60"target="_blank"><img src="https://images.unsplash.com/photo-1575550959106-5a7defe28b56?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8d2lsZGxpZmV8ZW58MHx8MHx8&auto=format&fit=crop&w=1000&q=60"></a>
            <a href="https://images.unsplash.com/photo-1549366021-9f761d450615?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8d2lsZGxpZmV8ZW58MHx8MHx8&auto=format&fit=crop&w=1000&q=60"target="_blank"><img src="https://images.unsplash.com/photo-1549366021-9f761d450615?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8d2lsZGxpZmV8ZW58MHx8MHx8&auto=format&fit=crop&w=1000&q=60"></a>
        </div>
        <h2 align="center">Wild Life!</h2>
        <div class="second" align="center">
            <a href="https://images.unsplash.com/photo-1520552159191-e28a1d9f0d7e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8d2lsZGxpZmV8ZW58MHx8MHx8&auto=format&fit=crop&w=1000&q=60"target="_blank"><img src="https://images.unsplash.com/photo-1520552159191-e28a1d9f0d7e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8d2lsZGxpZmV8ZW58MHx8MHx8&auto=format&fit=crop&w=1000&q=60"></a>
            <a href="https://images.unsplash.com/photo-1543946207-39bd91e70ca7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8d2lsZGxpZmV8ZW58MHx8MHx8&auto=format&fit=crop&w=1000&q=60"target="_blank"><img src="https://images.unsplash.com/photo-1543946207-39bd91e70ca7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8d2lsZGxpZmV8ZW58MHx8MHx8&auto=format&fit=crop&w=1000&q=60"></a>

        </div>
        <h2 align="center">Butterflies</h2>
        <div class="third" align="center">
            <a href="https://images.unsplash.com/photo-1549480017-d76466a4b7e8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8d2lsZGxpZmV8ZW58MHx8MHx8&auto=format&fit=crop&w=1000&q=60"target="_blank"><img src="https://images.unsplash.com/photo-1549480017-d76466a4b7e8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8d2lsZGxpZmV8ZW58MHx8MHx8&auto=format&fit=crop&w=1000&q=60"></a>
            <a href="https://images.unsplash.com/photo-1526336024174-e58f5cdd8e13?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8d2lsZGxpZmV8ZW58MHx8MHx8&auto=format&fit=crop&w=1000&q=60"target="_blank"><img src="https://images.unsplash.com/photo-1526336024174-e58f5cdd8e13?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8d2lsZGxpZmV8ZW58MHx8MHx8&auto=format&fit=crop&w=1000&q=60"></a>
            <a href="https://images.unsplash.com/photo-1456926631375-92c8ce872def?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fHdpbGRsaWZlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=1000&q=60"target="_blank"><img src="https://images.unsplash.com/photo-1456926631375-92c8ce872def?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fHdpbGRsaWZlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=1000&q=60"></a>
        </div>
    </body>
</html>

```
<br>
</div>


**Output:**

![wildlifeAlbum](/assets/wildlifeAlbum.png)

<br><br>
<style>
    *{
        
        font-size:14px;
    }
    html body code{
        font: "Helvetica Neue",Helvetica,"Segoe UI",Arial,freesans,sans-serif;
        font-size: 14px !important;
        background: inherit !important
    }

    html body pre code, html body pre tt {
        font-family: jetbrains mono !important;
        font-size: 14px !important;
        background: inherit !important
    }

    body{
        color: #000 !important
    }

    li>code:first-child{
        font-size: 14px !important;
        font-weight: bolder;
    }
    
    html body code{
        font-size: 14px !important;
    }

    code{
        font-family:"Helvetica Neue",Helvetica,"Segoe UI",Arial,freesans,sans-serif !important;
    }

    #firstline{
        font-size: 16px !important;
        font-weight: bolder;
        color: #000;
    }

    
</style>
<h2 id ="header_" align="center">Practical 3</h2>
<span id="firstline">a. Design tables given below:</span>
<br><br>

1. **Code:**
```
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <style>
            table{
                margin: auto;
                margin-top: 5%;
                width: 65%;
                border-collapse: collapse;
            }
            td{
                height: 40px;
                padding: 1px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <table border="1px">
            <tr>
                <td rowspan="2">Train Name</td>
                <td colspan= "2">Time</td>
                <td rowspan="2">Source</td>
                <td rowspan="2">Destination</td>
            </tr>
            <tr>
                <td>Arrival</td>
                <td>Departure</td>
            </tr>
            <tr>
                <td>Udyan Express</td>
                <td>7:50 pm</td>
                <td>8:30 pm</td>
                <td>Banglore</td>
                <td>Mumbai</td>
            </tr>
```
```
            <tr>
                <td>Baroda Express</td>
                <td>11:30 pm</td>
                <td>11:35 pm</td>
                <td>Mumbai</td>
                <td>Vadodara</td>
            </tr>
            <tr>
                <td>Karnavati Express</td>
                <td>7:00 am</td>
                <td>7:10 am</td>
                <td>Vadodara</td>
                <td>Surat</td>
            </tr>
        </table>
    </body>
</html>

```

**Output:**
![traintable](/assets/traintable_f45znkx8o.png)

<br><br><br><br><br><br><br><br><br><br><br><br><br>
2.<br>

**Code:**
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: sans-serif;

        }
        table{
            margin: auto;
            margin-top: 20vh;
            text-align: left;
            width: 600px;
            height: 300px;
            border-collapse: collapse;
        }
        td{
            vertical-align: top;
            border: 2px solid blue;
            padding: 8px;
        }
    </style>
</head>
<body>
    <table>
        
        <tr>
            <td rowspan="3">A</td>
            <td colspan="6">B</td>

        </tr>
        
        <tr>
            <td colspan="2">E</td>
            <td colspan="1">F &nbsp; &nbsp;</td>
            <td rowspan="2">C</td>
            <td>&nbsp;&nbsp;</td>
        </tr>
```
```       
        <tr>
            <td colspan="3">D</td>
            <td>&nbsp;&nbsp;</td>
        </tr>
    </table>
</body>
</html>
```

**Output:**

![2ndtable](/assets/2ndtable.png)

<br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<span id="firstline">b. Create a web page dividing it using frame as shown in following Figure.</span>
1.<br>

**CODE:**

```
<!DOCTYPE html>
<html>    
    <head>
        <title>frameset attribute</title>
        <style>
            frameset{
                vertical-align: top;
            }
        </style>
    </head>
         
    <frameset cols = "20%, 30%, 30%, 20%">
         <frameset rows="100 , 200, 130">
            <frame/>
            <frame />
            <frame />
         </frameset>
         <frameset rows="170 , 130">
            <frame />
            <frame />
         </frameset>
         <frameset rows="130 , 170">
            <frame />
            <frame />
         </frameset>
         <frameset rows="100, 150 , 60">
            <frame />
            <frame />
            <frame />
         </frameset>
    </frameset>
</html>
```

**Output:**

![framesfor1](/assets/framesfor1_xzupvmsps.png)

<br><br>

2.<br>
**CODE:**

```
<!DOCTYPE html>
<html>    
    <head>
        <title>frameset attribute</title>
        <style>
            frameset{
                vertical-align: top;
            }
        </style>
    </head>
    <frameset rows="12%, 76%, 12%">
    <frameset cols = "100%">
        <frame/>
    </frameset>
    <frameset cols = "10%, 90%">
        <frame/>
        <frame/>
    </frameset>
    <frameset cols = "100%">
         <frame/>
    </frameset>
</frameset>
</html>
```

**Output:**


![2ndlayoutframse](/assets/2ndlayoutframse.png)

<br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<span id="firstline">c. Create one form with following fields</span>

**CODE:**

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: burlywood;
            font-family: sans-serif;
            font-size: 1.1rem;
            line-height: 1.5rem;
        }
        select{
            font-size: 1rem;
        }
    </style>
</head>
<body>
    <form>
        <label for="Name">Name:</label>
        <input type="text">
        <br>
        <label for="Password">Password:</label>
        <input type="password">
        <br>
        <label for="Address">Address:</label><br>
        <textarea name="Address" cols="40" rows="8" >Enter addresss here</textarea>
        <br>
        <label for="PhoneNo">Phone no.:</label>
        <input type="tel">
        <br>
        <label for="Email Address">Email:</label>
        <input type="email">
        <br>
        <label for="Gender">Gender:</label>
        
        <input type="radio" name="Gender">
        <label for="Male">Male</label>
```
```
        <input type="radio"name="Gender">
        <label for="Female">Female</label>

        <br>
        <label for="Hobbies">Hobbies:</label>
        <input type="checkbox" name="Hobbies">
        <label for="Hobbies">Cricket</label>
        <input type="checkbox" name="Hobbies">
        <label for="Hobbies">Videogames</label>
        <input type="checkbox" name="Hobbies">
        <label for="Hobbies">Singing</label>
        <input type="checkbox" name="Hobbies">
        <label for="Hobbies">Reading</label>
        <br>
        <label for="Country">Country:</label>
        <select name="Country">
            <option value="India">India</option>
            <option value="USA">USA</option>
            <option value="Armenia">Armenia</option>
            <option value="Pakistan">Pakistan</option>
            <option value="China">China</option>
            <option value="Russia">Russia</option>
            <option value="Sri Lanka">Sri Lanka</option>
            <option value="Bangladesh">Bangladesh</option>
            <option value="UK">UK</option>
            <option value="Sweden">Sweden</option>
            <option value="Norway">Norway</option>
            <option value="Nepal">Nepal</option>
            <option value="Bhutan">Bhutan</option>

        </select>
        <br>

        <input type="submit" value="SUBMIT">
        <input type="reset" value="RESET">

    </form>
</body>
</html>
```

**Output:**

![registratioonformt](/assets/registratioonformt.png)
