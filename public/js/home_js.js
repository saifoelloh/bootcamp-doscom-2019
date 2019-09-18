
if(window.innerWidth<=730){
    document.getElementById('hide-gambar').style.display="none";
    document.getElementById('rata-tengah').style.fontSize="80%";
    document.getElementById('apa-itu-bootcamp').style.fontSize="80%";
    document.querySelector('#apa-itu-bootcamp h1').style.textAlign="center";
    document.getElementById('dokumentasi').style.textAlign="center";
    document.getElementById('info-regis').style.textAlign="center";
    document.getElementsByClassName('daftar-sekarang')[0].style.textAlign="center";
    document.querySelectorAll('.daftar-sekarang p').forEach(p => {
        p.style.fontSize="80%";
    });
    document.getElementById('kontak').style.fontSize="80%";
    document.querySelectorAll('.fullscreen').forEach(full=>{
        full.style.height="150vh";
    })
    document.getElementById('intro').style.height="100vh";
    document.getElementById('galeri').style.height="170vh";
    document.getElementById('tentang-acara').style.height="120vh";
    document.getElementById('daftar').style.height="140vh";
    document.getElementById('gsr').style.textAlign="center";
    document.getElementById('grid1').classList.remove('col-md-4');
    document.getElementById('grid2').classList.remove('col-md-4');
    document.getElementById('grid3').classList.remove('col-md-4');
    document.getElementById('grid1').classList.add('mx-4');
    document.getElementById('grid2').classList.add('ml-4');
    document.getElementById('grid3').classList.add('col-md-12','text-center');
}

