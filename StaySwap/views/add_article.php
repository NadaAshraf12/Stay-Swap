<html>
<head>
    <title>Add article form</title>
    <style>
        body{
            padding: 0;
            margin: 0;
            background-color: #fefded;
            align-items: center;
            text-align: center;
        }
        #add-article-form-div{
            width: 50%;
            height: 80%;
            position: absolute;
            top: 10%;
            left: 25%;
            background-color: #fefded;
            align-items: center;
            text-align: center;
            border: 3px solid #000000;
            padding: 15px;
    }
    input{
      margin: 10px;
      padding: 20px;
      height: 20px;
      width: 600px;
    }
    button{
      background-color: #3898ec;
background-repeat: no-repeat;
background-size: cover;
border-color: #3898ec;
box-shadow: 10px 9px 0 -3px var(--black);
color: var(--black);
letter-spacing: 2px;
text-transform: uppercase;
mix-blend-mode: normal;
background-color: #fa7070;
border: 3px solid #000;
padding: 12px 25px;
font-family: Verdana, Geneva, sans-serif;
font-size: 12px;
font-weight: 700;
line-height: 20px;
text-decoration: none;
transition-property: all;
transition-duration: .2s;
transition-timing-function: ease;
    }
    button:hover{
      box-shadow: 10px 9px 0 -3px var(--black);
color: var(--black);
letter-spacing: 2px;
text-transform: uppercase;
mix-blend-mode: normal;
background-color: #fa7070;
border: 3px solid #000;
padding: 12px 25px;
font-family: Verdana, Geneva, sans-serif;
font-size: 12px;
font-weight: 700;
line-height: 20px;
text-decoration: none;
transition-property: all;
transition-duration: .2s;
transition-timing-function: ease;
    }

     button:hover{
      background-color: #c6ebc5;
     }

    </style>
    <link rel="stylesheet" type="text/css" href="../views/assets/CSS/header.css">

</head>
<body>
    <!--header 


<main class="traveler-home-header-outdiv">
<div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar-logo-left-container shadow-three w-nav">
    <div class="container" id="header-nav-container">
              <div class="traveler-header-innerdiv">
                <a href="#" class="navbar-brand w-nav-brand"><img src="images/person_icon (2).png" loading="lazy" width="62" alt=""></a>
                <ul role="list" class="nav-menu-two w-list-unstyled">
                  <li>
                    <a id="home-link" href="#" class="nav-link">HOME</a>
                  </li>
                  <li>
                    <a href="#" class="nav-link">HOSTS</a>
                  </li>
                  <li>
                    <a href="#" class="nav-link">BLOGS</a>
                  </li>
                  <li>
                  <a href="#" class="nav-link">Notifications</a>
                  </li>
                 
                </ul>
                <nav role="navigation" class="nav-menu-wrapper w-nav-menu">
                  <a href="#" class="nav-link-accent">Docs</a><img src="images/person_icon.jpg" loading="lazy" width="36" height="Auto" alt="person_icon" class="image link">
                </nav>
                <div class="menu-button w-nav-button">
                  <div class="w-icon-nav-menu"></div>
                </div>
              </div>
            </div>
</div>
</main>
-->
<div id="add-article-form-page-container1"></div>
<div id="add-article-form-page-header-container">
  <!--<h1>Add article form</h1>-->
</div>
    <div id="add-article-form-div" class="form-div">
    <form method="post" action="add_article.php">
        <!--<label for='art-title'><b>title<b></label>-->
<input
type='text'
id='art-title'
class='article-form-input-feild'
name='art-title'
placeholder="title"
autofocus
/>
<br><br><br>
<!--------------->
<!--<label for='art-desc'><b>description<b></label>-->
<input
type='text'
id='art-desc'
class='article-form-input-feild'
name='art-desc'
placeholder="description"
autofocus
/>
<br><br><br>
<!--------------->
<!--<label for='art-intro'><b>introduction<b></label>-->
<input
type='text'
id='art-intro'
class='article-form-input-feild'
name='art-intro'
placeholder="indroduction"
autofocus
/>
<br><br><br>
<!--------------->
<!--<label for='feed-body-feild'><b>body<b></label>-->
<input
type='text'
id='feed-body-content-feild'
class='article-form-input-feild'
name='feed-body-content-feild'
placeholder="article content"
autofocus
/>
<br><br><br>
<!--------------->
<!--<label for='Conc'><b>Conclusion</b></label>-->
<input
type='text'
id='Conc'
class='article-form-input-feild'
name='Conc'
placeholder='Conclusion'
autofocus
/>
<br><br><br>
<!--------------->
<!--<label for='Conc'><b>image</b></label>-->

<input
type='file'
id='article-form-img'
class='article-form-img-input-feild'
name='img'
/>
<br><br><br>




<!--<label for='Cat'><b>Category</b></label>-->
<select 
id='cat_select'
class='article-form-input-feild'
name='cat_select'
style ="display:inline-block"
>
<option value='1'>eco-friendly home stays</option>
<option value='2'>technology for journeys</option>
<option value='3'>destinations</option>
<option value='4'>Tips for hosting</option>
</select>
<br><br><br>

<button 
type='submit'
id='add-art_btn'
class='forms-input-btn'
name='add-art_btn'
>
<b>Post</b>
</button>

        <br><br>
    </form>
</body>
</html>

<?php
require_once '../Controllers/DBcontroller.php';
require_once '../Controllers/authController.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['art-title'];
    $desc = $_POST['art-desc'];
    $intro = $_POST['art-intro'];
    $content = $_POST['feed-body-content-feild']; 
    $conc = $_POST['Conc'];
    $cat_v = $_POST['cat_select'];
    $cat = ""; 
    switch ($cat_v) {
        case 1:
            $cat = "eco-friendly home stays";
            break;
        case 2:
            $cat = "technology for journeys";
            break;
        case 3:
            $cat = "destinations";
            break;
        case 4:
            $cat = "Tips for hosting";
            break;
        default:
            echo "Posted without a category!";
            break;
    }
    $auth = new AuthControlers();
    $user_id =$auth->get_SESSION_ID();

    $db = new DBcontroler();

    $insert_query = "INSERT INTO articles (title, introduction, description, body, user_id, Conclusion, category) VALUES ('$title', '$intro', '$desc', '$content', $user_id, '$conc', '$cat')";

    $insert_result = $db->executeQuery($insert_query);

    if ($insert_result === true) {
        echo "Article submitted successfully.";
    } else {
        echo $insert_result; 
    }

    // Close connection
    $db->closeConnection();
}
?>


