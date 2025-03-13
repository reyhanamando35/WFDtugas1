<style>
@import url('https://fonts.googleapis.com/css?family=Merriweather');

.container {
  font-family: 'Merriweather', serif;
  width: 80%;
  margin: 1rem auto;
}

.mobile {
  margin: auto;
  background: #333;
  width: 400px;
  height: 500px;
  overflow: hidden;
}

.nav {
  position: relative;
  height: 50px;
  width: 100%;
  background-color: 
}

.bars {
  position: absolute;
  height: 13px;
  width: 21px;
  top: 17px;
  right: 15px;
  cursor: pointer;
  z-index: 1;
}

.bars span {
  display: block;
  width: 20px;
  height: 2px;
  background: rgb(0, 0, 0);
}

.bar-2, .bar-3 {
  margin-top: 3px;
}

.bar-1, .bar-3 {
  transition: 0.5s all;
  -webkit-transition: 0.5s all;
  -moz-transition: 0.5s all;
  -o-transition: 0.5s all;
}

.menu-item {
  position: absolute;
  top: -200px;
  right: -200px;
  background: rgba(0,0,0,0.2);
  box-shadow: 0px 0px 5px rgba(0,0,0,0.5);
  width: 400px;
  height: 450px;
  border-bottom-left-radius: 200px;
  margin-right: -200px;
  transition: 0.5s all;
  -webkit-transition: 0.5s all;
  -moz-transition: 0.5s all;
  -o-transition: 0.5s all;
}

.item-list {
  position: absolute;
  top: 250px;
  right: 250px;
  color: #000000;
  margin-right: -200px;
  transition: 1s all;
  -webkit-transition: 1s all;
  -moz-transition: 1s all;
  -o-transition: 1s all;
  
}

.item-list li {
  list-style: none;
  font-size: large;
  margin-bottom: 1rem;
}

.greet {
  position: absolute;
  bottom: 50px;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

.greet p {
  color: #030303;
  font-size: 60%;
  letter-spacing: 1px;
}

.greet span a {
  color: #5C6BC0;
  letter-spacing: 2px;
}
</style>
<div class="nav bg-gradient-to-r from-amber-400 to-yellow-300">
      <div class="bars clickable-bar" data-clicked="0">
        <span class="bar-1"></span>
        <span class="bar-2"></span>
        <span class="bar-3"></span>
      </div>
      <div class="menu-item">
        <ul class="item-list">
          <li>
            <a href="{{ route('home') }}" class="px-2 py-2 hover:bg-black hover:text-white rounded-lg font-bold">Home</a>
          </li>
          <li>
            <a href="{{ route('catalog') }}" class="px-2 py-2 hover:bg-black hover:text-white rounded-lg font-bold">Catalog</a>
          </li>
          <li>
            <a href="{{ route('about') }}" class="px-2 py-2 hover:bg-black hover:text-white rounded-lg font-bold">About Us</a>
          </li>
        </ul>
      </div>
    </div>
    <script>
      let bars = document.querySelector('.clickable-bar');
let bar_one = document.querySelector('.bar-1');
let bar_two = document.querySelector('.bar-2');
let bar_three = document.querySelector('.bar-3');
let menu_item = document.querySelector('.menu-item');
let item_list = document.querySelector('.item-list');
bars.addEventListener('click', function() {
  if(bars.dataset.clicked === '0') {
    bar_two.style.visibility = 'hidden';
    bar_one.style.transform = 'rotate(-40deg)';
    bar_one.style.marginTop = '7px';
    bar_three.style.transform = 'rotate(40deg)';
    bar_three.style.marginTop = '-7px';
    menu_item.style.marginRight = '0px';
    item_list.style.marginRight = '0px';
    bars.dataset.clicked = '1';
  } else {
    bar_one.removeAttribute('style');
    bar_three.removeAttribute('style');
    bar_two.style.visibility = 'visible';
    menu_item.style.marginRight = '-200px';
    item_list.style.marginRight = '-200px';
    bars.dataset.clicked = '0';
  }
  
});
</script>