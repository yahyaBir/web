// Import main.js içeriğini buraya taşıyalım
document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('.header');
    const mobileToggle = document.querySelector('.mobile-toggle');
    const navbarMenu = document.querySelector('.navbar-menu');
    const dropdownToggle = document.querySelector('.dropdown-toggle');
    const dropdownMenu = document.querySelector('.dropdown-menu');

    // Mobile menü toggle
    if (mobileToggle && navbarMenu) {
        mobileToggle.addEventListener('click', function() {
            this.classList.toggle('active');
            navbarMenu.classList.toggle('active');
            document.body.style.overflow = navbarMenu.classList.contains('active') ? 'hidden' : '';
        });
    }

    // Dropdown toggle
    if (dropdownToggle && dropdownMenu) {
        dropdownToggle.addEventListener('click', function(e) {
            if (window.innerWidth <= 768) {
                e.preventDefault();
                const isOpen = dropdownMenu.classList.contains('active');
                
                // Dropdown menüyü aç/kapat
                dropdownMenu.classList.toggle('active');
                this.classList.toggle('active');
                dropdownMenu.style.maxHeight = isOpen ? null : `${dropdownMenu.scrollHeight}px`;
            }
        });
    }

    // Sayfa dışına tıklandığında menüleri kapat
    document.addEventListener('click', function(e) {
        if (window.innerWidth <= 768) {
            const isClickInsideNav = navbarMenu.contains(e.target);
            const isClickInsideToggle = mobileToggle.contains(e.target);

            if (!isClickInsideNav && !isClickInsideToggle) {
                navbarMenu.classList.remove('active');
                mobileToggle.classList.remove('active');
                document.body.style.overflow = '';

                if (dropdownMenu) {
                    dropdownMenu.classList.remove('active');
                    dropdownToggle.classList.remove('active');
                    dropdownMenu.style.maxHeight = null;
                }
            }
        }
    });

    // Scroll işlevi
    let lastScroll = 0;
    window.addEventListener('scroll', function() {
        if (!navbarMenu.classList.contains('active')) {
            const currentScroll = window.pageYOffset;
            
            if (currentScroll > lastScroll && currentScroll > header.offsetHeight) {
                header.style.transform = 'translateY(-100%)';
            } else {
                header.style.transform = 'translateY(0)';
            }
            
            lastScroll = currentScroll;
        }
    });

    // Pencere yeniden boyutlandırıldığında
    window.addEventListener('resize', function() {
        if (window.innerWidth > 768) {
            navbarMenu.classList.remove('active');
            mobileToggle.classList.remove('active');
            dropdownToggle.classList.remove('active');
            document.body.style.overflow = '';
            
            if (dropdownMenu) {
                dropdownMenu.style.maxHeight = null;
            }
        }
    });
}); 