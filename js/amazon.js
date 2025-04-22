let grande = document.querySelector('.grande-image');
let Sac = document.querySelectorAll('.amazon .galerie img');
    
for (let i=0; i<Sac.length; i++){
    Sac[i].addEventListener('click', () => {
        let source = Sac[i].getAttribute('src');
    
        let imageActuelle = grande.querySelector('img');
    
        imageActuelle.setAttribute('src', source);
    });
}

grande.addEventListener('click', () => {
    let image = grande.querySelector('img');
    let source = image.getAttribute('src');
    console.log(source);

    let monImage = document.createElement('img');
    monImage.setAttribute('src', source)

    let div = document.createElement('div');
    div.setAttribute('id', 'lightbox');

    let croix = document.createElement('img');
    croix.setAttribute('src', 'images/close.jpg');
    croix.setAttribute('id', 'croix');

    croix.addEventListener('click', () => {
        document.body.removeChild(div);
    });

    div.appendChild(croix);
    div.appendChild(monImage);

    document.body.appendChild(div);
});
