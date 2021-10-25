let navMenuItems = document.querySelector('nav > ul');
for(let i = 0; i < navMenuItems.children.length; i++) {
    let x = navMenuItems.getElementsByTagName('a')[i];
    let selectedPage = sessionStorage.getItem('current_page');
    if(i == selectedPage && selectedPage != null) {
        x.style.color = '#e38d8d';
    }else{
        x.style.color = '#978c9c';
    }
}
navMenuItems.addEventListener('click', function(e){
    // e.preventDefault();
    for(let i = 0; i < this.children.length; i++){
        if(this.children[i].innerText === e.target.innerText){
            sessionStorage.setItem('current_page', i);
        }
    }
})
let topBtn = document.createElement('div');
topBtn.setAttribute('class', 'top-btn');
topBtn.innerText = '^';
let body = document.getElementsByTagName('body')[0];
body.appendChild(topBtn);
topBtn.addEventListener('click', function(e){
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
})