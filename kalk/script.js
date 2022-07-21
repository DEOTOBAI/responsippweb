let tampil = document.getElementById('tampil');

let masuk = Array.from(document.getElementsByClassName('tombol'));

masuk.map( tombol => {
    tombol.addEventListener('click', (e) => {
        switch(e.target.innerText){
            case 'C':
                tampil.innerText = '';
                break;

            case 'CE':
                if (tampil.innerText){
                   tampil.innerText = tampil.innerText.slice(0, -1);
                }
                break;
                
            case '=':
                try{
                    tampil.innerText = eval(tampil.innerText);
                } catch {
                    tampil.innerText = "Error"
                }
                break;

            default:
                tampil.innerText += e.target.innerText;
        }
    });
});