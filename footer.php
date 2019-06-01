<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="CSS/footer.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>    
        <div class="footer-dark">
                <footer>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-md-3 item">
                                <h3 id="h3-time">Time</h3>
                                <ul id="footer-ul">
                                    <li id="footer-li"><p id="footer-p"> | New York: <span class="clock" data-timezone="America/New_York"></span></p></li>
                                    <li id="footer-li"><p id="footer-p"> | Shanghai: <span class="clock" data-timezone="Asia/Shanghai"></span></p></li>
                                    <li id="footer-li"><p id="footer-p"> | Berlin: <span class="clock" data-timezone="Europe/Berlin"></span></p></li>
                                    <li id="footer-li"><p id="footer-p"> | Moscow <span class="clock" data-timezone="Europe/Moscow"></span></p></li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-md-3 item">
                                <h3 id="h3-time">About</h3>
                                <ul id="footer-ul">
                                    <li id="footer-li"><a id="footer-a" href="#">Company</a></li>
                                    <li id="footer-li"><a id="footer-a"href="about-us.php">Team</a></li>
                                    <li id="footer-li"><a id="footer-a" href="#">Careers</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 item text">
                                <h3 id="h3-time">Company Name</h3>
                                <p id="footer-p">Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                            </div>
                            <div class="col item social"><a id="footer-a" href="#"><i class="fab fa-facebook"></i></a><a id="footer-a" href="#"><i class="fab fa-twitter"></i></a><a id="footer-a" href="#"><i class="fab fa-snapchat-ghost"></i></a><a id="footer-a" href="#"><i class="fab fa-instagram"></i></a></div>
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

