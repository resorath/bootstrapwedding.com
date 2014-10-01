<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BootStrap Wedding - Modern Wedding Websites, Guest Management, Wedding Planning</title>
    <link href="<?=base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url() ?>assets/css/core.css" rel="stylesheet"> <!-- including desktop -->
    <link href="<?=base_url() ?>assets/css/tablet.css" rel="stylesheet"> <!--or phablets or whatever -->
    <link href="<?=base_url() ?>assets/css/phone.css" rel="stylesheet"> <!-- smart phones... razr not supported -->


    <link href='http://fonts.googleapis.com/css?family=Comfortaa:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <div id="topbar">
        <div class="container">
          <div id="topbar-left">

          </div>

          <div id="topbar-right">
            <div id="signin-button">
              <a href="#">Login to your Site</a>
            </div>

          </div>

        </div>
      </div>

      <div id="mainbar">
        <div class="container" id="mainbar-container">
          <h1>Bootstrap Wedding</h1>


          <span id="mainbar-headerlinks">
            <ul>
              <li><a href="#">Get Started</a></li>
              <li><a href="#">How It Works</a></li>
              <li><a href="#">FAQ</a></li>
            </ul>
          </span>
        </div>
      </div>

      <div id="mainbanner">
        <div id="banner">
          <div class="container" id="banner-overlay-container">
            <div id="banner-overlay">
              <span class="" id="banner-shouter">
                Kick start your wedding planning
              </span>
              <span class="" id="banner-follower">
                We'll make the digital part easy, so you can focus on the hard parts.
              </span>
              <span id="banner-rear">
                (Like which centrepiece, there are so many options!)
              </span>
              <div class="btn btn-primary btn-large non-mobile-block-only" id="banner-action-button">Start with the "Custom You" Wedding Website</div>
              <div class="btn btn-primary btn-large mobile-block-only" id="banner-action-button">Take a Peek</div>
            </div>

          </div>
        </div>
      </div>

      <div id="followerbanner">
        <ul>
          <li><span class="glyphicon glyphicon-ok"></span> Modern Mobile-First Wedding Website</li>
          <li><span class="glyphicon glyphicon-ok"></span> Comprehensive Guest and RSVP Management</li>
          <li><span class="glyphicon glyphicon-ok"></span> Wedding Event Planning</li>
          <li><span class="glyphicon glyphicon-ok"></span> Crazy Customization Options</li>
          <li><span class="glyphicon glyphicon-ok"></span> Total Control of Privacy</li>


        </ul>

        <p>... and so much more!</p>
      </div>

      <div id="howitworks">
        <div class="container mainpage-container" id="howitworks-content">
          <h2>How It Works</h2>

          <p id="howitworks-message">
            Your wedding website is your most important tool in communicating with your guests, it should be as thoughtfully crafted as your wedding.
            Start with a timeless template, then match the colours to the rest of your wedding theme. Customize away! Then dive into the easy to use, powerful 
            tools we provide to invite, communicate with, and delight your guests.

          </p>


          <div class="row" id="howitworks-cols">

            <div class="col-sm-3">
              <img src="http://soapersstreet.tophatandmonocle.com/assets/img/signup.png">
              <h3>Pick</h3>
              <p>Choose a template, choose some colours, decide which pages make sense to you.</p>
            </div>

            <div class="col-sm-3">
              <img src="http://soapersstreet.tophatandmonocle.com/assets/img/signup.png">
              <h3>Populate</h3>
              <p>Add details, events, pictures, directions, or whatever information your guests need.</p>
            </div>

            <div class="col-sm-3">
              <img src="http://soapersstreet.tophatandmonocle.com/assets/img/signup.png">
              <h3>Invite</h3>
              <p>Facebook, spreadsheets, or our own intuitive interface.</p>
            </div>
            
            <div class="col-sm-3">
              <img src="http://soapersstreet.tophatandmonocle.com/assets/img/signup.png">
              <h3>Delight</h3>
              <p>Keep your guests up to date with the latest stories, photos, places to eat, and things to see.</p>
            </div>

          </div>

        </div>
      </div>

      <p>


      </div>

      <div id="features-website">
        <div id="features-website-left">
        </div>
        <div id="features-website-right">
          <h2>Start with your Website</h2>
          <p>Your guests don't sit at their computer anymore. Your wedding website should work flawlessly across phones, tablets, and computers. 
          All our designs are hand crafted to look timeless across everyone's device. There's nothing special you have to do, it just works!</p> 
        
          <div id="mockups-container">
            <div class="row">
              <div class="col-sm-4">
                <img src="<?=base_url() ?>assets/img/imac.png" class="mockup" id="mockup-imac">
                <em class="figure">Design1 Name</em>
              </div>
              <div class="col-sm-4">
                <img src="<?=base_url() ?>assets/img/iphone.png" class="mockup" id="mockup-iphone">
                <em class="figure">Design2 Name</em>
              </div>
              <div class="col-sm-4">
                <img src="<?=base_url() ?>assets/img/ipad.png" class="mockup" id="mockup-ipad">
                <em class="figure">Design3 Name</em>
              </div>
            </div>
          </div>

        </div>

      </div>

      <div id="footer">

      </div>


    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?=base_url() ?>assets/js/jquery.backstretch.min.js"></script>
    <script src="<?=base_url() ?>assets/js/bootstrap.min.js"></script>

    <!--[if lt IE 9]>
    <script>
      $("#banner").backstretch("<?=base_url() ?>assets/img/bridge.jpg");
    </script>
    <![endif]-->
  </body>
</html>