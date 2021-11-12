<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Maastricht</title>
</head>
<body>

<!--------- STICKYNAVIGATION BAR ---------->

	<nav class="stickynav">
		<ul class="menu">
			<li><a href="#home">Home</a></li>
			<li><a href="#tour">Tour</a></li>
			<li><a href="about-page.php#about">About</a></li>
		</ul>	
	</nav>


<!--------- HOMESCREEN ---------->

<section class="homepage">
	<div id="home">
		<div class="invisible">
			<h5>.</h5>
		</div>

		<div class="title">
			<h3>Nederland</h3>
		</div>

		<div class="maastricht">
			<h1>Maastricht</h1>
		</div>

		<div class="line">
			<h5></h5>
		</div>

		<div class="get-started">
			<a href="#tour" class="main-btn">Tour</a>
		</div>
	</div>
</section>


<!--------- SCROLLDOWN INDICATOR ---------->

	<div class="scrolldown">
		<span></span>
		<span></span>
		<span></span>
	</div>

<!--------------------------------FEATURES--------------------------------------->

	<section class="features">
        <div id="tour">
        	<div class="feature-container">
            	<div class="feature-box">
                	<div class="f-img">
                    	<img src="images/kasteel2.jpg"/>
                	</div>
                	<div class="f-text">
                    	<br><h4>Helpoort</h4><br/>
                    	<p>Voor meer informatie over de Helpoort klik dan hier onder.</p><br/>
                    	<a class="main-btn-features" onclick="audio1.play();">Luister</a>
                    	<script type="text/javascript">
                    		const audio1 = new Audio();
                    		audio1.src = "audio/helpoort.mp3"
                    	</script>
                	</div>                
            	</div>
        	</div>
        </div>
    	</div>

        <div class="feature-container">
            <div class="feature-box">
                <div class="f-img">
                    <img src="images/standbeeld.jpg"/>
                </div>
                <div class="f-text">
                    <br><h4>Boegbeeld Plankstraat</h4><br/>
                    <p>Voor meer informatie over het boekbeeld klik dan hier onder.</p><br/>
                    <a class="main-btn-features" onclick="audio2.play();">Luister</a>
                    	<script type="text/javascript">
                    		const audio2 = new Audio();
                    		audio2.src = "audio/boegbeeld.mp3"
                    	</script>
                </div>                
            </div>
        </div>

        <div class="feature-container">
            <div class="feature-box">
                <div class="f-img">
                    <img src="images/kerk.jpg"/>
                </div>
                <div class="f-text">
                    <br><h4>Sint-Lambertuskerk</h4><br/>
                    <p>Voor meer informatie over Sint-Lambertuskerk klik dan hier onder.</p><br/>
                    <a class="main-btn-features" onclick="audio3.play();">Luister</a>
                    	<script type="text/javascript">
                    		const audio3 = new Audio();
                    		audio3.src = "audio/Lambertuskerk.mp3"
                    	</script>
                </div>                
            </div>
        </div>

        <div class="feature-container">
            <div class="feature-box">
                <div class="f-img">
                    <img src="images/standbeeld2.jpg"/>
                </div>
                <div class="f-text">
                    <br><h4>Pieke Oet De Stokstraot</h4><br/>
                    <p>Voor meer informatie over Pieke Oet De Stokstraot klik dan hier onder.</p><br/>
                    <a class="main-btn-features" onclick="audio4.play();">Luister</a>
                    	<script type="text/javascript">
                    		const audio4 = new Audio();
                    		audio4.src = "audio/Pieke.mp3"
                    	</script>
                </div>                
            </div>
        </div>
    </section>
</body>
</html>