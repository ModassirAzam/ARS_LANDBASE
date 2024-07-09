if(window.screen.width <= 1024){
    document.getElementById('first-nav').classList.add('show-mobile')
    document.getElementById('second-nav').classList.add('show-mobile')
}
function showMenu(){
    var firstNav = document.getElementById('first-nav');
    var secondNav = document.getElementById('second-nav');
    var crossBtn = document.getElementById('cross-btn');
    firstNav.classList.add('open') 
    secondNav.classList.add('open') 
    crossBtn.style.left = '70%';
}

function hideMenu(){
    var firstNav = document.getElementById('first-nav');
    var secondNav = document.getElementById('second-nav');
    var crossBtn = document.getElementById('cross-btn');
    firstNav.classList.remove('open') 
    secondNav.classList.remove('open') 
    crossBtn.style.left = '-30%';
}