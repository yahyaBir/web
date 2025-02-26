import './bootstrap';

// Features functionality
const initFeatures = () => {
    const featuresContainer = document.querySelector('.features-container');
    if (!featuresContainer) return;

    const featureButtons = document.querySelectorAll('.feature-btn');
    const featureInfos = document.querySelectorAll('.feature-info');
    const featureDescriptions = document.querySelectorAll('.feature-description');

    function setActiveFeature(featureId) {
        featureButtons.forEach(btn => {
            btn.classList.remove('active');
            const title = btn.querySelector('.feature-title');
            if (title) title.style.color = '#999999';
        });
        featureInfos.forEach(info => info.classList.remove('active'));
        featureDescriptions.forEach(desc => desc.classList.remove('active'));

        const selectedButton = document.querySelector(`.feature-btn[data-feature="${featureId}"]`);
        const selectedInfo = document.querySelector(`.feature-info[data-feature="${featureId}"]`);
        const selectedDescription = document.querySelector(`.feature-description[data-feature="${featureId}"]`);

        if (selectedButton) {
            selectedButton.classList.add('active');
            const title = selectedButton.querySelector('.feature-title');
            if (title) title.style.color = 'var(--primary-color)';
        }
        if (selectedInfo) selectedInfo.classList.add('active');
        if (selectedDescription) selectedDescription.classList.add('active');
    }

    featureButtons.forEach(button => {
        button.addEventListener('mouseenter', () => {
            const featureId = button.getAttribute('data-feature');
            setActiveFeature(featureId);
        });
    });

    setActiveFeature('extraction');

    featuresContainer.addEventListener('mouseleave', () => {
        setActiveFeature('extraction');
    });
};

// Navigation functionality
const initNavigation = () => {
    const header = document.querySelector('.header');
    const mobileToggle = document.querySelector('.mobile-toggle');
    const navbarMenu = document.querySelector('.navbar-menu');
    const dropdownToggle = document.querySelector('.dropdown-toggle');
    const dropdownMenu = document.querySelector('.dropdown-menu');

    if (mobileToggle && navbarMenu) {
        mobileToggle.addEventListener('click', function() {
            this.classList.toggle('active');
            navbarMenu.classList.toggle('active');
            document.body.style.overflow = navbarMenu.classList.contains('active') ? 'hidden' : '';
        });
    }

    if (dropdownToggle && dropdownMenu) {
        dropdownToggle.addEventListener('click', function(e) {
            if (window.innerWidth <= 768) {
                e.preventDefault();
                const isOpen = dropdownMenu.classList.contains('active');
                dropdownMenu.classList.toggle('active');
                this.classList.toggle('active');
                dropdownMenu.style.maxHeight = isOpen ? null : `${dropdownMenu.scrollHeight}px`;
            }
        });
    }

    document.addEventListener('click', function(e) {
        if (window.innerWidth <= 768) {
            const isClickInsideNav = navbarMenu?.contains(e.target);
            const isClickInsideToggle = mobileToggle?.contains(e.target);

            if (!isClickInsideNav && !isClickInsideToggle) {
                navbarMenu?.classList.remove('active');
                mobileToggle?.classList.remove('active');
                document.body.style.overflow = '';

                if (dropdownMenu) {
                    dropdownMenu.classList.remove('active');
                    dropdownToggle?.classList.remove('active');
                    dropdownMenu.style.maxHeight = null;
                }
            }
        }
    });

    let lastScroll = 0;
    window.addEventListener('scroll', function() {
        if (!navbarMenu?.classList.contains('active')) {
            const currentScroll = window.pageYOffset;
            
            if (currentScroll > lastScroll && currentScroll > header.offsetHeight) {
                header.style.transform = 'translateY(-100%)';
            } else {
                header.style.transform = 'translateY(0)';
            }
            
            lastScroll = currentScroll;
        }
    });
};

// FAQ functionality
const initFAQ = () => {
    const faqQuestions = document.querySelectorAll('.faq-question');
    
    faqQuestions.forEach(question => {
        question.addEventListener('click', () => {
            const answer = question.nextElementSibling;
            const isExpanded = question.getAttribute('aria-expanded') === 'true';
            
            faqQuestions.forEach(q => {
                if (q !== question) {
                    q.setAttribute('aria-expanded', 'false');
                    q.nextElementSibling.style.maxHeight = '0';
                }
            });
            
            question.setAttribute('aria-expanded', !isExpanded);
            answer.style.maxHeight = !isExpanded ? `${answer.scrollHeight}px` : '0';
        });
    });
};

// Responsive handling
const initResponsive = () => {
    const navbarMenu = document.querySelector('.navbar-menu');
    const mobileToggle = document.querySelector('.mobile-toggle');
    const dropdownToggle = document.querySelector('.dropdown-toggle');
    const dropdownMenu = document.querySelector('.dropdown-menu');

    window.addEventListener('resize', function() {
        if (window.innerWidth > 768) {
            navbarMenu?.classList.remove('active');
            mobileToggle?.classList.remove('active');
            dropdownToggle?.classList.remove('active');
            document.body.style.overflow = '';
            
            if (dropdownMenu) {
                dropdownMenu.style.maxHeight = null;
            }
        }
    });
};

// Initialize all functionality when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    initFeatures();
    initNavigation();
    initFAQ();
    initResponsive();
}); 