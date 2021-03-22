const drawerToggle = document.querySelector('.main-header__drawer-toggle');
const backdrop = document.querySelector('.backdrop');
const sideDrawer = document.querySelector('.main-header__sidedrawer');

const openSideDrawerHandler = () => {
    backdrop.style.display = 'block';
    setTimeout(() => {
        sideDrawer.classList.add('open');
        backdrop.classList.add('backdrop-enable');
    }, 100);
}

const closeSideDrawerHandler = () => {
    backdrop.classList.remove('backdrop-enable');
    setTimeout(() => {
        sideDrawer.classList.remove('open');
        backdrop.style.display = 'none';
    }, 100);
}

drawerToggle.addEventListener('click', openSideDrawerHandler);
sideDrawer.addEventListener('click', closeSideDrawerHandler);
backdrop.addEventListener('click', closeSideDrawerHandler);
