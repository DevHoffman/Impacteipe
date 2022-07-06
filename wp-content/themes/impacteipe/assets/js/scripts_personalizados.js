document.addEventListener('DOMContentLoaded', function () {
    setTimeout(() => {
        if (document.readyState === "complete") {  // Ainda carregando
            document.getElementById('preloader').classList.add('loaded')
            setTimeout(() => {
                document.getElementById('preloader').classList.add('visually-hidden')
            }, 1000);
        }
    }, 1000);
});