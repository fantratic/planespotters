

function runAPI(){
    fetch('https://api.planespotters.net/pub/photos/reg/N19986').then(res => res.json()).then(data => {
        console.log(data);
        data = JSON.stringify(data.photos[0].link);
        document.getElementById('data').innerHTML = data;
        link = data.replace(/['"]+/g, '');
        window.location.href = link;
    });
}