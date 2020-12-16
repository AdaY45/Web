function menu() {
    let x = document.getElementById('myTopnav');
    if(x.className === 'topnav') {
      x.className += ' responsive';
    } else {
      x.className = 'topnav';
    }
}

function myFunction() {
  let more = document.getElementById("more");
  let btnText = document.getElementById("myBtn");
  more.style.display = "grid";
  btnText.style.display = "none";
  if(screen.width > 1100) {
    more.style.gridTemplateColumns = "repeat(4,1fr)";
  } if(screen.width > 600 && screen.width < 1100) {
    more.style.gridTemplateColumns = "repeat(3,1fr)";
  } if(screen.width < 600) {
    more.style.gridTemplateColumns = "repeat(1,1fr)";
  }
}

function changeImg(imgs) {
  let expandImg = document.getElementById('expandedImg');
  expandImg.src = imgs.src;
}
