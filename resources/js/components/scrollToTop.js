export default function() {
    const scrollBtn = document.querySelector('[data-element="scroll-to-top"]');
    
    if(scrollBtn) {
        scrollBtn.addEventListener("click", function () {
            window.scroll({
                top: 0,
                left: 0,
                behavior: "smooth"
            });
        });
    }
}