@php
$faker = Faker\Factory::create();    
@endphp
<div class="col-12  col-lg-6 card__custom"
     role="button">

    <div class="card shadow-4 border-0">
        <div class="card-image bg-primary card__image__outer">
            <div class="card__image__inner">
                <img class="card__image"
                     src="{{ [
                        'https://images3.alphacoders.com/857/857335.jpg',
                        'https://images5.alphacoders.com/958/thumb-1920-958580.jpg',
                        'https://images3.alphacoders.com/575/thumb-1920-575608.jpg',
                        'https://image.winudf.com/v2/image1/Y29tLm1vYmlsZXVuaXZlcnNpdHkuZ2FsYXh5X3NjcmVlbl8wXzE1NDMyOTM0NjBfMDc5/screen-0.jpg?fakeurl=1&type=.webp',
                        'https://images3.alphacoders.com/103/1034504.jpg',
                        'https://news.microsoft.com/wp-content/uploads/2017/12/XboxOneX_33.jpg',
                        'https://images3.alphacoders.com/857/857335.jpg',
                        'https://i.pinimg.com/originals/0a/4d/cb/0a4dcb92fa2d3c601b58d72720d6bec4.jpg',
                        'https://i.joecomp.com/img/wallpapers/357/21-beautiful-wallpapers-you-must-get-today-hd-fhd-4k-uhd_4.jpg',
                        'https://images.unsplash.com/photo-1555231955-348aa2312e19?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MXx8fGVufDB8fHx8&w=1000&q=80',
                        'https://cdn.wallpapersafari.com/71/5/8ptAya.jpg',
                        'https://cdn.dribbble.com/uploads/39910/original/f5e22f825fac9d3d3ea1b8684657fae2.png?1659117273',
                        'https://images3.alphacoders.com/857/857335.jpg',
                        'https://images5.alphacoders.com/958/thumb-1920-958580.jpg',
                        'https://images3.alphacoders.com/575/thumb-1920-575608.jpg',
                        'https://image.winudf.com/v2/image1/Y29tLm1vYmlsZXVuaXZlcnNpdHkuZ2FsYXh5X3NjcmVlbl8wXzE1NDMyOTM0NjBfMDc5/screen-0.jpg?fakeurl=1&type=.webp',
                        'https://images3.alphacoders.com/103/1034504.jpg',
                        'https://news.microsoft.com/wp-content/uploads/2017/12/XboxOneX_33.jpg',
                        'https://images3.alphacoders.com/857/857335.jpg',
                        'https://i.pinimg.com/originals/0a/4d/cb/0a4dcb92fa2d3c601b58d72720d6bec4.jpg',
                        'https://i.joecomp.com/img/wallpapers/357/21-beautiful-wallpapers-you-must-get-today-hd-fhd-4k-uhd_4.jpg',
                        'https://images.unsplash.com/photo-1555231955-348aa2312e19?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MXx8fGVufDB8fHx8&w=1000&q=80',
                        'https://cdn.wallpapersafari.com/71/5/8ptAya.jpg',
                        'https://cdn.dribbble.com/uploads/39910/original/f5e22f825fac9d3d3ea1b8684657fae2.png?1659117273',
                        'https://images3.alphacoders.com/857/857335.jpg',
                        'https://images5.alphacoders.com/958/thumb-1920-958580.jpg',
                        'https://images3.alphacoders.com/575/thumb-1920-575608.jpg',
                        'https://image.winudf.com/v2/image1/Y29tLm1vYmlsZXVuaXZlcnNpdHkuZ2FsYXh5X3NjcmVlbl8wXzE1NDMyOTM0NjBfMDc5/screen-0.jpg?fakeurl=1&type=.webp',
                        'https://images3.alphacoders.com/103/1034504.jpg',
                        'https://news.microsoft.com/wp-content/uploads/2017/12/XboxOneX_33.jpg',
                        'https://images3.alphacoders.com/857/857335.jpg',
                        'https://i.pinimg.com/originals/0a/4d/cb/0a4dcb92fa2d3c601b58d72720d6bec4.jpg',
                        'https://i.joecomp.com/img/wallpapers/357/21-beautiful-wallpapers-you-must-get-today-hd-fhd-4k-uhd_4.jpg',
                        'https://images.unsplash.com/photo-1555231955-348aa2312e19?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MXx8fGVufDB8fHx8&w=1000&q=80',
                        'https://cdn.wallpapersafari.com/71/5/8ptAya.jpg',
                        'https://cdn.dribbble.com/uploads/39910/original/f5e22f825fac9d3d3ea1b8684657fae2.png?1659117273',
                     ][rand(0, 17)]; }}">
            </div>
        </div>
        <div class="card-body card__body py-3 px-7">

            <small><em>September 03, 2016</em></small>
            <!-- Title -->
            <h5 class=" card__body__title h4 mb-2">{{ $faker-> text(rand(10, 50)) }}</h5>
            <!-- Text  -->
            <p class=" text-muted mb-0 text__overflow__3">
                {{ $faker->realText($maxNbChars = 500, $indexSize = 3) }}
            </p>
            <p class="text-right">
                <a href="#"
                   class="card__read__more text-primary text-right shadow-none">
                    Ler mais &nbsp;
                    <i class="fa-solid fa-arrow-right-long"></i>
                </a>
            </p>
        </div>

    </div>
</div>
