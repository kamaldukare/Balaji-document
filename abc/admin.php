<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
div.scrollmenu {
  background-color: #333;
  overflow: auto;
  white-space: nowrap;
}

div.scrollmenu a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px;
  text-decoration: none;
}

div.scrollmenu a:hover {
  background-color: #777;
}




body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Create a column layout with Flexbox */
.row {
  display: flex;
}

/* Left column (menu) */
.left {
  flex: 25%;
  padding: 15px 0;
}

.left h2 {
  padding-left: 8px;
}

/* Right column (page content) */
.right {
  flex: 75%;
  padding: 15px;
}

/* Style the search box */
#mySearch {
  width: 100%;
  font-size: 18px;
  padding: 11px;
  border: 1px solid #ddd;
}

/* Style the navigation menu inside the left column */
#myMenu {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myMenu li a {
  padding: 12px;
  text-decoration: none;
  color: black;
  display: block
}

#myMenu li a:hover {
  background-color: #eee;
}
</style>
</head>
<body>

<div class="scrollmenu">
 

   <a href="#home">Andhra Pradesh</a>
  <a href="#news">Arunachal Pradesh</a>
  <a href="#contact">Assam</a>
  <a href="#about">Bihar</a>
  <a href="#support">Chhattisgadh</a>
  <a href="#blog">Goa</a>
  <a href="#tools">Gujarat</a>  
  <a href="#base">Haryana</a>
  <a href="#custom">Himachal Pradesh</a>
  <a href="#more">Jammu and kashmir</a>
  <a href="#logo">Jharkhand</a>
  <a href="#friends">Karnataka</a>
  <a href="#partners">Kerala</a>
  <a href="#people">Madhya Pradesh</a>
  <a href="#work">Maharashtra</a>
  <a href="#custom">Manipur</a>
  <a href="#more">Meghalaya</a>
  <a href="#logo">Mizoram</a>
  <a href="#friends">Nagaland</a>
  <a href="#partners">Odisha</a>
  <a href="#people">Punjab</a>
  <a href="#work">Rajasthan</a>
  <a href="#logo">Sikkim</a>
  <a href="#friends">Tamil Nadu</a>
  <a href="#partners">Telangana</a>
  <a href="#people">Tripura</a>
  <a href="#work">Uttar Pradesh</a>
  <a href="#logo">Uttarakhand</a>
  <a href="#friends">West Bengal</a>
  
</div>



<div class="row">
  <div class="left" style="background-color:#bbb;">
    <h2>Menu</h2>
    <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
    <ul id="myMenu">
      <li><a href="#">Venkateswara Temple</a></li>
      <li><a href="#">Padmavathi Temple</a></li>
      <li><a href="#">Srisailam Temple</a></li>
      <li><a href="#">Bugga Ramalingeswara Swamy Temple</a></li>
      <li><a href="#">Sri Yaganti Uma Maheswara Temple</a></li>
      <li><a href="#">Chennakesava Swamy Temple</a></li>
      <li><a href="#">Ahobilam</a></li>
      <li><a href="#">Vedadri Narasimha Temple</a></li>
      <li><a href="#">Srikalahasteeswara Temple</a></li>
      <li><a href="#">Lakshmi Narasimha Swamy Temple</a></li>
      <li><a href="#">Varaha Lakshmi Narasimha Temple</a></li>
      <li><a href="#">Vinayaka Temple</a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
    </ul>
  </div>
  
  <div class="right" style="background-color:gray;">
    <h1>Venkateswara Temple</h1>
    <div class="MagicScroll" data-options="speed: 2400; autoplay: 1000; items: 4;">
    <img src="example1.jpg" />
    <img src="example2.jpg" />
    ...
</div>
    <p>Sri Venkateswara Swami Vaari Temple is a Hindu temple situated in the hill town of Tirumala at Tirupati in Tirupati district of Andhra Pradesh, India. The Temple is dedicated to Venkateswara, a form of Vishnu, who is believed to have appeared on the earth to save mankind from trials and troubles of Kali Yuga. Hence the place has also got the name Kaliyuga Vaikuntha and the Lord here is referred to as Kaliyuga Prathyaksha Daivam. The temple is also known by other names like Tirumala Temple, Tirupati Temple and Tirupati Balaji Temple. Venkateswara is known by many other names: Balaji, Govinda, and Srinivasa.[3] The temple is run by Tirumala Tirupati Devasthanams (TTD), which is under control of Andhra Pradesh Government. The head of TTD is appointed by Andhra Pradesh Government. The revenue from this shrine is used by Andhra Pradesh government.[4][5]

</p>
  </div>
</div>

<script>
function myFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myMenu");
  li = ul.getElementsByTagName("li");
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>



</body>
</html>

















There are around 4,000 large temples in Andhra Pradesh state

Vinayaka Temple, Kanipakam
Kanaka Durga Temple, Vijayawada
Govindaraja Temple, Tirupati
Kapila Theertham
Kalyana Venkateswara Temple, Srinivasamangapuram
Kalyana Venkateswara Temple, Narayanavanam
Kodandarama Temple, Tirupati
Prasanna Venkateswara Temple, Appalayagunta
Varahaswamy Temple, Tirumala
Vedanarayana Temple, Nagalapuram
Veeranjaneya Temple, Ardhagiri
Alipiri
Venkateswara Temple, Dwaraka Tirumala
Annavaram Satyanarayana Temple
Suryanarayana Temple, Arasavalli
Sri Hatakeswara Swamy Temple, Singupuram, Srikakulam
Kurmanathaswamy Temple, Srikurmam
Lakshmi Narasimha Temple, Mangalagiri
Mantralayam
Sri Mukhalingam, Srikakulam
Veerabhadra Temple, Lepakshi
Ranganatha Temple, Nellore
Konetirayala Temple, Keelapatla
Pallikondeswara Temple, Surutapalli
Parasurameswara Temple, Gudimallam
Sri Lakshmi Narasimha Swamy Temple, Antarvedi
Sri Sunama Jakini Matha Temple, Gooty, Anantapuramu
Sri Suryanarayana Swamy Temple, Gollalamamidada
Chintala Venkataramana Temple
Kulandeshwara Temple
Siddheswara Swamy Temple
Siddeswara kshetram
Kotappakonda
Chengalamma Parameshwari Temple
Amararama
Draksharama
Somarama
Ksheerarama
Kumararama