        let button = document.querySelector('btn-theme')

        button.addEventListener('click',() => {
            document.documentElement.classList.toggle('dark-mode')
        })