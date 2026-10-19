const filterButtons = document.querySelectorAll('.filter-btn');
const menuCards = document.querySelectorAll('.menu-card');

filterButtons.forEach((button) => {
    button.addEventListener('click', () => {
        const selectedFilter = button.dataset.filter;
        filterButtons.forEach((btn) => btn.classList.toggle('active', btn === button));
        menuCards.forEach((card) => {
            const category = card.dataset.category;
            const showCard = selectedFilter === 'all' || category === selectedFilter;
            card.classList.toggle('hidden', !showCard);
        });
    });
});
