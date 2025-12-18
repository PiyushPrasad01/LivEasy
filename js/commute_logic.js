function predictCommute() {
    const destination = document.getElementById('dest-address').value;
    if(!destination) return alert("Please enter a destination");
    
    document.getElementById('commute-result').style.display = 'block';
    // Logic: In a real app, you would fetch lat/lng from properties table 
    // and use the Google Distance Matrix API here.
}
