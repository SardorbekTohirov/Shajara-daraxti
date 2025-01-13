// Elementlarni tanlash
const modal = document.getElementById('family-edit'); // Modalni tanlash
const modalTrigger = document.getElementById('family-edit-btn'); // Rasm (tugma)ni tanlash
const closeModalBtn = modal.querySelector('img'); // Modal ichidagi yopish tugmasi (tasvir)

// Modalni ochish
modalTrigger.addEventListener('click', () => {
    modal.style.display = 'flex'; // Modalni ko'rsatish
});

// Modalni yopish (tasvirga bosganda)
closeModalBtn.addEventListener('click', () => {
    modal.style.display = 'none'; // Modalni yashirish
});