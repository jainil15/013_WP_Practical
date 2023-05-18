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
    img{
        max-height: 200px;
        object-fit: cover; 
    }

    
</style>
<span id="firstline">e. Using JavaScript complete the form validation for fields in the given form.</span><br>
i. Name(User can enter text)
ii. Password(minimum six characters)
iii. Address(user can enter text & number)
iv. Phone no.(User can enter only numeric values)
v. Email address
    a. E-mail address must in xyz@abc.com format (Validate Using JavaScript)
    b. Display error message dialog box if user does not enter e-mail address in proper format.
vi. Two radio buttons for gender(male/female)
vii. Checkboxes for different hobbies
viii. One list for countries (at least 10 different countries in list)
ix. One submit button(error message should be displayed on the click of submit button if validation check fails OR message should be displayed “data submitted successfully”)
x. Reset Button (all fields on the form should be clear) 

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
        *{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        input{

            margin: 2px;
        }
    </style>
</head>
<body>
    <h1 align=center>FORM</h1>
    <form name="myForm" onsubmit="return(validate())">

        Name: <input type="text" name="name" id="name"><br><br>
        Password: <input type="password" name="pass" id="pass"><br><br>
        Address: <input type="text" name="address" id="address"><br><br>
        Phone no.: <input type="tel" name="phone" id="phone"><br><br>
        Email Address: <input type="text" name="email" id="email" ><br><br>
        <input type="radio" name="gender" value="Male"> Male 
        <input type="radio" name="gender" value="Female"> Female <br><br>
        <input type="checkbox" name="hobby" id=""> Cricket
        <input type="checkbox" name="hobby" id=""> Online games 
```
```
        <input type="checkbox" name="hobby" id=""> Reading
        <input type="checkbox" name="hobby" id=""> Coding
        <input type="checkbox" name="hobby" id=""> Football
        <br><br>
        Select countries: <select name="countries" id="countries">
            <option value="India">India</option>
            <option value="Armenia">Armenia</option>
            <option value="Pakistan">Pakistan</option>
            <option value="Nepal">Nepal</option>
            <option value="Sweden">Sweden</option>
            <option value="Bangladesh">Bangladesh</option>
            <option value="Russia">Russia</option>
            <option value="USA">USA</option>
            <option value="Australia">Australia</option>
            <option value="Germany">Germany</option>
            <option value="Sudan">Sudan</option>
        </select>
        <br><br>
        <input type="reset" value="reset"> 
        <input type="submit" value="submit">
        <script>
            function validate() {
                ;
                let pattern=/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/
                let phoneReg = /[a-zA-Z]/g
                let gender = document.getElementsByName("gender")
                if(document.forms["myForm"]["name"].value == "" || /\d/.test(document.forms["myForm"]["name"].value)) {
                    alert("Enter Name")
                    return false
                }
                if(document.forms["myForm"]["pass"].value.length < 6) {
                    alert("Passwords's length must be greater than 6")
                    return false
                }
                if(document.forms["myForm"]["address"].value.length == "") {
                    alert("Enter address")
                    return false
                }
                if(phoneReg.test(document.forms["myForm"]["phone"].value) || document.forms["myForm"]["phone"].value == "") {
                    alert("enter proper phone no")
                    return false
                }
                if(!pattern.test(document.forms["myForm"]["email"].value) ) {
                    alert("enter proper email")
                    return false
                }
                
                if(!radioCheck(gender)) {
                    alert("Select one gender")
                    return false
                }

                alert("data entered successfully")
                return true
                
            }

            function radioCheck(radio) {
                for (const item in radio ) {
                    if(radio[item].checked) {
                        return true
                    }
                }
                return false
            }
        </script>
    </form>
</body>
</html>
```
![Screenshot 2023-05-17 172504](/assets/Screenshot%202023-05-17%20172504.png)

![Screenshot 2023-05-17 172533](/assets/Screenshot%202023-05-17%20172533.png)

![Screenshot 2023-05-17 172551](/assets/Screenshot%202023-05-17%20172551.png)

![Screenshot 2023-05-17 172648](/assets/Screenshot%202023-05-17%20172648.png)