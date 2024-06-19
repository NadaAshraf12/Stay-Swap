<?php
require_once '../controllers/DBcontroller.php';
$db = new DBcontroler();
$result = $db->openConnection();
//if (isset($_GET['id'])) {
    //$article_id = $_GET['id'];
    //print_r($result);
    if($result){
      $article_id = 59;
        $query = "SELECT * FROM articles WHERE id = '$article_id'";
        $result = $db->selectFromDB($query);
        //print_r($result);
        if(count($result) == 1){
            $title = $result[0]['title'];
            //echo $title;
            $cat = $result[0]['category'];
            $intro = $result[0]['introduction'];
            $body = $result[0]['body'];
            $no_min = $result[0]['min'];
            $desc = $result[0]['description'];
            $likes_no = $result[0]['likesNO'];
            $conc = $result[0]['Conclusion'];
            $date = $result[0]['created_at'];
            $auth_id = $result[0]['user_id'];
            $r = ($db->selectFromDB("SELECT username FROM users WHERE id = '$auth_id'"));
            //print_r($r);
            $auth = ($r)[0]['username'];

        }
    //}
    //else{
      //  echo 'DB connection faild';
    //}
} else {
    // Handle case when no article ID is provided
    echo "Article ID not provided!";
}

?>
<html>
    <head>
        <title>explore | <?php echo $title; ?></title>
        <link rel="stylesheet" href="../views/assets/CSS/global.css">
    </head>
    <body>
    <header class="rl_section_blogpost1">
          <div class="rl-padding-global-5"  style="background-color:#fefded; padding-left: 5%;
              padding-right: 5%;
              background-color: #fefded;
              border: 5px solid #000;">
            <div class="rl-container-large-3">
              <div class="rl-padding-section-large-5"  style="background-color:#fefded;">
                <div class="rl_blogpost1_component">
                  <div class="rl_blogpost1_title-wrapper">
                    <div class="rl_blogpost1_breadcrumb">
                      <a href="#" class="rl-breadcrumb-link w-inline-block">
                        <div class="rl-breadcrumb-text">Blogs</div>
                      </a>
                      <div class="rl-breadcrumb-divider w-embed"><svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M6 3L11 8L6 13" stroke="CurrentColor" stroke-width="1.5"></path>
                        </svg></div>
                      <a href="#" class="rl-breadcrumb-link-active w-inline-block">
                        <div class="rl-breadcrumb-text"><?php echo $cat; ?></div>
                      </a>
                    </div>
                    <div class="rl_blogpost1_spacing-block-1"></div>
                    <h1 class="rl-heading-style-h2-2"><?php echo $title ?></h1>
                    <div class="rl_blogpost1_spacing-block-2"></div>
                    <div class="rl_blogpost1_content-top">
                      <div class="rl_blogpost1_author-wrapper">
                        <div class="rl_blogpost1_author-image-wrapper"><img src="../Views/images/pexels-team-wesake-775005568-18951469.jpg" loading="lazy" alt="" class="rl_blogpost1_author-image" style="border:#000 2px; object-fit: cover;
border-radius: 100%;
width: 3.5rem;
min-width: 3.5rem;
height: 3.5rem;
min-height: 3.5rem;
">
</div>
                        <div class="rl_blogpost1_details-wrapper">
                          <div class="rl_blogpost1_author-text"><?php echo $auth ?></div>
                          <div class="rl_blogpost1_date-wrapper">
                            <div class="rl-text-style-small-3"><?php echo $date ?></div>
                            <div class="rl_blogpost1_text-divider">•</div>
                            <div class="rl-text-style-small-3"><?php echo $no_min ?> min read</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="rl_blogpost1_spacing-block-3"></div>
                  <div class="rl_blogpost1_image-wrapper"><img src="../Views/images/pexels-qhung999-13454560.jpg" loading="lazy" alt="" class="rl_blogpost1_image"></div>
                  <div class="rl_blogpost1_spacing-block-4"></div>
                  <div class="rl_blogpost1_content">
                    <div class="rl-text-rich-text w-richtext">
                      <i><p><?php echo $intro ?></p></i>
                      <figure style="max-width:1280pxpx" class="w-richtext-align-fullwidth w-richtext-figure-type-image">
                        <div><img src="undefinedhttps://uploads-ssl.webflow.com/66296def0f62137f0b1736c3/6243807090316262904aee69_Placeholder%20Image%20-%20Landscape.svg" style="border: #000 3px;" loading="lazy" alt=""></div>
                        <figcaption>Image caption goes here</figcaption>
                      </figure>
                      <p><?php echo $body ?></p>
                      <p>‍</p>
                     <i> <h4 style="padding:20px; padding-left:0;">Conclusion</h4></i>
                    <span style="background-color: #c6ebc5;"><?php echo $conc ?></span>
                    <br>
                      </div>
                    <div class="rl_blogpost1_spacing-block-5"></div>
                    <div class="rl_blogpost1_content-bottom">
                      <div class="rl_blogpost1_share-wrapper">
                        <div class="rl-heading-style-h6">Share this post</div>
                        <div class="rl_blogpost1_spacing-block-6"></div>
                        <div class="w-layout-grid rl_blogpost1_share">
                          <a href="#" class="rl_blogpost1_social-link w-inline-block">
                            <div class="rl_blogpost1_social-icon w-embed"><svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.9999 7.66008V8.00008C21.0007 9.06616 20.576 10.0885 19.8199 10.84L16.9999 13.67C16.4738 14.1911 15.6261 14.1911 15.1 13.67L15 13.56C14.8094 13.3656 14.8094 13.0544 15 12.86L18.4399 9.42006C18.807 9.03938 19.0083 8.52883 18.9999 8.00008V7.66008C19.0003 7.12705 18.788 6.61589 18.4099 6.2401L17.7599 5.59011C17.3841 5.21207 16.873 4.99969 16.3399 5.00011H15.9999C15.4669 4.99969 14.9558 5.21207 14.58 5.59011L11.14 9.00007C10.9456 9.19064 10.6344 9.19064 10.44 9.00007L10.33 8.89007C9.8089 8.36394 9.8089 7.51623 10.33 6.99009L13.16 4.15012C13.9165 3.40505 14.9382 2.99133 15.9999 3.00014H16.3399C17.4011 2.9993 18.4191 3.42018 19.1699 4.17012L19.8299 4.83012C20.5798 5.5809 21.0007 6.59891 20.9999 7.66008ZM8.64993 13.94L13.9399 8.65008C14.0338 8.55543 14.1616 8.50218 14.2949 8.50218C14.4282 8.50218 14.556 8.55543 14.6499 8.65008L15.3499 9.35007C15.4445 9.44395 15.4978 9.57175 15.4978 9.70507C15.4978 9.83839 15.4445 9.96618 15.3499 10.0601L10.0599 15.35C9.96604 15.4447 9.83824 15.4979 9.70492 15.4979C9.57161 15.4979 9.44381 15.4447 9.34993 15.35L8.64993 14.65C8.55528 14.5561 8.50204 14.4283 8.50204 14.295C8.50204 14.1617 8.55528 14.0339 8.64993 13.94ZM13.5599 15C13.3655 14.8094 13.0543 14.8094 12.8599 15L9.42993 18.41C9.0517 18.7905 8.53645 19.003 7.99995 18.9999H7.65995C7.12691 19.0004 6.61576 18.788 6.23997 18.41L5.58997 17.76C5.21194 17.3842 4.99956 16.873 4.99998 16.34V16C4.99956 15.4669 5.21194 14.9558 5.58997 14.58L9.00993 11.14C9.2005 10.9456 9.2005 10.6345 9.00993 10.44L8.89993 10.33C8.3738 9.80894 7.52609 9.80894 6.99996 10.33L4.17999 13.16C3.42392 13.9116 2.99916 14.9339 3 16V16.35C3.00182 17.4077 3.42249 18.4216 4.16999 19.1699L4.82998 19.8299C5.58076 20.5799 6.59878 21.0008 7.65995 20.9999H7.99995C9.05338 21.0061 10.0667 20.5964 10.8199 19.8599L13.6699 17.01C14.191 16.4838 14.191 15.6361 13.6699 15.11L13.5599 15Z" fill="CurrentColor"></path>
                              </svg></div>
                          </a>
                        </div>
                      </div>
                      <div class="rl_blogpost1_tag-list-wrapper"></div>
                    </div>
                    <div class="rl_blogpost1_spacing-block-7"></div>
                    <div class="rl_blogpost1_divider"></div>
                    <div class="rl_blogpost1_spacing-block-8"></div>
                    <div class="rl_blogpost1_author-wrapper">
                      <div class="rl_blogpost1_author-image-wrapper"><img src="images/placeholder-image.svg" loading="lazy" alt="" class="rl_blogpost1_author-image"></div>
                      <div class="rl_blogpost1_details-wrapper">
                        <div class="rl_blogpost1_author-text-large"><?php ?></div>
                        <i class="fa-duotone fa-heart"></i>
                        <i class="fa-duotone fa-heart" style="--fa-primary-color: #ec4b4b; --fa-secondary-color: #ec4b4b;"></i> <?php echo  $likes_no+0 ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </header>
    </body>
</html>




