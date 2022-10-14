// const darkMode = document.querySelector('#darkMode');
// if(window.matchMedia('(prefers-color-scheme: light)')){
//     document.body.classList.add('dark');
// }

document.getElementById('darkMode').addEventListener('click', () => {
    const darkMode = document.querySelector('#darkMode');
    document.body.classList.toggle('dark');
    if (darkMode.innerHTML== "☀️") {
        darkMode.innerHTML="🌒";
    }
    else{
        darkMode.innerHTML= "☀️";
    }
    
})
// window.matchMedia('(prefers-color-scheme: light)').addEventListener('change', e => {
//     document.body.classList.toggle('dark');
//     console.log(newColorScheme);
// })


// // setting theme when contents are loaded
// window.addEventListener('load', function () {
//    var theme = localStorage.getItem('theme');
//    // when first load, choose an initial theme
//    if (theme === null || theme === undefined) {
//       theme = 'light';
//       localStorage.setItem('theme', theme);
//    }
//    // set theme
//    var html = document.querySelector("html");
//    // apply the variable
//    html.classList.add(theme);
// })

// function switchTheme() {
//    var theme = localStorage.getItem('theme');
//    var html = document.querySelector('html');
//    // choose new theme
//    if (theme === 'dark') {
//       new_theme = 'light';
//    } else {
//       new_theme = 'dark';
//    }
//    // remove previous class
//    html.classList.remove(theme);
//    // add new class
//    html.classList.add(new_theme);
//    // store theme
//    localStorage.setItem('theme', new_theme);
// }

	