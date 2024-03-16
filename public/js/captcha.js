let captcha = ''

function generateRandomString(length) {
    let result = '';
    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    const charactersLength = characters.length;
    for (let i = 0; i < length; i++) {
        result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    return result;
}

// Draw CAPTCHA text on canvas with noise
function drawCaptcha() {
    const canvas = document.getElementById('captchaCanvas');
    const ctx = canvas.getContext('2d');

    ctx.fillStyle = 'white'; // Set background color
    ctx.fillRect(0, 0, canvas.width, canvas.height);

    const captchaText = generateRandomString(6); // Generate a random string
    captcha = captchaText;
    console.log('111111111', captchaText)
    ctx.font = '30px Arial'; // Set font size and style
    ctx.fillStyle = 'black'; // Set text color
    ctx.fillText(captchaText, 10, 30); // Draw text on canvas

    // Add noise (random dots) to the image
    for (let i = 0; i < 50; i++) {
        const x = Math.random() * canvas.width;
        const y = Math.random() * canvas.height;
        ctx.fillStyle = 'rgba(0, 0, 0, 0.2)';
        ctx.fillRect(x, y, 2, 2);
    }
}

// Generate CAPTCHA when the button is clicked
document.getElementById('generateCaptcha').addEventListener('click', drawCaptcha);

// Initial generation of CAPTCHA on page load
drawCaptcha();
