const changeHeaderColor = (navButtonId) => {
    for(let navItem of document.getElementsByClassName('nav-item')) {
        navItem.classList.remove('active');
    }
    document.getElementById(navButtonId).classList.add('active');
}


switch(window.location.pathname) {
    case '/index.php': {
        console.log('aaaa')
        changeHeaderColor('header-home');
        break;
    }
    case '/about.php': {
        changeHeaderColor('header-about');
        break;
    }
    case '/classes.php': {
        changeHeaderColor('header-classes');
        break;
    }
    case '/contact.php': {
        changeHeaderColor('header-contact');
        break;
    }

}