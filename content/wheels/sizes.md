---
Title: wheel sizes
Description: wheel sizes
Template: chapter
Toc: chapter
---

Different width and offset rims on 205 Si front hub

<div>
<style>

td {
  text-align: center;
}

/* The grid: Four equal columns that floats next to each other */
.column {
  float: left;
  width: 10%;
  padding: 10px;
  text-align: center;
}

/* Style the images inside the grid */
.column img {
  opacity: 0.5;
  cursor: pointer;
  display: block;
  margin-left: auto;
  margin-right: auto;
}

.column img:hover {
  opacity: 1;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The expanding image container */
.container {
  width: 650px; 
  height: 450px;
  position: relative;
}

</style>
<script>
function myFunction(imgs) {
  // Get the expanded image
  var expandImg = document.getElementById("expandedImg");
  // Get the image text
  var imgText = document.getElementById("imgtext");
  // Use the same src in the expanded image as the image being clicked on from the grid
  expandImg.src = imgs.src;
  expandImg.style["position"] = "absolute"
  expandImg.style["width"] = imgs.getAttribute("data-width");
  expandImg.style["height"] = imgs.getAttribute("data-height");
  expandImg.style["top"] = imgs.getAttribute("data-top");
  expandImg.style["left"] = imgs.getAttribute("data-left");
  expandImg.style["opacity"] = imgs.getAttribute("data-opacity");

  var expandRearTyre = document.getElementById("expandRearTyre");
  expandRearTyre.src = "%assets_url%/wheels/tyre-165-70.png"; 
  expandRearTyre.style["position"] = "absolute"
  expandRearTyre.style["width"] = imgs.getAttribute("data-tyre-width");
  expandRearTyre.style["height"] = imgs.getAttribute("data-tyre-height");
  expandRearTyre.style["top"] = imgs.getAttribute("data-tyre-top");
  expandRearTyre.style["left"] = imgs.getAttribute("data-tyre-left");
  expandRearTyre.style["opacity"] = imgs.getAttribute("data-opacity");
  
  var exandFrontTyre = document.getElementById("expandFrontTyre");
  expandFrontTyre.src = "%assets_url%/wheels/tyre-165-70.png"; 
  expandFrontTyre.style["position"] = "absolute"
  expandFrontTyre.style["width"] = imgs.getAttribute("data-tyre-width");
  expandFrontTyre.style["height"] = imgs.getAttribute("data-tyre-height");
  expandFrontTyre.style["left"] = imgs.getAttribute("data-tyre-left");
  expandFrontTyre.style["opacity"] = imgs.getAttribute("data-opacity");
  expandFrontTyre.style["transform"] = "scaleY(-1)"
  expandFrontTyre.style["top"] = imgs.getAttribute("data-tyre-front-top");
  
  
  var tireview = document.getElementById("tireview")
  tireview.src = "%assets_url%/wheels/tireview-fullsize.png";
  tireview.style["position"] = "absolute"
  tireview.style["width"] = imgs.getAttribute("data-tireview-width"); 
  tireview.style["height"] = imgs.getAttribute("data-tireview-height"); 
  tireview.style["left"] = imgs.getAttribute("data-tireview-left");  //0.5*(660 - width)
  tireview.style["top"] = imgs.getAttribute("data-tireview-top");  //450 + 0.5*(660 - height)

  var wheelview = document.getElementById("wheelview")
  wheelview.src = "%assets_url%/wheels/pugwheelview-fullsize.png"; 
  wheelview.style["position"] = "absolute"
  wheelview.style["width"] = imgs.getAttribute("data-wheelview-width"); 
  wheelview.style["height"] = imgs.getAttribute("data-wheelview-height"); 
  wheelview.style["top"] = imgs.getAttribute("data-wheelview-top");
  wheelview.style["left"] = imgs.getAttribute("data-wheelview-left");
  
  // Show the container element (hidden with CSS)
  expandImg.parentElement.style.display = "block";
}
</script>

<!-- The grid: four columns -->
<table>
<tr>
<th style="width: 20%;">OEM
<th style="width: 20%;">205/306/405
<th style="width: 20%;">206
<th style="width: 20%;">Citroen C5
<th style="width: 20%;">405Mi16 S2
<th style="width: 20%;">406 alloys
<th style="width: 20%;">SL434
<th style="width: 20%;">406 16" alloys
</tr>
<tr>

<td><!-- 165/70R13 -->
<select name="width13" id="width13">
  <option value=165 selected="selected">165</option>
  <option value=175>175</option>
  <option value=185>185</option>
</select>/
<select name="profile13" id="profile13">
  <option value=50>50</option>
  <option value=55>55</option>
  <option value=60>60</option>
  <option value=65>65</option>
  <option value=70 selected="selected">70</option>
  <option value=75>75</option>
  <option value=80>80</option>
</select>R13

<td>185/60R14
<td>185/60R14
<td>185/55R15
<td>185/55R15
<td>195/50R15
<td>195/50R15
<td>195/45R16
</tr>
<tr>
<div class="row">
  <td>
     <img 
      src="%assets_url%/wheels/205si-rim.png"
      alt="13 inch OEM" 
      onclick="myFunction(this);"
      style="width: 78px; height: 178px"
      data-width = "156px"
      data-height = "355px"
      data-top = "47px"
      data-left="616px"
      data-opacity="0.5"
      data-tyre-width="176px"
      data-tyre-height="127px"
      data-tyre-top="-50px"
      data-tyre-left="605px"
      data-tyre-front-top="392px"
      data-tireview-width="561px"
      data-tireview-height="561px"
      data-tireview-left="0px"
      data-tireview-top="-50px"
      data-wheelview-width="660px"
      data-wheelview-height="660px"
      data-wheelview-left="-49px"
      data-wheelview-top="-99px">
  </td>
  <td>
    <!-- 205-306-405 14x5.5 -->
     <img 
      src="%assets_url%/wheels/205si-rim-red.png"
      alt="205/306/405 14x5.5" 
      onclick="myFunction(this);"
      style="width: 85px; height: 191px"
      data-width = "172px"
      data-height = "382px"
      data-top = "34px"
      data-left="606px"
      data-opacity="0.5"
      data-tyre-width="197px"
      data-tyre-height="122px"
      data-tyre-top="-60px"
      data-tyre-left="594px"
      data-tyre-front-top="400px"
      data-tireview-width="571px"
      data-tireview-height="571px"
      data-tireview-left="-5px"
      data-tireview-top="-55px"
      data-wheelview-width="710px"
      data-wheelview-height="710px"
      data-wheelview-left="-74px"
      data-wheelview-top="-124px">
  </td>
  <td>
    <!-- 206 14x5.5 -->
     <img 
      src="%assets_url%/wheels/205si-rim-red.png"
      alt="206 14x5.5 (wrong offset)" 
      onclick="myFunction(this);"
      style="width: 85px; height: 191px"
      data-width = "172px"
      data-height = "382px"
      data-top = "34px"
      data-left="616px"
      data-opacity="0.5"
      data-tyre-width="197px"
      data-tyre-height="122px"
      data-tyre-top="-60px"
      data-tyre-left="604px"
      data-tyre-front-top="400px"
      data-tireview-width="571px"
      data-tireview-height="571px"
      data-tireview-left="-5px"
      data-tireview-top="-55px"
      data-wheelview-width="710px"
      data-wheelview-height="710px"
      data-wheelview-left="-74px"
      data-wheelview-top="-124px">
  </td>
  <td>
    <!-- C5 15x6 -->
     <img 
      src="%assets_url%/wheels/205si-rim-red.png"
      alt="C5 'steelies' (15x6)" 
      onclick="myFunction(this);"
      style="width: 93px; height: 205px;"
      data-width = "186px"
      data-height = "409px"
      data-top = "22px"
      data-left="591px"
      data-opacity="0.5"
      data-tyre-width="197px"
      data-tyre-height="112px"
      data-tyre-top="-65px"
      data-tyre-left="585px"
      data-tyre-front-top="420px"
      data-tireview-width="584px"
      data-tireview-height="584px"
      data-tireview-left="-12px"
      data-tireview-top="-59px"
      data-wheelview-width="762px"
      data-wheelview-height="762px"
      data-wheelview-left="-101px"
      data-wheelview-top="-148px">
  </td>
  <td>
    <!-- 405s2 Mi16 15x6 -->
     <img 
      src="%assets_url%/wheels/205si-rim-red.png"
      alt="405s2 Mi16 15x6 (wrong offset)" 
      onclick="myFunction(this);"
      style="width: 93px; height: 205px;"
      data-width = "186px"
      data-height = "409px"
      data-top = "22px"
      data-left="604px"
      data-opacity="0.5"
      data-tyre-width="197px"
      data-tyre-height="112px"
      data-tyre-top="-65px"
      data-tyre-left="600px"
      data-tyre-front-top="420px"
      data-tireview-width="584px"
      data-tireview-height="584px"
      data-tireview-left="-12px"
      data-tireview-top="-59px"
      data-wheelview-width="762px"
      data-wheelview-height="762px"
      data-wheelview-left="-101px"
      data-wheelview-top="-148px">
  </td>
  <td>
    <!-- 406 15x6.5 -->
     <img 
      src="%assets_url%/wheels/205si-rim-red.png"
      alt="406 15x6.5 ET20" 
      onclick="myFunction(this);"
      style="width: 101px; height: 205px;"
      data-width = "203px"
      data-height = "409px"
      data-top = "22px"
      data-left="589px"
      data-opacity="0.5"
      data-tyre-width="208px"
      data-tyre-height="108px"
      data-tyre-top="-60px"
      data-tyre-left="586px"
      data-tyre-front-top="420px"
      data-tireview-width="576px"
      data-tireview-height="576px"
      data-tireview-left="-8px"
      data-tireview-top="-55px"
      data-wheelview-width="762px"
      data-wheelview-height="762px"
      data-wheelview-left="-101px"
      data-wheelview-top="-148px">
  </td>
  <td>
    <!-- SL434 15x6.75 -->
     <img 
      src="%assets_url%/wheels/205si-rim-red.png"
      alt="SL434 15x6.75" 
      onclick="myFunction(this);"
      style="width: 105px; height: 205px;"
      data-width = "210px"
      data-height = "409px"
      data-top = "22px"
      data-left="574px"
      data-opacity="0.5"
      data-tyre-width="208px"
      data-tyre-height="108px"
      data-tyre-top="-60px"
      data-tyre-left="571px"
      data-tyre-front-top="420px"
      data-tireview-width="576px"
      data-tireview-height="576px"
      data-tireview-left="-8px"
      data-tireview-top="-55px"
      data-wheelview-width="762px"
      data-wheelview-height="762px"
      data-wheelview-left="-101px"
      data-wheelview-top="-148px">
  </td>
  <td>
    <!-- 406 16x6.5 -->
     <img 
      src="%assets_url%/wheels/205si-rim-red.png"
      alt="406 16x6.5 ET20" 
      onclick="myFunction(this);"
      style="width: 101px; height: 219px;"
      data-width = "203px"
      data-height = "438px"
      data-top = "10px"
      data-left="589px"
      data-opacity="0.5"
      data-tyre-width="208px"
      data-tyre-height="97px"
      data-tyre-top="-60px"
      data-tyre-left="586px"
      data-tyre-front-top="440px"
      data-tireview-width="582px"
      data-tireview-height="582px"
      data-tireview-left="-11px"
      data-tireview-top="-58px"
      data-wheelview-width="812px"
      data-wheelview-height="812px"
      data-wheelview-left="-126px"
      data-wheelview-top="-173px">
  </td>
</div>
</tr>
<tr>
<td>5Jx13&nbsp;ET28
<td>5.5Jx14&nbsp;ET24
<td>5.5Jx14&nbsp;ET34<br>(wrong offset)
<td>6Jx15&nbsp;ET18
<td>6Jx15&nbsp;ET29<br>(wrong offset)
<td>6.5x15 ET20<br>(wrong offset)
<td>6.75Jx15&nbsp;ET8<br>(wide!)
<td>6.5x16 ET20<br>(wrong offset)
</tr>
</table>
<!-- The expanding image container -->
<div class="container" style="margin: 100px 0px 100px 0px;">
  <!-- Background -->
  <img style="position: absolute; left: 500px;" src="%assets_url%/wheels/205si-suspension-diagram.png">
  
  <img id="tireview">
  <img id="wheelview">
   
  <!-- Expanded image -->
  <img id="expandRearTyre">
  <img id="expandedImg">
  <img id="expandFrontTyre">     

</div>
</div>


