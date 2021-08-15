<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign In</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
  font-family:"Times New Roman",Times,serif;
  background-image:url("images/l6.jpg");
  background-size: cover;
}
.container {
  margin: 100px auto;
  width: 400px;
  height: 400px;
}
.login {
  position: relative;
  margin:200px 50px 20px 150px;
  padding: 20px 20px 20px 20px;
  border-radius: 25px;
  width: 300px;
  height: 300px;
}
.login p.submit {
  text-align: right;
}
.login-help {
  font-family:"Times New Roman",Times,serif;
  margin: 0px 0;
  font-size: 16px;
  color: teal;
  text-align: center;
  text-shadow: 0 1px blue;
}
.login-help a {
  color: #021523;
  text-decoration: none;
}
.login-help a:hover {
  color: blue;
  text-decoration: underline;
}
:-moz-placeholder {
  color: #c9c9c9 !important;
  font-size: 16px;
}
::-webkit-input-placeholder {
  color: #ccc;
  font-size: 16px;
}
.container {
  margin: 50px auto;
  width: 640px;
}
.login:before {
  content: '';
  position: absolute;
  top: -8px;
  right: -8px;
  bottom: -8px;
  left: -8px;
  z-index: -1;
  background: rgba(0, 0, 0, 0.08);
  border-radius: 4px;
}
.login h1 {
  font-family:"Segoe UI",Arial,sans-serif;
  margin: -20px -20px 21px;
  line-height: 40px;
  font-size: 25px;
  font-weight: bold;
  color: rgba(50,101,201,0.8);
  text-align: center;
  text-shadow: 0 1px white;
  background: #f3f3f3;
  border-bottom: 1px solid #cfcfcf;
  border-radius: 3px 3px 0 0;
  background-image: -webkit-linear-gradient(top, whiteffd, #eef2f5);
  background-image: -moz-linear-gradient(top, whiteffd, #eef2f5);
  background-image: -o-linear-gradient(top, whiteffd, #eef2f5);
  background-image: linear-gradient(to bottom, whiteffd, #eef2f5);
  -webkit-box-shadow: 0 1px whitesmoke;
  box-shadow: 0 1px whitesmoke;
}
.login p {
  margin: 20px 0 0;
}
.login p:first-child {
  margin-top: 0;
}
.login input[type=text], .login input[type=password] {
  width: 278px;
}
.login p.remember_me {
  float: left;
  line-height: 31px;
}
.login p.remember_me label {
  font-size: 14px;
  color: #777;
  cursor: pointer;
}
.login p.remember_me input {
  position: relative;
  bottom: 1px;
  margin-right: 4px;
  vertical-align: middle;
}
input {
  font-family:"Times New Roman",Times,serif;
  font-size: 14px;
}
input[type=number], input[type=password] {
  margin: 5px;
  padding: 0 10px;
  width: 280px;
  height: 34px;
  color: #404040;
  background: white;
  border: 1px solid;
  border-color: #c4c4c4 #d1d1d1 #d4d4d4;
  border-radius: 2px;
  outline: 5px solid #eff4f7;
  -moz-outline-radius: 3px;
  -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12);
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12);
}
input[type=text]:focus, input[type=password]:focus {
  border-color: #7dc9e2;
  outline-color: #dceefc;
  outline-offset: 0;
}
input[type=submit] {
  font-family:"Times New Roman",Times,serif;
  padding: 0 18px;
  height: 32px;
  font-size: 16px;
  font-weight: bold;
  color: rgba(50,101,201,0.9);
  text-shadow: 0 1px #e3f1f1;
  background: rgba(50,101,201,0.2);
  border: 1px solid;
  border-color: #b4ccce #b3c0c8 #9eb9c2;
  border-radius: 16px;
  outline: 0;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  background-image: -webkit-linear-gradient(top, #edf5f8, #cde5ef);
  background-image: -moz-linear-gradient(top, #edf5f8, #cde5ef);
  background-image: -o-linear-gradient(top, #edf5f8, #cde5ef);
  background-image: linear-gradient(to bottom, #edf5f8, #cde5ef);
  -webkit-box-shadow: inset 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.15);
  box-shadow: inset 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.15);
}
input[type=submit]:active {
  font-family:"Times New Roman",Times,serif;
  background: rgba(50,101,201,0.2);
  border-color: #9eb9c2 #b3c0c8 #b4ccce;
  -webkit-box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.2);
  box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.2);
}
input[type=checkbox],
input[type=radio] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));
-webkit-appearance: none;
-webkit-box-shadow: 1px 1px 1px #fff;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
}
input[type=radio] {
-webkit-border-radius: 2em;
}
input[type=checkbox]:checked::after {
content:&quot;âœ”&quot;;
display:block;
text-align: center;
font-size: 16px;
height: 16px;
line-height: 18px;
}
input[type=radio]:checked::after {
content:&quot;
display:block;
height: 16px;
line-height: 15px;
font-size: 20px;
text-align: center;
}
select {
border: 1px solid #D0D0D0;
background: url(http://www.quilor.com/i/select.png) no-repeat right center, -webkit-gradient(linear, 0% 0%, 0% 100%, from(#fbfbfb), to(#ededed));
background: -moz-linear-gradient(19% 75% 90deg,#ededed, #fbfbfb);
-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
-moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
color: #444;
}
.custom-select {
  position: relative;
  font-family:"Times New Roman",Times,serif;
}
.custom-select select {
  display: none;
}
.select-selected {
  background-color: rgba(50,101,201,0.8);
}
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}
.select-items {
  position: absolute;
  background-color: rgba(50,101,201,0.8);
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}
.select-hide {
  display: none;
}
.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
</style>
</head>
<body>
<div class="container">
  <div class="login">
    <h1>COMPANY PAGE</h1>
      <center><p><a href="addc.html"><input type="submit" name="submit" value="ADD"></a></p>
      <p><a href="updatec.html"><input type="submit" name="submit" value="UPDATE"></a></p>
      <p><a href="deletec.html"><input type="submit" name="submit" value="DELETE"></a></p>
      <p><a href="displayc.html"><input type="submit" name="submit" value="DISPLAY"></a></p>
      <p><a href="home.html"><input type="submit" name="submit" value="HOME"></a></p></center>
  </div>
</div>
<script>
var x, i, j, l, ll, selElmnt, a, b, c;
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
document.addEventListener("click", closeAllSelect);
</script>
</body>
</html>