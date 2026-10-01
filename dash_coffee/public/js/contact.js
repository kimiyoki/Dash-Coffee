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
        event.preventDefault();
        const text = feedbackTextarea.value.trim();
        if (!text) {
            alert('Please share a short thought before submitting.');
            feedbackTextarea.focus();
            return;
        }
        alert('Thank you for your feedback!');
        feedbackForm.reset();
        charCount.textContent = '0 / 500 characters';
    });
}
