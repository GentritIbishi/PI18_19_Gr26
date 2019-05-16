<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="footer.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>    
        <div class="footer-dark">
                <footer>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-md-3 item">
                                <h3>Time</h3>
                                <ul>
                                    <li><p> | New York: <span class="clock" data-timezone="America/New_York"></span></p></li>
                                    <li><p> | Shanghai: <span class="clock" data-timezone="Asia/Shanghai"></span></p></li>
                                    <li><p> | Berlin: <span class="clock" data-timezone="Europe/Berlin"></span></p></li>
                                    <li><p> | Moscow <span class="clock" data-timezone="Europe/Moscow"></span></p></li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-md-3 item">
                                <h3>About</h3>
                                <ul>
                                    <li id="footer-li"><a href="#">Company</a></li>
                                    <li id="footer-li"><a href="#">Team</a></li>
                                    <li id="footer-li"><a href="#">Careers</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 item text">
                                <h3>Company Name</h3>
                                <p class="footer-p">Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                            </div>
                            <div class="col item social"><a href="#"><i class="fab fa-facebook"></i></a><a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-snapchat-ghost"></i></a><a href="#"><i class="fab fa-instagram"></i></a></div>
                        </div>
                        <p class="copyright">Company Name © 2018</p>
                    </div>
                </footer>
              </div>
              <script>
                        const clocks = document.getElementsByClassName("clock");
                        
                        function updateClocks() {
                            for (let clock of clocks) {
                            let timezone = clock.dataset.timezone;
                            let time = new Date().toLocaleTimeString("en-US", {
                                hour: '2-digit',
                                minute:'2-digit',
                                timeZone: timezone
                            });
                            clock.textContent = time;
                            }
                        }
                        
                        // Update every minute:
                        setInterval(updateClocks, 60000);
                        updateClocks();
                </script>
                            
</body>
</html>
<style>
.footer-dark {
    padding:50px 0;
    color:#f0f9ff;
    background-color:#282d32;
  }
  
  .footer-dark h3 {
    margin-top:0;
    margin-bottom:12px;
    font-weight:bold;
    font-size:16px;
  }
  
  .footer-dark ul {
    padding:0;
    list-style:none;
    line-height:1.6;
    font-size:14px;
    margin-bottom:0;
  }
  
  .footer-dark ul a {
    color:inherit;
    text-decoration:none;
    opacity:0.6;
  }
  
  .footer-dark ul a:hover {
    opacity:0.8;
  }
  .footer-p {
    font-size:14px;
  }
  
  @media (max-width:767px) {
    .footer-dark .item:not(.social) {
      text-align:center;
      padding-bottom:20px;
    }
  }
  
  .footer-dark .item.text {
    margin-bottom:36px;
  }
  
  @media (max-width:767px) {
    .footer-dark .item.text {
      margin-bottom:0;
    }
  }
  
  .footer-dark .item.text .footer-p {
    opacity:0.6;
    margin-bottom:0;
  }
  
  .footer-dark .item.social {
    text-align:center;
  }
  
  @media (max-width:991px) {
    .footer-dark .item.social {
      text-align:center;
      margin-top:20px;
    }
  }
  
  .footer-dark .item.social > a {
    font-size:20px;
    width:36px;
    height:36px;
    line-height:36px;
    display:inline-block;
    text-align:center;
    border-radius:50%;
    box-shadow:0 0 0 1px rgba(255,255,255,0.4);
    margin:0 8px;
    color:#fff;
    opacity:0.75;
  }
  
  .footer-dark .item.social > a:hover {
    opacity:0.9;
  }
  
  .footer-dark .copyright {
    text-align:center;
    padding-top:24px;
    opacity:0.3;
    font-size:13px;
    margin-bottom:0;
  }
  .clock {
    font-family: sans-serif;
 }
 </style>
