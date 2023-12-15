document.addEventListener('DOMContentLoaded', () => {

    let BarItem = document.querySelector('.bar-item');
    let Menu = document.querySelector('.small-view');
    let Men = document.querySelector('.main');

    BarItem.addEventListener('click', () => {
        BarItem.classList.toggle('cross');
        Menu.classList.toggle('cross');

        if(BarItem.classList.contains('cross')){
            Men.addEventListener('click', () => {
                BarItem.classList.remove('cross');
                Menu.classList.remove('cross');
            }) 
        }
    })


    /* --------------scroll control-------------- */
    /* function scrollControl() {
        let offs = window.scrollY;
        let dd = document.querySelector('#test');
        console.log(offs);
    }
    window.onscroll = scrollControl; */

    function scrollControll() {
        if(window.scrollY >= 50){
            document.querySelector('.navbar').style.background = 'white';
        }
        else{
            document.querySelector('.navbar').style.background = 'transparent';
        }
    }
    window.onscroll = scrollControll;

})

/* document.addEventListener('DOMContentLoaded', () => {

    let bar_main = document.querySelectorAll('.barmain');
    let menu_only = document.querySelectorAll('.menu-wrapper');
    let bard = document.querySelector('.bar-item');

    bar_main.forEach(function(bar){
        bar.addEventListener('click', () => {
            bar_main.forEach(function(bars){
                
                bars.classList.toggle('barIsActive');
            })

            bard.classList.toggle('barIsActive');
            bar.classList.add('barIsActive');
        })
    })

    


}) */