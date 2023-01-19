<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="author" content="Taylor Packet Johnson">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Taylor Packet Johnson | Visual Designer</title>
  <meta property="og:title" content="Taylor Packet Johnson - Visual Designer">
  <meta property="og:description" name="description" content="Taylor Packet Johnson is a visual designer with a passion for crafting beautiful, human-centered digital experiences.">
  <meta name="application-name" content="Taylor Packet Johnson | Visual Designer">
  <meta property="og:site_name" content="Taylor Packet Johnson | Visual Designer">
  <link rel="canonical" href="https://www.taylorpacket.com">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@teapacket_">
  <meta name="twitter:creator" content="@teapacket_">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.taylorpacket.com">
  <meta property="og:image" content="https://www.taylorpacket.com/images/og-image.jpg">
  <meta property="og:locale" content="en_US">
  <link rel="shortcut icon" href="images/favicon.ico">
  <link rel="stylesheet" href="page.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alegreya:wght@500&family=Source+Sans+Pro:wght@200;400;700&display=swap" rel="stylesheet">   
</head>

<body>

<script>
var dark = 0;

window.addEventListener("load", function() {
  dark = Number(sessionStorage.getItem("dark-mode"));
  document.body.className = dark ? "dark-mode" : "";
});

function toggleDark() {
  dark = 1 - dark;
  sessionStorage.setItem("dark-mode", dark);
  document.body.className = dark ? "dark-mode" : "";
}

</script>   
    
  <div class="wrapper">
    <div class="container">
        
     <nav role="navigation" class="navigation-items">
         <a href="index.php">Home</a>
         <a href="about.php">About</a>
         <a href="mailto:tpacket@gmail.com">Contact</a>       
     </nav>
        
        
<div class="button sun" id="button" onclick="toggleDark();">
  <div class="icon">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" aria-labelledby="title"
aria-describedby="desc" role="img" xmlns:xlink="http://www.w3.org/1999/xlink"
width="30" height="30">
  <path d="M47.5 32.4a14 14 0 0 1-16.8 17.2" fill="none" stroke-miterlimit="10" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
  <path d="M24.1 45.9a14 14 0 0 1 19.8-19.8M34 6v8M12 36H4m8-22l7 7"
  fill="none" stroke-miterlimit="10" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
  <path fill="none" stroke-miterlimit="10"
  stroke-width="2" d="M55 15L13 57" stroke-linejoin="round" stroke-linecap="round"></path>
</svg>
 </div>
</div>