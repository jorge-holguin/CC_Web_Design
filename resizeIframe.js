window.addEventListener("load", function() {
    var iframes = document.querySelectorAll("iframe");
    iframes.forEach(function(iframe) {
        updateIframeHeight(iframe);
        iframe.addEventListener("load", function() {
            updateIframeHeight(iframe);
        });
    });
});

function updateIframeHeight(iframe) {
    setTimeout(function() {
        try {
            var body = iframe.contentWindow.document.body,
                html = iframe.contentWindow.document.documentElement;
            var height = Math.max(body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight);
            iframe.style.height = height + 'px';
        } catch (e) {
            console.error("Error adjusting iframe height:", e);
        }
    }, 500); // Delay para asegurar que el contenido interno está completamente cargado
}
