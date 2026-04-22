document.addEventListener("DOMContentLoaded", function () {
    const scssUrls = {$scssUrls|@json_encode};
    
    // Validate input
    if (!Array.isArray(scssUrls) || scssUrls.length === 0) {
        console.warn("No SCSS URLs provided");
        return;
    }
    
    async function compileScssToCss(scssUrl) {
        try {
            const response = await fetch(scssUrl);
            
            if (!response.ok) {
                throw new Error(`HTTP ${response.status}: ${response.statusText}`);
            }
            
            const scssContent = await response.text();
            const result = Sass.compile(scssContent);
            
            const styleElement = document.createElement("style");
            styleElement.textContent = result.css;
            document.head.appendChild(styleElement);
            
            console.log(`✓ SCSS compiled: ${scssUrl}`);
        } catch (error) {
            console.error(`✗ Failed to compile SCSS (${scssUrl}):`, error.message);
        }
    }
    
    // Compile all SCSS files
    scssUrls.forEach(compileScssToCss);
});
