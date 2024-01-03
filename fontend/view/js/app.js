document.addEventListener('DOMContentLoaded', function () {
    const slider = document.getElementById('slider');
    const container = document.querySelector('.container-slider');
    const slides = document.querySelectorAll('.container-slider img');
    const dots = document.querySelectorAll('.dot');
    const leftArrow = document.getElementById('leftArrow');
    const rightArrow = document.getElementById('rightArrow');

    let currentIndex = 0;

    function updateSlider() {
        const newPosition = -currentIndex * 100 + '%';
        container.style.transform = 'translateX(' + newPosition + ')';
        updateDots();
    }

    function updateDots() {
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentIndex);
        });
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % slides.length;
        updateSlider();
    }

    function prevSlide() {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        updateSlider();
    }

    function startAutoSlide() {
        return setInterval(() => {
            nextSlide();
        }, 5000); // Điều chỉnh thời gian chuyển động ở đây, ví dụ: 5000ms (5 giây)
    }

    // Show arrows and update dots when hovering over the slider
    slider.addEventListener('mouseenter', function () {
        leftArrow.style.display = 'block';
        rightArrow.style.display = 'block';
        updateDots();
    });

    // Hide arrows when mouse leaves the slider
    slider.addEventListener('mouseleave', function () {
        leftArrow.style.display = 'none';
        rightArrow.style.display = 'none';
    });

    // Add event listeners for arrow buttons
    leftArrow.addEventListener('click', prevSlide);
    rightArrow.addEventListener('click', nextSlide);

    // Start auto slide when the page loads
    let autoSlideInterval = startAutoSlide();

    // Pause auto slide when hovering over the slider
    slider.addEventListener('mouseenter', function () {
        clearInterval(autoSlideInterval);
    });

    // Resume auto slide when leaving the slider
    slider.addEventListener('mouseleave', function () {
        autoSlideInterval = startAutoSlide();
    });
});
// Lấy tất cả các button
var buttons = document.querySelectorAll('.btn');

// Lặp qua từng button
for (var i = 0; i < buttons.length; i++) {
    // Thêm sự kiện click vào mỗi button
    buttons[i].addEventListener('click', function() {
        // Lấy id của button vừa được click
        var buttonId = this.id;

        // Lấy tất cả các phần tử .major
        var majors = document.querySelectorAll('.major');

        // Lặp qua từng phần tử .major
        for (var j = 0; j < majors.length; j++) {
            // Nếu id của phần tử .major khớp với id của button vừa được click
            if (majors[j].id === buttonId) {
                // Hiển thị phần tử .major này
                majors[j].style.display = 'block';
            } else {
                // Ẩn phần tử .major này
                majors[j].style.display = 'none';
            }
        }
    });
}
function showTable(tableName) {
    const tableContainers = document.querySelectorAll('.table-container');
    tableContainers.forEach(container => {
      container.classList.add('hidden');
    });

    const selectedTable = document.getElementById(`${tableName}-table`);
    selectedTable.classList.remove('hidden');
  }