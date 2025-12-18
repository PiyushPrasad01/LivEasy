document.getElementById('chatbot-icon').addEventListener('click', function() {
    const window = document.getElementById('chat-window');
    window.style.display = window.style.display === 'none' ? 'flex' : 'none';
});

document.getElementById('send-btn').addEventListener('click', sendMessage);

function sendMessage() {
    const input = document.getElementById('chat-input');
    const content = document.getElementById('chat-content');
    const message = input.value;

    if (!message) return;

    // Show user message
    content.innerHTML += `<p style='text-align:right;'><b>You:</b> ${message}</p>`;
    input.value = '';

    // Send to PHP API
    fetch('api/chatbot_process.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: 'message=' + encodeURIComponent(message)
    })
    .then(response => response.json())
    .then(data => {
        content.innerHTML += `<p><b>Bot:</b> ${data.message}</p>`;
        content.scrollTop = content.scrollHeight;
    });
}
