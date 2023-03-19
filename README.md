<h2 align="center">Practical 2</h2>

a) Demonstrate following tags in HTML. Create a simple html file to demonstrate the use of different tags listed below

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
start|number|Specifies the starting number of the first item in an ordered list.
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
required	|required|	This Boolean attribute indicates that an option with a non-empty value must be selected before form submission.
size	|number|	Specifies the number of options to show to the user.
disabled|	disabled|	This Boolean attribute indicates that drop-down list is disabled i.e. the drop-down list is not selectable.
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


