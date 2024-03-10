function checkAndSetCookie() {
    
    const alertShown = document.cookie.replace(/(?:(?:^|.*;\s*)alertShown\s*\=\s*([^;]*).*$)|^.*$/, "$1");

    if (!alertShown) {
        alert("Welcome to Our WebSite.");
        
        const expirationDate = new Date();
        expirationDate.setTime(expirationDate.getTime() + (30 * 24 * 60 * 60 * 1000)); 
        document.cookie = "alertShown=true; expires=" + expirationDate.toUTCString();
    }
}

window.onload = checkAndSetCookie;