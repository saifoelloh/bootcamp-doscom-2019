//Mobile
if(window.innerWidth<=730){
    // tambahan durung fix go mobile
    document.querySelectorAll('h1').forEach((i)=>{
        i.style.fontSize="180%";
    })
    document.querySelectorAll('.gambar-benefit p').forEach((i)=>{
        i.style.fontSize="80%";
    })
    document.querySelectorAll('.daftar-sekarang p').forEach(p => {
        p.style.fontSize="80%";
    });
    document.getElementById('rata-tengah').style.fontSize="80%";
    document.getElementById('dokumentasi').style.textAlign="center";
    document.getElementById('intro').classList.add('mt-5');
    document.getElementById('apa-itu-bootcamp').style.fontSize="80%";
    document.querySelector('#apa-itu-bootcamp h1').style.textAlign="center";
    document.getElementsByClassName('info-regis')[0].style.fontSize="80%";
    document.getElementsByClassName('info-regis')[0].classList.add('text-center');
    document.getElementById('kontak').style.fontSize="80%";
    document.querySelectorAll('.fullscreen').forEach(full=>{
        full.style.minHeight="150vh";
    })
    document.getElementById('intro').style.minHeight="100vh";
    document.getElementById('galeri').style.minHeight="175vh";
    document.getElementById('waktu-biaya').style.minHeight="160vh";
    document.getElementById('tentang-acara').style.minHeight="120vh";
    document.getElementById('daftar').style.minHeight="160vh";
    document.getElementById('gsr').style.textAlign="center";
    document.getElementsByClassName('daftar-sekarang')[0].style.textAlign="center";
    document.getElementById('footer').style.fontSize="80%";
    document.getElementById('grid1').classList.remove('col-md-4');
    document.getElementById('grid2').classList.remove('col-md-4');
    document.getElementById('grid3').classList.remove('col-md-4');
    document.getElementById('grid1').classList.add('col-6','text-center');
    document.getElementById('grid2').classList.add('col-6','text-center');
    document.getElementById('grid3').classList.add('col-md-12','text-center');

    $(window).on('load',()=>{
        $('.doscom').addClass('doscom-muncul');
        document.getElementById('hide-gambar').style.display="none";
    })
    
    $(window).scroll(()=>{
        var wScroll=$(this).scrollTop();
    
        if(wScroll>$('#tentang-acara').offset().top-200){
            $('.apa-itu-bootcamp').addClass('bootcamp-muncul');
            $('.gambar-benefit').each((i)=>{
                setTimeout(() => {
                    $('.gambar-benefit').eq(i).addClass('benefit-muncul');
                },400*(i+1));
            })
        }
    
        if (wScroll>$('.hover-gmbr').offset().top-400){
            document.querySelectorAll('.hover-gmbr').forEach((i,key)=>{
                setTimeout(()=>{
                    i.classList.add('muncul');
                },300*key+1);
            })
        }
    
        if(wScroll>$('.Biaya-dan-lainya').offset().top-200){
            $('.info-regis').addClass('regis-muncul');
            $('.list-acara').each((i)=>{
                setTimeout(()=>{
                    $('.list-acara').eq(i).addClass('list-muncul');
                },400*(i+1));
            })
        }
    
        if(wScroll>$('.Daftar').offset().top-250){
            $('.daftar-sekarang').addClass('daftar-muncul');
            $('.list-from').addClass('form-muncul');
        }
    })  
}
//Dekstop
$(window).on('load',()=>{
    $('.doscom').addClass('doscom-muncul');
    setTimeout(()=>{
        $('.hide-gambar').addClass('muncul-gambar');
    },1000)
})

$(window).scroll(()=>{
    var wScroll=$(this).scrollTop();

    if(wScroll>$('#tentang-acara').offset().top-200){
        $('.apa-itu-bootcamp').addClass('bootcamp-muncul');
        $('.gambar-benefit').each((i)=>{
            setTimeout(() => {
                $('.gambar-benefit').eq(i).addClass('benefit-muncul');
            },400*(i+1));
        })
    }

    if (wScroll>$('.hover-gmbr').offset().top-400){
        document.querySelectorAll('.hover-gmbr').forEach((i,key)=>{
            setTimeout(()=>{
                i.classList.add('muncul');
            },300*key+1);
        })
    }

    if(wScroll>$('.Biaya-dan-lainya').offset().top-200){
        $('.info-regis').addClass('regis-muncul');
        $('.list-acara').each((i)=>{
            setTimeout(()=>{
                $('.list-acara').eq(i).addClass('list-muncul');
            },400*(i+1));
        })
    }

    if(wScroll>$('.Daftar').offset().top-250){
        $('.daftar-sekarang').addClass('daftar-muncul');
        $('.list-from').addClass('form-muncul');
    }
})
