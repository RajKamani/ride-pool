const drawerToggle = document.querySelector('.main-header__drawer-toggle');
const sideDrawer = document.querySelector('.main-header__sidedrawer');

drawerToggle.addEventListener('click', () => {
    sideDrawer.classList.add('open');
})

sideDrawer.addEventListener('click', () => {
    sideDrawer.classList.remove('open');
})