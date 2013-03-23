    <style>

    /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    html,body {
      background-color:grey;
      padding: 0px;
      margin: 0px;
      min-height: 100%;
    }



    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

    /* Special class on .container surrounding .navbar, used for positioning it into place. */
    .navbar-wrapper {
      padding: 0px;
      margin:0px;
      height:100px;
      width: 70%;
      margin: 0px auto;
      background-color: transparent;
      margin-bottom: 20px;
    }
    .navbar-wrapper .navbar {
      padding: 0px;
      margin:0px;
      background-color: transparent;
      height: 100px

    }

    /* Remove border and change up box shadow for more contrast */
    .navbar .navbar-inner {
      padding:0px;
      margin: 0px;
      height:50px;
      width: 74%;
      float: right;


    }

    /* Downsize the brand/project name a bit */
    .navbar .brand {
      padding: 0px;
      margin: 0px;
      width: 24.75%;
      height: 100%;
      background-color: yellow;
    }

    /* Navbar links: increase padding for taller navbar */

    .navbar ul {
      padding-left:40px;
      background-color: pink;
      width:95%;
      height: 100%;
    }
    .navbar .nav > li{
      display: inline-block;
      padding: 0px;
      margin:0px;
      width: 19.5%;
      height: 100%;                                                ;
    }
    .navbar .nav > li > a {
      text-align: center; 
      display: block;
      padding: 0px;
      margin: 0px;
      width: 18.5%;
    }

   /* Offset the responsive button for proper vertical alignment */
    .navbar .btn-navbar {
      margin-top: 10px;
    }



    /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------------- */

    /* Carousel base class */
    .carousel {
      border:10px solid purple;
    }

    .carousel .container {
      border:3px solid yellow;

    }

    .carousel-control {
    }

    .carousel .item {
      border:3px solid blue;
    }
    .carousel img {
      border:3px solid purple;
    }

    .carousel-caption {
      border:3px solid red;
    }
    .carousel-caption h1,
    .carousel-caption .lead {
      border:10px solid purple;
    }
    .carousel-caption .btn {
      border:10px solid yellow
      ;
    }



    /* MARKETING CONTENT
    -------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .span4 {
      border:10px solid purple;
    }
    }
    .marketing .span4 p {
      border:10px solid grey;
    }


    /* Featurettes
    ------------------------- */

    .featurette-divider {
    }
    .featurette {
    }
    .featurette-image {
    }

    /* Give some space on the sides of the floated elements so text doesn't run right into it. */
    .featurette-image.pull-left {
    }
    .featurette-image.pull-right {
    }

    /* Thin out the marketing headings */
    .featurette-heading {
    }



    /* RESPONSIVE CSS
    -------------------------------------------------- */

    @media (max-width: 979px) {

      .container.navbar-wrapper {
        margin-bottom: 0;
        width: auto;
      }
      .navbar-inner {
        border-radius: 0;
        margin: -20px 0;
      }

      .carousel .item {
        height: 500px;
      }
      .carousel img {
        width: auto;
        height: 500px;
      }

      .featurette {
        height: auto;
        padding: 0;
      }
      .featurette-image.pull-left,
      .featurette-image.pull-right {
        display: block;
        float: none;
        max-width: 40%;
        margin: 0 auto 20px;
      }
    }


    @media (max-width: 767px) {

      .navbar-inner {
        margin: -20px;
      }

      .carousel {
        margin-left: -20px;
        margin-right: -20px;
      }
      .carousel .container {

      }
      .carousel .item {
        height: 300px;
      }
      .carousel img {
        height: 300px;
      }
      .carousel-caption {
        width: 65%;
        padding: 0 70px;
        margin-top: 100px;
      }
      .carousel-caption h1 {
        font-size: 30px;
      }
      .carousel-caption .lead,
      .carousel-caption .btn {
        font-size: 18px;
      }

      .marketing .span4 + .span4 {
        margin-top: 40px;
      }

      .featurette-heading {
        font-size: 30px;
      }
      .featurette .lead {
        font-size: 18px;
        line-height: 1.5;
      }

    }
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->