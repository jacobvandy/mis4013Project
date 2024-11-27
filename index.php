<?php
$pageTitle = "Home";
include "view-header.php";
?>
    <h1>Final Project MIS4013</h1>
<img id="cimage" src="candydealer.jpg" style="height:300px;"/>


<button id="plusbtn"class="btn btn-primary">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
</svg></button>
    <button  id="minusbtn"class="btn btn-danger">
   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1z"/>
</svg>
    </button>

     PROMO CODE: HERSHEYS <button onclick="copyToClipboard('HERSHEYS')">Copy Code</button>

<br/>
 <button onclick="hideImage()">View</button>
<br/>
<button onclick="rotateImage(45)">Rotate Image</button>

    <script>
    "use strict";
        document.querySelector("#plusbtn").addEventListener("click", () =>
        {
            let w=document.querySelector("#cimage").width;
            w = w + 10;
            document.querySelector("#cimage").width = w;
        }
        );
        document.querySelector("#minusbtn").addEventListener("click", () =>
        {
            let w = document.querySelector("#cimage").width;
            w = w - 10;
            document.querySelector("#cimage").width=w;
        }
        );
           function copyToClipboard(text) {
        navigator.clipboard.writeText(text).then(() => {
            alert("Copied");
        }).catch((error) => {
            console.error("Error copying:", error);
        });
        }


function rotateImage(degrees) {
    const img = document.getElementById("cimage");
    img.style.transform = `rotate(${degrees}deg)`;
}
        
       function hideImage() {
    const img = document.getElementById("cimage");
    img.style.display = img.style.display === "none" ? "block" : "none";
}




        
    </script>


<?php
include "view-footer.php";
?>
