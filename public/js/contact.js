const feedbackTextarea = document.getElementById('feedbackText');
const charCount = document.getElementById('charCount');

if (feedbackTextarea && charCount) {
    const updateCounter = () => {
        const currentLength = feedbackTextarea.value.length;
        charCount.textContent = `${currentLength} / 500 characters`;
    };

    feedbackTextarea.addEventListener('input', updateCounter);
    updateCounter();
}

const feedbackForm = document.querySelector('.feedback-form');

if (feedbackForm) {
    feedbackForm.addEventListener('submit', (event) => {
        const text = feedbackTextarea.value.trim();

        if (!text) {
            event.preventDefault();
            alert('Please share a short thought before submitting.');
            feedbackTextarea.focus();
            return;
        }

        // Let the form submit to Laravel normally.
        // Do not call preventDefault() here.
    });
}