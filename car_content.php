<?php 
if ( isset( $_GET['data'] ) )  {
    if ( !is_numeric( $_GET['data'] ) ) {
        die();
    } else {
        switch ( $_GET['data'] ) {
            case 1: 
                $html = '
                    <h2>Outside1</h2>
                    <h3>Make every mile legendary feature: <em>Privacy glas</em></h3>
                    <p>Een beetje privacy voor je crew achterin - mag het?</p>
                    <a href="assets/images/mazdacar.jpg" data-lightbox="car">
                        <img src="assets/images/thumb.jpg" alt="Mazda" />
                        <span class="opencar"></span>
                    </a>
                    ';
                break;
            case 2: 
                $html = '
                    <h2>Outside2</h2>
                    <h3>Make every mile legendary feature: <em>Privacy glas</em></h3>
                    <p>Een beetje privacy voor je crew achterin - mag het?</p>
                    <a href="assets/images/mazdacar.jpg" data-lightbox="car">
                        <img src="assets/images/thumb.jpg" alt="Mazda" />
                        <span class="opencar"></span>
                    </a>
                    ';
                break;
            case 3: 
                $html = '
                    <h2>Outside3</h2>
                    <h3>Make every mile legendary feature: <em>Privacy glas</em></h3>
                    <p>Een beetje privacy voor je crew achterin - mag het?</p>
                    <a href="assets/images/mazdacar.jpg" data-lightbox="car">
                        <img src="assets/images/thumb.jpg" alt="Mazda" />
                        <span class="opencar"></span>
                    </a>
                    ';
                break;
            case 4: 
                $html = '
                    <h2>Outside4</h2>
                    <h3>Make every mile legendary feature: <em>Privacy glas</em></h3>
                    <p>Een beetje privacy voor je crew achterin - mag het?</p>
                    <a href="assets/images/mazdacar.jpg" data-lightbox="car">
                        <img src="assets/images/thumb.jpg" alt="Mazda" />
                        <span class="opencar"></span>
                    </a>
                    ';
                break;
            case 5: 
                $html = '
                    <h2>Outside5</h2>
                    <h3>Make every mile legendary feature: <em>Privacy glas</em></h3>
                    <p>Een beetje privacy voor je crew achterin - mag het?</p>
                    <a href="assets/images/mazdacar.jpg" data-lightbox="car">
                        <img src="assets/images/thumb.jpg" alt="Mazda" />
                        <span class="opencar"></span>
                    </a>
                    ';
                break;
            case 6: 
                $html = '
                    <h2>Outside6</h2>
                    <h3>Make every mile legendary feature: <em>Privacy glas</em></h3>
                    <p>Een beetje privacy voor je crew achterin - mag het?</p>
                    <a href="assets/images/mazdacar.jpg" data-lightbox="car">
                        <img src="assets/images/thumb.jpg" alt="Mazda" />
                        <span class="opencar"></span>
                    </a>
                    ';
                break;
            case 7: 
                $html = '
                    <h2>Outside7</h2>
                    <h3>Make every mile legendary feature: <em>Privacy glas</em></h3>
                    <p>Een beetje privacy voor je crew achterin - mag het?</p>
                    <a href="assets/images/mazdacar.jpg" data-lightbox="car">
                        <img src="assets/images/thumb.jpg" alt="Mazda" />
                        <span class="opencar"></span>
                    </a>
                    ';
                break;
        }
        echo $html;
    }
}