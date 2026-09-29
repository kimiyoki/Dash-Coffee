document.addEventListener('DOMContentLoaded', () => {
    const tabs = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');

    tabs.forEach((tab) => {
        tab.addEventListener('click', () => {
            const target = tab.dataset.tab;

            tabs.forEach((btn) => btn.classList.toggle('active', btn === tab));
            tabContents.forEach((content) => {
                content.classList.toggle('active', content.id === target);
            });
        });
    });

    const textarea = document.getElementById('feedbackTextarea');
    const charCount = document.getElementById('charCount');

    if (textarea && charCount) {
        const maxLength = 500;

        const updateCounter = () => {
            const currentLength = textarea.value.length;
            charCount.textContent = currentLength;

            if (currentLength > maxLength) {
                textarea.value = textarea.value.slice(0, maxLength);
                charCount.textContent = maxLength;
            }
        };

        textarea.addEventListener('input', updateCounter);
    }

    const hamburger = document.querySelector('.hamburger');
    const navMenu = document.querySelector('.nav-menu');

    if (hamburger && navMenu) {
        hamburger.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });
    }

    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach((link) => {
        link.addEventListener('click', () => {
            if (navMenu && navMenu.classList.contains('active')) {
                navMenu.classList.remove('active');
            }
        });
    });

    const feedbackButton = document.querySelector('.btn-submit-feedback');
    if (feedbackButton) {
        feedbackButton.addEventListener('click', () => {
            const value = textarea ? textarea.value.trim() : '';
            if (!value) {
                textarea.focus();
                return;
            }

            feedbackButton.textContent = 'THANK YOU!';
            feedbackButton.disabled = true;
            feedbackButton.style.opacity = '0.8';
            setTimeout(() => {
                feedbackButton.textContent = 'SUBMIT FEEDBACK';
                feedbackButton.disabled = false;
                feedbackButton.style.opacity = '1';
                textarea.value = '';
                charCount.textContent = '0';
            }, 1600);
        });
    }
});
